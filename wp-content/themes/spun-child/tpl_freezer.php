<?
/*
Template Name: Freezer
 */
?>
<?php 
get_header();
?>

<!-- slider CSS file -->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/default.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/common.css">
 
<script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
<!-- slider -->
<script src="<?php bloginfo('template_url');?>/js/jquery.easing-1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.iosslider.min.js"></script>

<script type="text/javascript">
      $(document).ready(function() {
        
        var sliderThumbnail = $('.iosSlider1');
        var sliderText = $('.iosSlider2');
        var slide_text = true;
        var slide_thumbnail = true;
        var slide_started = false;
        
        var sliderChange = function(e, type) {
          
          if(slide_started) {
            return false;
          }
          
          slide_started = true;
          
          var current_slide = (e.currentSlideNumber);
          
          if(type == 'thumbnail') {
          
            if(slide_thumbnail == true) {
            
              sliderThumbnail.iosSlider('goToSlide', current_slide);
            
            }
          
          } else {
            
            if(slide_text == true) {
            
              sliderText.iosSlider('goToSlide', current_slide);
              
            }
          
          }
    
          $('.iosSlider2 .indicatorsBlock .indicators .item').removeClass('selected');
          $('.iosSlider2 .indicatorsBlock .indicators .item').eq(current_slide).addClass('selected');
          
        }
        
        var slideComplete = function(e) {
        
          slide_started = false;
        
        }
        
        sliderThumbnail.iosSlider({
          snapToChildren: true,
          desktopClickDrag: true,
          infiniteSlider: true,
          onSlideChange: function(e){ slide_text = true; slide_thumbnail = false; sliderChange(e, 'text'); },
          onSlideComplete: slideComplete,
          navNextSelector: $('.iosSlider2 .next'),
          navPrevSelector: $('.iosSlider2 .prev')
        });
        
        sliderText.iosSlider({
          snapToChildren: true,
          desktopClickDrag: false,
          infiniteSlider: true,
          onSlideChange: function(e){ slide_text = false; slide_thumbnail = true; sliderChange(e, 'thumbnail') },
          onSlideComplete: slideComplete
        });
      }); 
    </script>

<div class="container">
  <div class = "iosSlider1Container">
    <div class="iosSlider1">
      <div class = 'slider'>
    <div class = 'item item1'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.jpg" />learn axure</div>
    <div class = 'item item2'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" />dropdown in axure</div>
    <div class= 'item item3'> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png" />sketch from pencil</div>
    <div class= 'item item4'> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.png" />designing ux in mirror</div>
    </div>
  </div>
</div>

  <div class = "iosSlider2Container">
    <div class="iosSlider2">
      <div class = 'slider'>
    <div class = 'item item1'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/5.jpg" />my first tuesday sports day</div>
    <div class = 'item item2'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/6.jpg" />given css</div>
    <div class = 'item item3'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/7.png" />what i made(unfinished yet)</div>
    <div class = 'item item4'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/8.png" />what i made(unfinished yet)</div>
    <div class = 'item item5'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/9.jpg" />my first friday share day</div>
</div>
</div>
</div>
<br/>
<br/>
<div class = 'prev'></div>
<div class = 'next'></div>
<div class = 'indicatorsBlock'>
            <div class = 'indicators'>
              <div class = 'item first selected'></div>
              <div class = 'item'>prev</div>
              <div class = 'item'>next</div>
            </div>
          </div>
</div>







