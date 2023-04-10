<?php
/*Template Name: Home */
get_header();
?>
<?php 
$categories = get_categories( array(
'orderby' => 'name',
'order'   => 'ASC',
'hide_empty'      => false,
) );
print_r($categories);
$cat_image=get_field('upload_image');
foreach($categories as $category) { ?>
<ul>
<li><?php echo $category->name; ?></li>
<?php } ?>
</ul>






<section class="prodsec cust_contwrpr mt-0 pt-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/prod_bg.png);">
  <div class="bottom_curvetwo"><img src="<?php echo get_template_directory_uri(); ?>/img/top_curve2.png" alt="" style="width:100%;"></div>
  <div class="container">
    <div class="row mt-5">

      <div class="col-md-4 lft-pt">
        <h5>HOME/BANARASI SAREES</h5>
        <p>We have found <b>384 Banarasi Sarees</b></p>

        <div class="filter-part">
          <h6>FILTERS </h6>

          <div class="accordion">
            <div class="accordion-item ">
              <label class="accordion-header">Price Range <span></span></label>
              <div class="accordion-body  p-0 bg-white">

                <div class="d-flex">
                  <div class="wrapper wid_100">
                    <header>
                      <!--                     
                    <p>Select your price range</p> -->
                    </header>
                    <div class="price-input">
                      <div class="field">
                        <span>Min</span>
                        <input type="number" class="input-min" value="2500">
                      </div>
                      <div class="separator">-</div>
                      <div class="field">
                        <span>Max</span>
                        <input type="number" class="input-max" value="7500">
                      </div>
                    </div>
                    <div class="slider">
                      <div class="progress"></div>
                    </div>
                    <div class="range-input">
                      <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                      <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                    </div>
                  </div>


                </div>




              </div>
            </div>
          </div>


          <div class="accordion">
            <div class="accordion-item ">
              <label class="accordion-header">Material <span></span></label>
              <div class="accordion-body bg-white">
                <form>
                  <div class="wd_em d-flex justify-content-between">
                    <label for="Saree">Saree</label>
                    <input type="checkbox" id="Saree" name="Saree" value="">
                  </div>

                  <div class="wd_em d-flex justify-content-between">
                    <label for="Thaan">Fabric / Thaan </label>
                    <input type="checkbox" id="Thaan" name="Thaan" value="">
                  </div>

                  <div class="wd_em d-flex justify-content-between">
                    <label for="Suit">Suit Fabrics</label>
                    <input type="checkbox" id="Suit" name="Suit" value="">
                  </div>




                </form>
              </div>
            </div>
          </div>




          <div class="shot_by">
            <h5>Sort by category</h5>
            <form>
              <div class="wd_em">
                <label for="fruit1">Recommended</label>
                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
              </div>

              <div class="wd_em">
                <label for="fruit1">Price – Low to High </label>
                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
              </div>

              <div class="wd_em">
                <label for="fruit1">Price – High to Low</label>
                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
              </div>

              <div class="wd_em">
                <label for="fruit1">Offer / Discount</label>
                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
              </div>


            </form>

          </div>



        </div>
















      </div>

      <div class="col-md-8">


        <!--    carousel   -->
        <div class="row prod_slider new_img_pt">
          <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-fifth.png" alt="">
              <div class="prod__det">
                <h2 class="prod__name prod-mn2"><a href="">Banarasi stain silk saree</a> </h2>
                <p class="prod__price mb-0">
                  <span class="line_through">2080</span> <b>(20%)</b> <span>2080</span>
                </p>
                <a href="#" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
            </div>

          </div>
          <!-- end slider_text -->

          <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-fifth.png" alt="">
              <div class="prod__det">
                <h2 class="prod__name prod-mn2"><a href="">Banarasi stain silk saree</a> </h2>
                <p class="prod__price mb-0">
                  <span class="line_through">2080</span> <b>(20%)</b><span>2080</span>
                </p>
                <a href="#" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
            </div>

          </div>

        </div>






        <div class="row prod_slider new_img_pt">
          <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-thir.png" alt="">
              <div class="prod__det">
                <h2 class="prod__name prod-mn2"><a href="">Banarasi stain silk saree</a> </h2>
                <p class="prod__price mb-0">
                  <span class="line_through">2080</span> <b>(20%)</b><span>2080</span>
                </p>
                <a href="#" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
            </div>

          </div>
          <!-- end slider_text -->

          <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-four.png" alt="">
              <div class="prod__det">
                <h2 class="prod__name prod-mn2"><a href="">Banarasi stain silk saree</a> </h2>
                <p class="prod__price mb-0">
                  <span class="line_through">2080</span> <b>(20%)</b><span>2080</span>
                </p>
                <a href="#" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
            </div>

          </div>
        </div>




        <div class="row prod_slider new_img_pt">
          <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-fifth.png" alt="">
              <div class="prod__det">
                <h2 class="prod__name sz-tx prod-mn2"><a href=" ">Banarasi stain silk saree</a> </h2>
                <p class="prod__price mb-0">
                  <span class="line_through">2080</span> <b>(20%)</b> <span>2080</span>
                </p>
                <a href="#" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
            </div>
          </div>
          <!-- end slider_text -->

          <div class="col-md-6  d-flex  align-items-center justify-content-center prod">
            <div class="item overflw_hidn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-sis.png" alt="">
              <div class="prod__det">
                <h2 class="prod__name prod-mn2"><a href="">Banarasi stain silk saree</a> </h2>
                <p class="prod__price mb-0">
                  <span class="line_through">2080</span> <b>(20%)</b><span>2080</span>
                </p>
                <a href="#" class="mnf_pt">click here <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </span></a>
              </div>
            </div>

          </div>
        </div>


      </div>
      <!-- end    carousel   -->
    </div>

  </div>
  </div>
</section>

<?php get_footer();
?>