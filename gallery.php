<?php
include_once 'header.php';
?>
<?php 
 $product_add = $product->getData();
 $product_Photo = $product->getPhoto();

?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        <p>Well packaged and delivered if need be. Here are the categories or products we produce...</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                   
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>

                            <button data-filter=".bulbs">Peanuts and Pastry</button>
                            <button data-filter=".fruits">Flour</button>
							<!-- <button data-filter=".podded-vegetables">Podded vegetables</button>
							<button data-filter=".root-and-tuberous">Root and tuberous</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                
  <?php foreach($product_add as $item){?>
                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo $item['item_image'];?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
                 <?php } ?>

                <?php foreach($product_Photo as $item){?>
                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo $item['image_name'];?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                </div> 
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

   <?php
   
   include_once 'footer.php';
   ?>