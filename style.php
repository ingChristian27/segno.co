<?php
// IMPORTANT: Set content type to CSS
header("Content-type: text/css");

// Font size
$font_size = '62.5%';

// Fonts


// Colors:
$colors = array(
    
    // Main colors
    'green' => '#1c3a35',
    'dark-green-1' => '#0e1d1a',
    'light-green-1' => '#0b6958',
    'red' => '#cf2727',
    'white' => '#fff'
    
);

// RGBA colors
function rgba($hex, $a) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgba = 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $a . ')';
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgba; // returns an array with the rgb values
}


include('css/global.php');
include('css/cover.php');
include('css/about.php');
include('css/services.php');
include('css/portfolio.php');
include('css/contact.php');

?>
