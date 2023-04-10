<?php
/**
 * product_listing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package product_listing
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function product_listing_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on product_listing, use a find and replace
		* to change 'product_listing' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'product_listing', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'product_listing' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'product_listing_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'product_listing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function product_listing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'product_listing_content_width', 640 );
}
add_action( 'after_setup_theme', 'product_listing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function product_listing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'product_listing' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'product_listing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'product_listing_widgets_init' );


function __widgets_init() {
    register_sidebar( array (
    'name' => __('2nd Sidebar', 'textdomain'),
    'id' => 'sidebar-secondary',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
  }
  add_action( 'widgets_init', '__widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function product_listing_scripts() {
	wp_enqueue_style( 'product_listing-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'product_listing-style', 'rtl', 'replace' );

	wp_enqueue_script( 'product_listing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'product_listing_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'add_woocommerce_support' );


/* Remove product fillter */

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


// function pr_price_suffix( $price, $product ) {
//   return wc_price( wc_get_price_including_tax( $product ) ). ' test';
// }
// add_filter( 'woocommerce_get_price_html', 'pr_price_suffix', 10, 2  );

//  The saving percentage:

// add_filter( 'woocommerce_get_price_html', 'change_displayed_sale_price_html', 10, 2 );
// function change_displayed_sale_price_html( $price, $product ) {
//     // Only on sale products on frontend and excluding min/max price on variable products
//     if( $product->is_on_sale() && ! is_admin() && ! $product->is_type('variable')){
//         // Get product prices
//         $regular_price = (float) $product->get_regular_price(); // Regular price
//         $sale_price = (float) $product->get_price(); // Active price (the "Sale price" when on-sale)

//         // "Saving Percentage" calculation and formatting
//         $precision = 1; // Max number of decimals
//         $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ) . '%';

//         // Append to the formated html price
//         $price .= sprintf( __('<p class="saved-sale">Save: %s</p>', 'woocommerce' ), $saving_percentage );
//     }
//     return $price;
// }







function sv_add_text_above_wc_shop_image() { 

	global $product;
?> 

<div class="prod__det">
<h2 class="prod__name prod-mn2"><a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><?php echo esc_attr( $product->get_title() ); ?></a> </h2>
<p class="prod__price mb-0">
	<?php if( $product->is_on_sale() ) {?>
<!-- <span class="line_through"><?php echo $product->get_regular_price(); ?></span> <b>(<?php echo $product->get_sale_price(); ?>)</b> <span><?php echo $product->get_regular_price(); ?></span> -->
<?php


 $regular_price = (float) $product->get_regular_price(); // Regular price
        $sale_price = (float) $product->get_price(); // Active price (the "Sale price" when on-sale)

        // "Saving Percentage" calculation and formatting
        $precision = 1; // Max number of decimals
        $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ) . '%'; ?>
<span class="line_through"><?php echo $product->get_regular_price(); ?></span> <b>(<?php echo $saving_percentage; ?>)</b> <span><?php echo $product->get_sale_price(); ?></span>
 <?php }else { ?>
<span><?php echo $product->get_regular_price(); ?></span>
<?php }?>
</p>
<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</span></a>
</div> 
	
<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'sv_add_text_above_wc_shop_image', 9 );



// Remove product title in shop page

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');


remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 ); ?>
<?php
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', pcat: jQuery('#cat').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){
    if ($_POST['pcat']) {
        $product_cat_id = array(esc_attr( $_POST['pcat'] ));
    }else {
        $terms = get_terms( 'product_cat' ); 
        $product_cat_id = wp_list_pluck( $terms, 'term_id' );
    }

    $the_query = new WP_Query( 
        array( 
            'posts_per_page' => -1, 
            's' => esc_attr( $_POST['keyword'] ), 
            'post_type' => array('product'),
            
            'tax_query' => array(
                array(
                    'taxonomy'  => 'product_cat',
                    'field'     => 'term_id',
                    'terms'     => $product_cat_id,
                    // 'operator'  => 'IN',
                )
           )
        ) 
    );
    $i=1; 
     
    if( $the_query->have_posts() ) : ?>
        <div class="col-md-8">
        <?php if($i==1 || $i%2==1){ ?><div class="row prod_slider new_img_pt"> <?php } ?>
     <?php  
      while( $the_query->have_posts() ): $the_query->the_post(); ?>

      <!-- <?php print_r($i) ?>  -->
        <!-- <?php $count_posts = wp_count_posts( 'category=17' )->publish;?> -->

			
			


            <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">

            <a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_post_thumbnail('thumbnail')?></a>

            <div class="prod__det">
                <h2 class="prod__name prod-mn2"><a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a> </h2>
                <p class="prod__price mb-0">
            
                <?php 
                global $product;
			    $regular_price = (float) $product->get_regular_price(); // Regular price
			    $sale_price = (float) $product->get_price(); // Active price (the "Sale price" when on-sale)

			    // "Saving Percentage" calculation and formatting
			    $precision = 1; // Max number of decimals
			    $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ) . '%';
                ?>
                <?php if( $product->is_on_sale() ) {?>
                  <span class="line_through"><?php echo $product->get_regular_price(); ?></span> <b>(<?php echo $saving_percentage; ?>)</b> <span><?php echo $product->get_sale_price(); ?></span>
                   <?php }else { ?>
					<span><?php echo $product->get_regular_price(); ?></span>
					<?php }?>
                </p>

                <a href="<?php echo esc_url( post_permalink() ); ?>" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
         







           </div>
           </div>

        






        <?php $i++; endwhile;
       echo '</div>'; ?>
        <?php if($i==1 || $i%2==1){ ?> </div><?php  } ?>
        <?php
        wp_reset_postdata();  
    endif;
    
    die();
}



// single product price increase by quantity
add_action( 'woocommerce_single_product_summary', 'woocommerce_total_product_price', 31 );
function woocommerce_total_product_price() {
    global $woocommerce, $product;
    // let's setup our divs
    echo sprintf('<div id="product_total_price" style="margin-bottom:20px;">%s %s</div>',__('Product Total:','woocommerce'),'<span class="price">'.$product->get_price().'</span>');
    ?>
        <script>
            jQuery(function($){
                var price = <?php echo $product->get_price(); ?>,
                    currency = '<?php echo get_woocommerce_currency_symbol(); ?>';

                $('[name=quantity]').change(function(){
                    if (!(this.value < 1)) {

                        var product_total = parseFloat(price * this.value);

                        $('#product_total_price .price').html( currency + product_total.toFixed(2));

                    }
                });
            });
        </script>
    <?php
}


