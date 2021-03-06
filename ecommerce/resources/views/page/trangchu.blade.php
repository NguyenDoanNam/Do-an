 @extends('master')
 @section('content')  
        <!-- Slider -->
    <section class="slider-intro">
      <div class="container">
        <div class="the-slideshow slideshow-wrapper">
          <ul style="overflow: hidden;" class="slideshow">
            <li class="slide">
              <p>
                <a href="#">
                  <img src="images/banner-img.jpg" alt="">
                </a>
              </p>
              <div class="caption light1 top-right">
                <div class="caption-inner">
                  <p class="heading"> Collection 2017</p>
                  <div class="badge"><em>up to</em> 70% <span>OFF</span></div>
                  {{-- <p class="heading1">Lorem Ipsum is simply dummy text of the printing and typesetting industry it has been the industry's standard dummy</p> --}}
                  <p class="intro-btn">
                    <a href="#" title="Click to see all features">Shop Now</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="slide">
              <p>
                <a href="#">
                  <img src="images/banner-img1.jpg" alt="">
                </a>
              </p>
              <div class="caption light top-right">
                <div class="caption-inner">
                  <p class="normal-text">Collection 2017</p>
                  <h2 class="heading permanent">In This Autumn</h2>
                 {{--  <p class="normal-text1">tristique senectus </p> --}}
                  <p class="intro-btn">
                    <a href="#" title="Click to see all features">Buy Now</a>
                  </p>
                </div>
              </div>
            </li>
            <li class="slide">
              <p>
                <a title="#" href="#">
                  <img src="images/banner-img2.jpg" alt=""> </a>
              </p>
              <div class="caption light2 top-right">
                <div class="caption-inner">
                  {{-- <p class="heading">Responsive Layout</p> --}}
                </div>
              </div>
            </li>
          </ul>
          <a href="#" id="home-slides-prev" class="backward browse-button">previous</a>
          <a href="#" id="home-slides-next" class="forward browse-button">next</a>
          <div id="home-slides-pager" class="tab-pager tab-pager-img tab-pager-ring-lgray"></div>
        </div>
      </div>
    </section>
    <!-- end Slider -->
    <!-- service section  -->
    <div class="service-section">
      <div class="container">
        <div id="store-messages">
         
          <div class="message col-lg-3 col-sm-6 col-xs-12"><i class="icon-truck">&nbsp;</i><span><strong>Free Shipping</strong> order over $99</span> </div>
          <div class="message col-lg-3 col-sm-6 col-xs-12"><i class="icon-discount">&nbsp;</i><span><strong>50% off</strong> on all products</span> </div>
          <div class="phone col-lg-3 col-sm-6 col-xs-12"><i class="icon-phone"></i>&nbsp;<span><strong>Need help?</strong> +84 1215 2368 28</span> </div>
        </div>
      </div>
    </div>
    <!-- End service section  -->
    <!-- Offer Banner  -->
    <div class="offer-banner-section">
      <div class="container">
        <div class="col-1">
          <img src="images/offer-banner1.png" alt="offer banner">
        </div>
        <div class="col-2">
          <div class="add-banner">
            <img src="images/offer-banner2.png" alt="offer banner">
          </div>
        </div>
        <div class="col-3">
          <div class="add-banner1">
            <div class="add-banner2">
              <img src="images/offer-banner3.png" alt="offer banner">
            </div>
            <div class="add-banner3">
              <img src="images/offer-banner4.png" alt="offer banner">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Offer Banner  -->
    <!-- main container -->
    <section class="main-container col1-layout home-content-container">
      <div class="container">
        <div class="row">
          <div class="std">
            <div class="best-pro col-lg-12">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Best sellers</h2>
                </div>
                <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="new-label new-top-left">New</div>
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product1.jpg" alt="Sample Product"> </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"> <span> Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="product_detail.html" title="Sample Product"> Black Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">$125.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product2.jpg" alt="Sample Product">
                              </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Red Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:0%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price" id="old-price-2"> $567.00 </span> </p>
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" id="product-price-2"> $456.00 </span> </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="sale-label sale-top-right">Sale</div>
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product3.jpg" alt="Sample Product">
                              </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Green Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:20%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="grid.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div> <strong></strong> </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product5.jpg" alt="Sample Product">
                              </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Flower Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:0%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="new-label new-top-left">New</div>
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product4.jpg" alt="Sample Product"> </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Navi Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="new-label new-top-left">New</div>
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product6.jpg" alt="Sample Product"> </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Brown Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                  </div>
                </div>
              </div>
            </div>
            <div class="featured-pro col-lg-12">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Featured Products</h2>
                </div>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="new-label new-top-left">New</div>
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product17.jpg" alt="Sample Product"> </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Chinos </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product2.jpg" alt="Sample Product">
                              </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Red Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:0%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="sale-label sale-top-right">Sale</div>
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product13.jpg" alt="Sample Product">
                              </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Black Flower T-Shirt </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:20%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div> <strong></strong> </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product3.jpg" alt="Sample Product">
                              </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Green Dresses </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:0%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="new-label new-top-left">New</div>
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product9.jpg" alt="Sample Product"> </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Black-Style </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <div class="col-item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="new-label new-top-left">New</div>
                            <div class="item-img-info">
                              <a href="product_detail.html" title="Sample Product" class="product-image">
                                <img src="products-images/product19.jpg" alt="Sample Product"> </a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="product-detail-bnt">
                                    <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a href="grid.html" title="Sample Product"> Sample Product </a>
                              </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links">
                                      <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                      <a href="#">Add Review</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                              <button title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End main container -->
    
   {{--  <div class="our-features-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="feature-box">
              <div class="icon-reponsive">&nbsp;</div>
              <div class="content">Responsive Theme<span> </span> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="feature-box">
              <div class="icon-admin">&nbsp;</div>
              <div class="content">Powerful Admin Panel <span> </span></div>
            </div>
          </div>
          <div class="col-lg-4col-md-4 col-sm-4  col-xs-12">
            <div class="feature-box">
              <div class="icon-support">&nbsp;</div>
              <div class="content">Premium Support <span></span> </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
    </div>
  @endsection