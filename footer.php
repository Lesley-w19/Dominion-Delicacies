  <?php
  $product_Photo = $product->getPhoto();
  ?>
  <!-- Start Instagram Feed  -->
  <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
        <?php foreach($product_Photo as $item){?>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo $item['image_name']; ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
    </div>
    
    <!-- End Instagram Feed  -->
  
  <!-- Start Footer  -->
  <footer>
      <div class="footer-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-top-box">
                <h3>Business Time</h3>
                <ul class="list-time">
                  <li>Monday - Friday: 08.00am to 05.00pm</li>
                  <li>Saturday: 10.00am to 08.00pm</li>
                  <li>Sunday: <span>Closed</span></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-top-box">
                <h3>Newsletter</h3>
                <form class="newsletter-box">
                  <div class="form-group">
                    <input
                      class=""
                      type="email"
                      name="Email"
                      placeholder="Email Address*"
                    />
                    <i class="fa fa-envelope"></i>
                  </div>
                  <button class="btn hvr-hover" type="submit">Submit</button>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-top-box">
                <h3>Social Media</h3>
                <p>Join the family as we share experiences and encourage each other on healthy living.</p>
                <ul>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"
                      ><i class="fab fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"
                      ><i class="fab fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"
                      ><i class="fab fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"
                      ><i class="fab fa-google-plus" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"><i class="fa fa-rss" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"
                      ><i class="fab fa-pinterest-p" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Dominion-Delicacies-389489905147911/"
                      ><i class="fab fa-whatsapp" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-widget">
                <h4>About Dominion Delicacies</h4>
                <p>
                  We are acompany that manufacture naturally nutritious and tasty products.
                 We pride ourselves with the making of products that not only boost your immune system but also encourage healthy living. We cater for all age groups; infants, young and old.
                </p> 
                <h4>OUR MISSION</h4>
                <p>
                   To help bridge the health gap by providing nutritious and tasty flour for the entire family.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-link">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Customer Service</a></li>
                  <li><a href="#">Our Sitemap</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Delivery Information</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-link-contact">
                <h4>Contact Us</h4>
                <ul>
                  <li>
                    <p>
                      <i class="fas fa-map-marker-alt"></i>Address: <br> P.o Box 55489-0200 <br /> Nairobi,Kenya.
                    </p>
                  </li>
                  <li>
                    <p>
                      <i class="fas fa-phone-square"></i>Phone:
                      <a href="tel:+254 722 738 980"> +254 722 738 980</a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <i class="fas fa-envelope"></i>Email:
                      <a href="mailto:DominionDelicacies98@gmail.com"
                        >DominionDelicacies98@gmail.com</a
                      >
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
      <p class="footer-company">
        All Rights Reserved. &copy; 2018 <a href="#">DominionDelicacies</a> 
        <!-- Design By :
        <a href="https://html.design/">html design</a> -->
      </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none"
      >&uarr;</a
    >

    <!-- ALL JS FILES -->
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- start of aditional external -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <!-- end of aditional external -->

    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <!-- start of external links  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- end of external links  -->

    
  </body>
</html>
