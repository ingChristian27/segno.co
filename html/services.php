<div id="services">

    <h2><?php echo $services['title'] ?></h2>

    <div class="panel-group" id="servicios-accordion" role="tablist" aria-multiselectable="true">
       
        <div class="panel panel-default">
              
            <?php foreach ($services['tabs'] as $key => $value) { ?>  
           
            <div class="panel-heading" role="tab" id="heading<?php echo $key ?>">
               
                <h4 class="panel-title">
                   
                    <a data-toggle="collapse" data-parent="#servicios-accordion" href="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapse<?php echo $key ?>" <?php if ($key !== 0) echo 'class="collapsed"' ?>>
                        <?php echo $value['title']; ?>
                        
                    </a>
                    
                </h4>
                
            </div>
            
            <div id="collapse<?php echo $key ?>" class="panel-collapse collapse <?php if ($key === 0) echo 'in' ?>" role="tabpanel" aria-labelledby="heading<?php echo $key ?>">
                <div class="panel-body">
                    <?php echo $value['text']; ?>
                </div>
            </div>
                
            <?php } ?>
            
        </div>
        
    </div>


</div>