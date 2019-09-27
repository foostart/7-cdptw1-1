  <?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>
  <div class="type-i-22">
    
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
          <div class="btn">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> 
          <!-- Add Pagination -->
        </div>
          <div class="swiper-pagination"></div>
        </div>
     
     <h2>
      $200.00
    </h2>
   
      In stock
    
    <p>
      Get more space for groceries in a great feature-packed refrigerator. Nothing beats the convenience of having more food when you need it, and with a generous 20 cu. ft. of space, you'll have room and room to grow.
    </p>
    <hr>
    <div>
        Quantity:
      </div>
<div class="row">
      <div class="quantity ">
        <div class= tc">
          <input type="number" tc" id="quantity_5cc577f043db9" step="1" min="1" name="quantity" value="1" >

        </div>
      </div>
      <div class="add-cart">
       <h2>
         <a class="click" href="#"> Add To Cart</a>
       </h2>
     </div>
     <section id="like" class="rating">
  <!-- FIFTH HEART -->
  <input type="radio" id="heart_5" name="like" value="5" />
  <label for="heart_5" >&#10084;</label>
  <!-- FOURTH HEART -->
  <input type="radio" id="heart_4" name="like" value="4" />
  <label for="heart_4" >&#10084;</label>
  <!-- THIRD HEART -->
  <input type="radio" id="heart_3" name="like" value="3" />
  <label for="heart_3" >&#10084;</label>
  <!-- SECOND HEART -->
  <input type="radio" id="heart_2" name="like" value="2" />
  <label for="heart_2" >&#10084;</label>
  <!-- FIRST HEART -->
  <input type="radio" id="heart_1" name="like" value="1" />
  <label for="heart_1" >&#10084;</label>
</section>
</div>

</div> 


</div>

