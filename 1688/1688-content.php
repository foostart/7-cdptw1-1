 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
 <div class="type-739">
    <div class="container">
        <div class="block-main-product">
            <div class="title">
             <a href="#">Deals Of The Day</a>
         </div>          
         <div class="promo-v1">
             Ends after:
             <div class="promo-count" data-date="11 20 2018" data-day-loop="true" data-hours-only="true">
              <div class="cd-sale hour"><span class="num">16</span><span class="unit">h</span></div>
              <div class="cd-sale minute"><span class="num">11</span><span class="unit">m</span></div>
              <div class="cd-sale second"><span class="num">10</span><span class="unit">s</span></div>
          </div>
      </div>
      <div class="view-all"><a href="#">View All</a></div>
  </div>
  <div class="banner">        
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="block">
                        <div class="image">
                            <img src="images/a.jpg" alt="" class="img-responsive"/>
                            <span class="sale">-33%</span>
                        </div>

                        <div class="product-btn row">
                            <div class="product-list">
                                <div class="col-md-3">
                                    <a href="#"><i class="fas fa-cart-plus"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><i class="far fa-eye"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><i class="far fa-chart-bar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="price">
                            <span class="price-items">$150.00</span>
                            <span class="price-item">$30.00</span>
                        </div>
                        <h3 class="product-item1">
                            <a href="#">Beat Spill 2.0 Wireless Speaker - White</a>
                        </h3>
  
                        


                    </div>
                   <div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</div>
                </div>
                <div class="swiper-slide">

                    <div class="block">
                        <div class="image">
                            <img src="images/b.jpg" alt="" class="img-responsive"/>
                            <span class="sale">-23%</span>
                        </div>
                        <div class="product-btn row">
                            <div class="product-list">
                                <div class="col-md-3">
                                    <a href="#"><i class="fas fa-cart-plus"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><i class="far fa-eye"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><i class="far fa-chart-bar"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="price">
                            <span class="price-items">$150.00</span>
                            <span class="price-item">$650.00</span>
                        </div>
                        <h3 class="product-item1">
                            <a href="#">Samsung Gear VR Virtual Reality Headset</a>
                        </h3>


              </div>
<div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</div>
          </div>
          <div class="swiper-slide">
            <div class="block">
                <div class="image">
                    <img src="images/c.jpg" alt="" class="img-responsive"/>
                    <span class="sale">-33%</span>
                </div>
                <div class="product-btn row">
                    <div class="product-list">
                        <div class="col-md-3">
                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><i class="far fa-eye"></i></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><i class="far fa-chart-bar"></i></a>
                        </div>
                    </div>
                </div>
                <div class="price">
                    <span class="price-items">$150.00</span>
                    <span class="price-item">$300.00</span>
                </div>
                <h3 class="product-item1">
                    <a href="#">ASUS Chromebook Flip - 10.2 Inch</a>
                </h3>
            
                
      </div> 
    <div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</div>                        
  </div>
  <div class="swiper-slide">

    <div class="block">
        <div class="image">
            <img src="images/d.jpg" alt="" class="img-responsive"/>
            <span class="sale">-11%</span>
        </div>
        <div class="product-btn row">
            <div class="product-list">
                <div class="col-md-3">
                    <a href="#"><i class="fas fa-cart-plus"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-eye"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-heart"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-chart-bar"></i></a>
                </div>
            </div>
        </div>
        <div class="price">
            <span class="price-items">$150.00</span>
            <span class="price-item">$900.00</span>
        </div>
        <h3 class="product-item1">
            <a href="#">Apple iPhone Retina 6s Plus 64GB</a>
        </h3>
 
</div>
<div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</div>
</div>
<div class="swiper-slide">
    <div class="block">
        <div class="image">
            <img src="images/e.jpg" alt="" class="img-responsive"/>
            <span class="sale">-13%</span>
        </div>
        <div class="product-btn row">
            <div class="product-list">
                <div class="col-md-3">
                    <a href="#"><i class="fas fa-cart-plus"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-eye"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-heart"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-chart-bar"></i></a>
                </div>
            </div>
        </div>
        <div class="price">
            <span class="price-items">$150.00</span>
            <span class="price-item">$400.00</span>
        </div>
        <h3 class="product-item1">
            <a href="#">Apple Macbook Display 12 Inch Full HD</a>
        </h3>
        
</div>
<div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</div>
</div>
<div class="swiper-slide">
    <div class="block">
        <div class="image">
            <img src="images/f.jpg" alt="" class="img-responsive"/>
            <span class="sale">-17%</span>
        </div>
        <div class="product-btn row">
            <div class="product-list">
                <div class="col-md-3">
                    <a href="#"><i class="fas fa-cart-plus"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-eye"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-heart"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="far fa-chart-bar"></i></a>
                </div>
            </div>
        </div>
        <div class="price">
            <span class="price-items">$150.00</span>
            <span class="price-item">$300.00</span>
        </div>
        <h3 class="product-item1">
            <a href="#">Xbox One Wireless Controller New USA</a>
        </h3>
        
</div>
<div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</div>
</div>
</div>
<div class="swiper-pagination"></div>
</div>
<div class="swipper-btn">
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</div>
</div>
</div>
</div>

<!-- END TYPE-886 -->

