<?php
// IMPORTANT: Set content type to CSS
header("Content-type: text/css");

// Font size
$font_size = '62.5%';

// Fonts
$laoUI = 'font-family: "LaoUI", Arial, sans-serif';
$source_sans_pro = 'font-family: "Source Sans Pro", Arial, sans-serif';

// Colors:
$colors = array(
    
    // Main colors
    'green' => '#1c3a35',
    'dark-green-1' => '#0e1d1a',
    'light-green-1' => '#0b6958',
    'red' => '#cf2727',
    'white' => '#fff'
    
);

// First Letter style on Titles
$title_first_letter = title_first_letter_function($colors['red'], $colors['dark-green-1'], $colors['green']);
function title_first_letter_function($color1, $color2, $color3) {
    $color = 'color: ' . $color1 . "; \r\n";
    $border = 'border: 2px solid ' . $color3 . "; \r\n";
    $outline = 'box-shadow: 0px 0px 0px 2px ' . $color2 . "; \r\n";
    $bg = 'background: ' . $color2 . "; \r\n";
    $others = 'padding: 0px 8px 5px;' . "\r\n" . 'margin-right: 5px';
    
    return $color . $border . $outline . $bg . $others;
        
};

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
