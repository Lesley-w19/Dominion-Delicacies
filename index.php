<?php
include_once 'header.php';
?>
<?php 
 $product_blog = $product->getBlog();
?>
   

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
      <ul class="slides-container">
        <li class="text-center">
          <!-- <img src="images/banner-01.jpg" alt="" /> -->
          <img src="dmnImages/mainpic1.jpg" alt="" />

          <div class="container item">
            <div class="row">
              <div class="col-md-12">
                <h1 class="m-b-20">
                  <strong
                    >Welcome To <br />
                    Dominion</strong
                  >
                  <small><i>Delicacies</i></small>
                </h1>
                <p class="m-b-40">
                  Have a Taste of<br />
                  <b>Natural...</b>
                </p>
                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
              </div>
            </div>
          </div>
        </li>
        <li class="text-center">
          <!-- <img src="images/banner-02.jpg" alt="" /> -->
          <img src="dmnImages/mainpic2.jpg" alt="" />

          <div class="container item">
            <div class="row">
              <div class="col-md-12">
                <h1 class="m-b-20">
                  <strong
                    >Welcome To <br />
                    Dominion</strong
                  >
                  <small><i>Delicacies</i></small>
                </h1>
                <p class="m-b-40">
               Have a taste of<br />
                 <b>Nutritious...</b> 
                </p>
                 
                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
              </div>
            </div>
          </div>
        </li>
        <li class="text-center">
          <!-- <img src="images/banner-03.jpg" alt="" /> -->
          <img src="dmnImages/mainpic3.jpg" alt="" />

          <div class="container item">
            <div class="row">
              <div class="col-md-12">
                <h1 class="m-b-20">
                  <strong
                    >Welcome To <br />
                    Dominion</strong
                  >
                  <small><i>Delicacies</i></small>
                </h1>
                <p class="m-b-40">
                  See how we bridge the health gap by providing<br />
                 <b>Natural, Nutritious and Tasty flour.</b> 
                </p>
                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="slides-navigation">
        <a href="#" class="next"
          ><i class="fa fa-angle-right" aria-hidden="true"></i
        ></a>
        <a href="#" class="prev"
          ><i class="fa fa-angle-left" aria-hidden="true"></i
        ></a>
      </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
              <img
                class="img-fluid"
                src="dmnImages/lactaFlour.png"
                alt=""
              />
              <a class="btn hvr-hover" href="#">LactaSure Flour</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
              <img
                class="img-fluid"
                src="dmnImages/infantFlour.png"
                alt=""
              />
              <a class="btn hvr-hover" href="#">Infant Care</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
              <img
                class="img-fluid"
                src="dmnImages/porrigdeFlour.png"
                alt=""
              />
              <a class="btn hvr-hover" href="#">Senior Support</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Categories -->

    <div class="box-add-products">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="offer-box-products">
              <img class="img-fluid" src="dmnImages/add-img-01.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="offer-box-products">
              <img class="img-fluid" src="dmnImages/add-img-02.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Products  -->
    <div class="products-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-all text-center">
              <h1>Flour & Peanut Butter</h1>
              <p>
               We produce flour with necessary nutrients for lactating mothers, infants, adults and the elderly. 
              </p>
              <p>Our peanut butter is readily home-made with no additives.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="special-menu text-center">
              <div class="button-group filter-button-group">
                <button class="active" data-filter="*">All</button>
                <button data-filter=".top-featured">Top featured</button>
                <button data-filter=".best-seller">Best seller</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row special-list">
          <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="sale">Sale</p>
                </div>
                <img
                  src="dmnImages/bread.jpg"
                  class="img-fluid"
                  alt="Image"
                />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Whole-Grain Bread</h4>
                <h5>Ksh 400</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 special-grid top-featured">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="new">New</p>
                </div>
                <img
                  src="dmnImages/peanutbutter.jpg"
                  class="img-fluid"
                  alt="Image"
                />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Peanut Butter</h4>
                <h5>Ksh 300</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 special-grid top-featured">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="sale">Sale</p>
                </div>
                <img
                  src="dmnImages/oats.jpg"
                  class="img-fluid"
                  alt="Image"
                />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                   
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Oats Porridge Flour</h4>
                <h5>Ksh 500</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="sale">Sale</p>
                </div>
                <img
                  src="dmnImages/smothie.jpeg"
                  class="img-fluid"
                  alt="Image"
                />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Smoothie with nuts</h4>
                <h5>Ksh 450</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-all text-center">
              <h1>Latest Blog</h1>
              <p>
              This past month, we have been discussing about the various ways and ideas on how we can include nuts in our daily diet.
              </p>
              <p><strong>Can you eat nuts everyday?</strong> </p>
              <p>Consuming nuts regularly is necessary for a healthy heart, good digestion, and can also help in maintaining weight. However, everything is good in its moderation, so nuts must be consumed on a serving of a small handful or 1.5 ounces.</p>
            </div>
          </div>
        </div>
        <div class="row">
        <?php foreach($product_blog as $item){?>
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
              <div class="blog-img">
                <img class="img-fluid" src="<?php echo $item['blog_image']; ?>" alt="" />
              </div>
              <div class="blog-content">
                <div class="title-blog">
                  <h3> <?php echo $item['blog_title']; ?></h3>
                  <p>
                  <?php echo $item['blog_about']; ?>
                  </p>
                  <p style="text-decoration:underline; float:right; margin-top:10px"><small><?php  echo $item['register_date']; ?></small></p>
                </div>
                <ul class="option-blog">
                  <li>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-comments"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div><?php } ?>
          <!-- <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
              <div class="blog-img">
                <img class="img-fluid" src="dmnImages/peanuts.jpg" alt="" />
              </div>
              <div class="blog-content">
                <div class="title-blog">
                  <h3>Nuts alone.</h3>
                  <p>
                  Nuts are the powerhouses of antioxidants. Anti-oxidants are best at combating oxidative stress in your body. Anti-oxidants neutralize the oxidative radicals responsible for causing cell damage and increasing the risk of several diseases.Although nuts are high in calories, they include good fats that can increase metabolism and help you lose weight.
                  </p>
                </div>
                <ul class="option-blog">
                  <li>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-comments"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
              <div class="blog-img">
                <img class="img-fluid" src="" alt="" />
              </div>
              <div class="blog-content">
                <div class="title-blog">
                  <h3></h3>
                  <p>
                 


                  </p>
                </div>
                <ul class="option-blog">
                  <li>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-comments"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- End Blog  -->

    

  <?php
  include_once 'footer.php';
  
  ?>