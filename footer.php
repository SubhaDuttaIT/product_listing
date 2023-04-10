<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package product_listing
 */

?>

<footer class="ftr cust_contwrpr" >
    <div class="container pb-75">
        <div class="row ftr__wrpr">
            <div class="col-md-3 text-center marg_mobbtm">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_footer.png" alt="" class="ftr__logo">
            </div>
            <div class="col-md-9">
                <div class="row ">
                    <div class="col-md-3 ftr__content">
                    <h2 class="ftr_hdng">QUICK ORDER</h2>
                    <p><a href="#" class="ftr__link">customer@gmail.com</a></p>
                    <p>Find a location nearest you. </p>
                    <p>See <a href="" class="ftr__link2"> Our Stores </a> </p>
                    </div>
                    <div class="col-md-3 ftr__content">
                        <h2 class="ftr_hdng">COMPANY</h2>
                        <ul>
                            <li><a href="#" class="ftr__link">Varanasi & Banarasi Saree</a></li>
                            <li><a href="#" class="ftr__link">Contact Us</a></li>
                            <li><a href="#" class="ftr__link">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr__content">
                        <h2 class="ftr_hdng">Support</h2>
                        <ul>
                            <li><a href="#" class="ftr__link">FAQ</a></li>
                            <li><a href="#" class="ftr__link">Help Center</a></li>
                            <li><a href="#" class="ftr__link">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr__content">
                        <h2 class="ftr_hdng">MENU</h2>
                        <ul>
                            <li><a href="#" class="ftr__link">Home</a></li>
                            <li><a href="#" class="ftr__link">All Products</a></li>
                            <li><a href="#" class="ftr__link">Collections</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center mb-0 bg-white py-3">Copyright &copy; 2022 Rasm </p>
</div><!-- #page -->



<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

         <form>
  

     <h4>Select2 - Tokenization</h4>
        <select class="tokenizationSelect2" multiple="true" style="width: 453px;">
        <option value="Lamborghini">Lamborghini</option>
        <option value="Bugatti">Bugatti</option>
        <option value="Ferrari">Ferrari</option>
        <option value="BMW">BMW</option>
        <option value="Mercedes-Benz">Mercedes-Benz</option>
        </select>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php wp_footer(); ?>

<div class="scrl_top" style="display: none;">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/coreNavigation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flashy.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

 <script type="text/javascript">
  jQuery(document).ready(function(){
  jQuery(".tokenizationSelect2").select2({
        placeholder: "Your favourite car", //placeholder
        tags: true,
        tokenSeparators: ['/',',',';'," "] 
    });
})
  
 </script>








<script>
    $('nav').coreNavigation({
    layout: "brand-center",
    menuPosition: 'center',
    responsideSlide: true,
    container: true,
    dropdownEvent: 'accordion'
    
});
</script>

<script>
    $(document).ready(function () {


        $(window).scroll(function () {
            var sticky = $('.hdr'),
                scroll = $(window).scrollTop();


            if (scroll >= 100) sticky.addClass('fixed');
            else sticky.removeClass('fixed');



        });

    });
</script>

<script>
    $(document).ready(function () {
        var offset = 250;
        var duration = 500;

        $(document).scroll(function () {
            if ($(this).scrollTop() > offset) {
                $('.scrl_top').show();
            } else {
                $('.scrl_top').hide();
            }
        });
        $('.scrl_top').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;

        })
    });
</script>
<script>
    
    $('#product_slider').owlCarousel({
            loop: true,
            margin: 40,
            responsiveClass: true,
            nav: false,
            dots: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 2,
                    loop: true,
                    margin: 20
                },
                1200: {
                    items: 2,
                    loop: true,
                    margin: 20
                }
            }
        })
</script>

<script>
    
    $('#choice_slider').owlCarousel({
            loop: true,
            margin: 40,
            responsiveClass: true,
            nav: false,
            dots: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 2,
                    loop: true,
                    margin: 20
                },
                1200: {
                    items: 2,
                    loop: true,
                    margin: 20
                }
            }
        })
</script>

<script>
    
    $('#blog_slider').owlCarousel({
            loop: true,
            margin: 40,
            responsiveClass: true,
            nav: false,
            dots: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 2,
                    loop: true,
                    margin: 20
                },
                1200: {
                    items: 3,
                    loop: true,
                    margin: 20
                }
            }
        })
</script>




<script type="text/javascript">
    $(document).ready(function() {
  accordion();
});

$(document).resize(function() {
  accordion();
});

// Accordion

function accordion() {
  $(".accordion-header").click(function() {
    if (
      $(this)
      .next()
      .is(":visible")
    ) {
      $(this)
        .next()
        .slideUp();
      $(this)
        .parent()
        .addClass("accordion-close");
      $(this)
        .parent()
        .removeClass("accordion-open");
    } else {
      $(".accordion-body").slideUp();
      $(".accordion-item").removeClass("accordion-open");
      $(this)
        .next()
        .slideDown();
      $(this)
        .parent()
        .addClass("accordion-open");
      $(this)
        .parent()
        .removeClass("accordion-close");
    }
  });

  $("#expand").click(function() {
    $(".accordion-body").slideDown();
    $(".accordion-item").addClass("accordion-open");
  });

  $("#collapse").click(function() {
    $(".accordion-body").slideUp();
    $(".accordion-item").removeClass("accordion-open");
  });
}  
</script>


<script>
    //-----JS for Price Range slider-----
    const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

</script>
<script>
$("input#keyword").keyup(function() {
      if ($(this).val().length > 2) {
        $("#datafetch").show();
      } else {
        $("#datafetch").hide();
      }
    });

</script>

<script>
jQuery(document).ready(function(){    
jQuery("#cat").click(function(){ 
     // alert("vsnjs");
     jQuery('.search_result').show();
     jQuery('.hover_aff').hide();
});
});
jQuery(document).ready(function(){    
jQuery("#deb").click(function(){ 
     // alert("vsnjs");
     jQuery('.hover_aff').hide();
});
});
</script>

<!-- deb -->
<!-- <script type="text/javascript">
    $("#deb").on('change',function (){
        if(this.checked==true)
        {
             // alert(jQuery('#deb').attr('data-tag'));

             jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'data_fetch', pcat: jQuery('#deb').attr('data-tag') },
            success: function(data) {

                    jQuery('#datafetch').html( data );
                }
            });
        }
        else{
            alert('false');

             jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'data_fetch' },
            success: function(data) {

                    jQuery('#datafetch').html( data );
                }
            });
         



        }
    });
</script> -->
<!-- deb-end -->


<script type="text/javascript">
    $(".deb").on('change',function (){
        if(this.checked==true)
        {
             // alert(jQuery(this).attr('data-tag'));
            // jQuery('#datafetch').html('');

             jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'data_fetch', pcat: jQuery(this).attr('data-tag') },
            success: function(data) {

                    jQuery('#datafetch').append( data );
                    jQuery('.hover_aff').hide();
                    
                }
            });
        }
        else{
            //alert('false');

             jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'data_fetch' },
            success: function(data) {

                    //jQuery('#datafetch').html( data );
                    jQuery('.hover_aff').show();
                }
            });
         
           


        }
    });
</script>




</body>
</html>
