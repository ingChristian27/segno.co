$(document).ready(function() {
    
    

    // Window Resize and Scroll events
    var timer;
    $(window)
        .resize(function() {
            
        })
        .scroll(function() {

            // Time out
            if (timer) clearTimeout(timer);
            timer = setTimeout(function() {
                
                // Run function here:
                
                
            }, 500);

        });


});