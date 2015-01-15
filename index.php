<?php /*

HOME PAGE
=========

    1. cover.php
    2. about.php
    3. services.php
    4. portfolio.php
    5. contact.php
    
*/

// FUNCTIONS
// =========
// Get image width
function getImgWidth($img) {
    list($width, $height) = getimagesize($img);
    return $width;
};
// Get image height
function getImgHeight($img) {
    list($width, $height) = getimagesize($img);
    return $height;
};

// CONTENTS
// ========
// All page contents in spanish
require('contents.php'); 

?>
<!DOCTYPE html>
<html lang="es">
   
    <head>
        <?php include('html/head.php'); ?>
    </head>
    
    <body>
       
        <?php include('html/cover.php'); ?>
        
        <?php include('html/about.php'); ?>
        
        <div class="container">
        
            <div class="row">

                <div class="col-md-7">

                    <?php include('html/services.php'); ?>

                </div>
                
                <div class="col-md-5">

                <?php include('html/portfolio.php'); ?>
                
                </div>

            </div>
        
        </div>
        
        <?php include('html/contact.php'); ?>
        
        <div class="copyright">
            <?php echo $copyright ?>
        </div>
        
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        <!-- Custom CSS -->
        <script src="js/custom.js"></script>
    
    </body>
    
</html>