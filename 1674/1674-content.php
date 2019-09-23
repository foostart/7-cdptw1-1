  <?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>
  <div class="type-i-22">
    <div class="banner">
        <div class="container">
            <div class="swiper-container">                                      
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        
                        <img src="images/tulanh.jpg" alt="">
                     
                    </div>
                    <div class="swiper-slide" data-swiper-autoplay="2000" >
                       
                        <img src="images/tulanh2.jpg" alt="">
                  
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> 
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
     </div>
    </div>
    <div class="container">
       <h2>
          $200.00
      </h2>
      <div class="stock">
          In stock
      </div>
      <div class="content-product">
          Curabitur at lacus ac velit ornare lobortis. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Ut varius tincidunt libero.
      </div>
      <hr>
      <div class="row">
          <div class="col-md-2">
             <div>
                Quantity:
            </div>
            <div class="quantity pr">
              <div class="qty tc">
               
            <input type="number" class="input-text tc" id="quantity_5cc577f043db9" step="1" min="1" name="quantity" value="1" >
                
       </div>
   </div>
</div>
<div class="col-md-2">
    <div class="add-cart">
       <h2>
           <a class="click" href="#">	Add To Cart</a>
       </h2>
   </div>

</div>
<div id="like" class="rating">
  <!-- FIFTH HEART -->
  <input type="radio" id="heart_5" name="like" />
  <label for="heart_5" title="Like">&#10084;</label>
</div>
</div>
</div>
</div>

