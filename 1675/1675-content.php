<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-331">
    <div class="banner">
        <div class="container">
            <div class="swiper-container">                                      
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        
                        <img src="images/computer-336628.jpg" alt="">
                     
                    </div>
                    <div class="swiper-slide" data-swiper-autoplay="2000" >
                       
                        <img src="images/moonshine-960797_1920.jpg" alt="">
                  
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> 
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
     </div>
    </div>
</div>


