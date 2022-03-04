<?php 

    if ( get_field('homepage-banner-soon_enable', 'options') ) {

        $args = get_field('homepage-banner-soon', 'options');

        echo '<pre>';
        var_dump($args);
        echo '</pre>';
        
        if(!empty(block_value('title'))){
            $title = block_value('title');
        }else{
            $title = $args['title'];
        }    
    
        if(!empty(block_value('background'))){
            $banner_bg = block_value('background');
        } else {
            $banner_bg = $args['banner-background'];
        }
    
        if(!empty(block_value('image'))){
            $banner_img = block_value('image');
        } else {
            $banner_img = $args['banner-image'];
        }

        if(!empty(block_value('link'))){
            $banner_link = block_value('link');
        } else {
            $banner_link = $args['link'];
        }

        if(!empty($banner_link)) {
            $banner_onclick = ' onclick="';
            $banner_onclick.= "window.location.href='";
            $banner_onclick.= $banner_link;
            $banner_onclick.= "';";
            $banner_onclick.= '"';
        } else {
            $banner_onclick = "";
        }
     
 ?>
 
 <section class="banner-comming-soon block<?php block_field('additional-class'); ?>">
     <div class="container">
         <div class="block__inner rounded" style="background-image:url('<?php echo $banner_bg; ?>')" <?php echo $banner_onclick; ?> >
             <div class="row">
                 <div class="block__content col-12 col-md-6 col-lg-7 text-center text-md-left">
                     <h2 class="block__title text-white"><?php echo $title; ?></h2>                
                 </div>
                 <div class="col-6 col-lg-5 d-none d-md-flex justify-content-center">
                     <img class="block__image" src="<?php echo $banner_img; ?>" alt="" >
                 </div>
             </div>
         </div>
     </div>    
 </section>

 <?php } ?>