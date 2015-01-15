<div id="portfolio">
    <h2><?php echo $portfolio['title'] ?></h2>
    <div id="portfolio-slider" class="custom-slider">
        <div class="custom-slider-bar">
           
            <div class="dropdown">
                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                   
                    <?php foreach ($portfolio[ 'list'] as $key=>$value) { ?>
                    <li><?php echo $value['title'] ?></li>
                    <?php }; ?>
                    
                </ul>
            </div>
            
            <h3><?php echo $value['title'] ?></h3>
            
            <div class="custom-slider-nav">
                <a href="#" class="custom-slider-nav-l"><</a>
                <a href="#" class="custom-slider-nav-r">></a>
            </div>
            
        </div>
        <ul>
           
            <?php foreach ($portfolio[ 'list'] as $key=>$value) { ?>
            <li>
                <img src="<?php echo $value['imgURL'] ?>" alt="">
                <div class="desc"><?php echo $value['desc'] ?></div>
            </li>
            <?php }; ?>
            
        </ul>
    </div>
</div>