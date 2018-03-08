<?php

?>
<!DOCTYPE html>
<html>

<head>
 <title>Star Rating System by Dhruv Jani</title>
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="star.css" rel="stylesheet" />
 <link rel="icon" type="image/png"  href="logo.png">
</head>

<body>
<div id="wrapper">
 <div class="center_align">
  <div class="demo">
   <form action="" method="post">
    <input type="hidden" name="rating1" value="0">
    <input type="hidden" name="rating2" value="0">
    <input type="hidden" name="rating3" value="0">
   <div id="call_rating">
    <div class="image">
     <img src="img.jpg" width="100%">
    </div>
    <div class="car-details">
     <div class="car-name">
      Classic Car
     </div>
     <div class="car-prise">
      $235/Month
     </div>
    </div>
    <div class='rating-stars text-center'>
     Driving Quality:
      <ul class='stars'>
        <li class='star' title='Poor' data-value='1' data-type='1'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Fair' data-value='2' data-type='1'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Good' data-value='3' data-type='1'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Excellent' data-value='4' data-type='1'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='WOW!!!' data-value='5' data-type='1'>
          <i class='fa fa-star fa-fw'></i>
        </li>
      </ul>
    </div>
    <div class='rating-stars text-center'>
     Body Condition:
      <ul class='stars'>
        <li class='star' title='Poor' data-value='1' data-type='2'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Fair' data-value='2' data-type='2'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Good' data-value='3' data-type='2'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Excellent' data-value='4' data-type='2'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='WOW!!!' data-value='5' data-type='2'>
          <i class='fa fa-star fa-fw'></i>
        </li>
      </ul>
    </div>
    <div class='rating-stars text-center'>
     Comfort Level:
      <ul class='stars'>
        <li class='star' title='Poor' data-value='1' data-type='3'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Fair' data-value='2' data-type='3'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Good' data-value='3' data-type='3'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Excellent' data-value='4' data-type='3'>
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='WOW!!!' data-value='5' data-type='3'>
          <i class='fa fa-star fa-fw'></i>
        </li>
      </ul>
    </div>
    <br>
    <textarea name="review" class="edit_textarea" placeholder="give your review here..."></textarea>
    <div class="submit_btn">
     <input type="submit" name="submit_review" value="Submit" class="red_btn">
    </div>
   </div>
   </form>
  </div>
 </div>
</div>

<div id="footer_logo">
<a href="http://dhruvjani.in" target="_new"><img src="logo.png" width="80" height="80" border="0" /></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
/* 1. Visualizing things on Hover - See next part for action on click */
$('.stars li').on('mouseover', function(){
  var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

  // Now highlight all the stars that's not after the current hovered star
  $(this).parent().children('li.star').each(function(e){
    if (e < onStar) {
      $(this).addClass('hover');
    }
    else {
      $(this).removeClass('hover');
    }
  });
}).on('mouseout', function(){
  $(this).parent().children('li.star').each(function(e){
    $(this).removeClass('hover');
  });
});

/* 2. Action to perform on click */
$('.stars li').on('click', function(){
  var onStar = parseInt($(this).data('value'), 10); // The star currently selected
  var onStarType = parseInt($(this).data('type'), 10);

  var stars = $(this).parent().children('li.star');
  for (i = 0; i < stars.length; i++) {
    $(stars[i]).removeClass('selected');
  }
  for (i = 0; i < onStar; i++) {
    $(stars[i]).addClass('selected');
  }
  $( "input[type=hidden][name=rating"+ onStarType +"]" ).val(onStar);
});
});
</script>
</body>
</html>
