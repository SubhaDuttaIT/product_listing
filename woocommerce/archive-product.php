<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop'); ?>

<?php global $product; ?>

<section class="banner ">
  <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="" class="banner__image ">
  <div class="banner__bottom-curve"><img src="<?php echo get_template_directory_uri(); ?>/img/top_curve5.png" alt="" style="width:100%;"></div>
</section>







<section class="prodsec cust_contwrpr mt-0 pt-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/prod_bg.png);">
  <div class="bottom_curvetwo"><img src="<?php echo get_template_directory_uri(); ?>/img/top_curve2.png" alt="" style="width:100%;"></div>
  <div class="container">
    <div class="row mt-5">

      <div class="col-md-4 lft-pt ">
        <h5>HOME/BANARASI SAREES</h5>

        <?php  
        $term = get_term( 17, 'product_cat' ); 

        ?>
        <p>We have found <b><?php echo $term->count;?> Banarasi Sarees</b></p>
        <div class="bgclr">
         
           


               <?php if ( is_active_sidebar('sidebar-secondary') ) : ?>
               <div class="accordion-item accordion-close">
                <label class="accordion-header">Price Range <span></span></label>
                <div class="accordion-body  p-0 bg-white" style="display: none;">
                  <?php dynamic_sidebar('sidebar-secondary'); ?>
               </div>
               </div>
               <?php endif; ?>




          
          
             <div class="accordion-item accordion-close">
              <label class="accordion-header">Material <span></span></label>
              <div class="accordion-body bg-white" style="display: none;">
            <?php get_sidebar(); ?>

          </div>
        </div>
       





           <!-- custom -->
<!-- ajax code -->

  <h6>custom ajax code</h6>
 <form action="/" method="get"  id="product_search">
        <select name="cat" id="cat" onchange="fetch()">
            <option value="">All Categories</option>
            <?php

                // Product category Loop

                $terms = get_terms( array(
                        'taxonomy'   => 'product_cat', 
                        'hide_empty' => true, 
                ));

                // Loop through all category with a foreach loop
                foreach( $terms as $term ) {
                    echo '<option value="'. $term->term_id.'"> '. $term->name .' </option>';
                }
                ?>
        </select>
    </form>   
    


<!-- <form action="/" method="get"  id="product_search">
    <div class="p_search" name="cat" id="cat" onchange="fetch()">
<?php

// Product category Loop

$terms = get_terms( array(
'taxonomy'   => 'product_cat', 
'hide_empty' => true, 
));

// Loop through all category with a foreach loop
foreach( $terms as $term ) {
?>

<div class="wd_em d-flex justify-content-between">
<label for="<?php echo $term->name ?>"><?php echo $term->name ?></label>

<input type="checkbox" value="<?php echo $term->term_id ?>">
</div>
<?php }?>
</div>
</form> -->







<!-- ajax code -->
        <h4>Select2 - Tokenization</h4>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet" />





            <select id="select2-example" multiple="multiple">
            <option>Option 1</option>
            <option>Option 2</option>
            </select>




            <script type="text/javascript">
            $(document).ready(function() {
            $('#select2-example').select2({
            width: '100%',
            placeholder: 'Select or Add Product',
            language: {
            noResults: function() {
            return 'No Results Products <br> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create A new Product</button>';
            },
            },
            escapeMarkup: function(markup) {
            return markup;
            },
            });
            });

            function noResultsButtonClicked() {
            alert('You clicked the "No subha Result Found" button.');
            }
            </script>
            <style type="text/css">
            /* Expand button to all of option */
            .select2-results__option.select2-results__message {
            padding: 0px;
            }
            button#no-results-btn {
            width: 100%;
            height: 100%;
            padding: 6px;
            }

            /* Make button look like other li elements */
            button#no-results-btn {
            border: 0;
            background-color: white;
            text-align: left;
            }

            /* Give button same hover effect */
            .select2-results__option.select2-results__message:hover {
            color: white;
            }
            button#no-results-btn:hover {
            background-color: #5897fb;
            }
            </style>


        <!-- popup box -->
        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php //echo do_shortcode('[contact-form-7 id="163" title="Contact form 1"]');?>  
                    <div class="formdiv">
                    <form name="inpForm">
                        <input type="text" name="firstName" placeholder='first name'/>
                        <input type="text" name="lastName" id='lastName' placeholder='last name'/>
                        
                        <input type="text" placeholder="carType" />
                        <input type="button" value="display value" onclick='displayValue()'/>
                        
                    </form>
                </div>

                   





                 </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

        <!-- close popupbox -->

        <script type="text/javascript">
            displayValue = () => {

                  // you can get the value by name attribute like this
                  var gg = $('input[name=firstName]').val();
                  console.log('value of firstname : ' + $('input[name=firstName]').val());
                  
                  $("#select2-example").append('<option>'+gg+'</option>');

                
                  
                  // if there is the id as lastname
                  
                  //console.log('value of lastname by id : ' + $('#lastName').val());
                  
                  // get value of carType from placeholder  
                  //console.log('value of carType from placeholder ' + $('input[placeholder=carType]').val());

                }

            //     function update() {
            //     var select = document.getElementById('language');
            //     var option = select.options[select.selectedIndex];

            //     document.getElementById('value').value = option.value;
            //     document.getElementById('text').value = option.text;
            // }

            // update();
        </script>



         <div class="shot_by">
                <h5>Sort by category</h5>
                 <form>

                    <div  class="wd_em">
                    <label for="fruit1">Recommended</label>
                    <a href="<?php echo get_template_directory_uri(); ?>/shop/?orderby=rating" title="exampleItem" >
                    <input onchange="window.location.href='<?php echo get_template_directory_uri(); ?>/shop/?orderby=rating'" type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                    </a>
                    </div>

                     <div  class="wd_em">
                    <label for="fruit1">Price – Low to High </label>
                    <a href="<?php echo get_template_directory_uri(); ?>/shop/?orderby=price" title="exampleItem" >
                    <input onchange="window.location.href='<?php echo get_template_directory_uri(); ?>/shop/?orderby=price'" type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                    </a>
                    </div>

                     <div  class="wd_em">
                    <label for="fruit1">Price – High to Low</label>
                    <a href="<?php echo get_template_directory_uri(); ?>/shop/?orderby=price-desc" title="exampleItem" >
                    <input onchange="window.location.href='<?php echo get_template_directory_uri(); ?>/shop/?orderby=price-desc'" type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                    </a>
                    </div>

                     <div  class="wd_em">
                    <label for="fruit1">Offer / Discount</label>
                    <a href="<?php echo get_template_directory_uri(); ?>/shop/?orderby=on_sale_first" title="exampleItem" >
                    <input onchange="window.location.href='<?php echo get_template_directory_uri(); ?>/shop/?orderby=on_sale_first'" type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                    </a>
                    </div>
  
                 </form>


           <div class="shot_by">
                <h5>Sort by category</h5>
                 
                 <?php

                    // Product category Loop

                    $terms = get_terms( array(
                    'taxonomy'   => 'product_cat', 
                    'hide_empty' => true, 
                    ));

                    // Loop through all category with a foreach loop
                    foreach( $terms as $term ) {
                    ?>
                 <!-- deb -->
                 <div  class="wd_em">
                    <label for="deb"><?php echo $term->name ?></label>
                    <a href="javascript:void(0)" title="exampleItem" >
                    <input type="checkbox" class="deb" name="<?php echo $term->name ?>" data-tag="<?php echo $term->term_id ?>" >
                    </a>
                    </div>
                 <!-- deb-end -->
                 <?php }?>

                 </div>
                 </div>
               </div>
      </div>







       <div class="search_result" id="datafetch" style="display: contents;">
       <!--  <ul>
            <li>Please wait..</li>
        </ul>  -->
       </div>
     
    


      <div class="col-md-8 hover_aff">

      <?php
            if (woocommerce_product_loop()) {

              /**
               * Hook: woocommerce_before_shop_loop.
               *
               * @hooked woocommerce_output_all_notices - 10
               * @hooked woocommerce_result_count - 20
               * @hooked woocommerce_catalog_ordering - 30
               */
              do_action('woocommerce_before_shop_loop');

              woocommerce_product_loop_start();

              if (wc_get_loop_prop('total')) {
                while (have_posts()) {
                  the_post();

                  /**
                   * Hook: woocommerce_shop_loop.
                   */
                  do_action('woocommerce_shop_loop');

                  wc_get_template_part('content', 'product');
                }
              }

              woocommerce_product_loop_end();

              /**
               * Hook: woocommerce_after_shop_loop.
               *
               * @hooked woocommerce_pagination - 10
               */
              do_action('woocommerce_after_shop_loop');
            } else {
              /**
               * Hook: woocommerce_no_products_found.
               *
               * @hooked wc_no_products_found - 10
               */
              do_action('woocommerce_no_products_found');
            }

            /**
             * Hook: woocommerce_after_main_content.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action('woocommerce_after_main_content'); ?>

      </div>
        
      <!-- end    carousel   -->
    </div>

  </div>
  </div>
</section>


<?php

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */

get_footer('shop');
