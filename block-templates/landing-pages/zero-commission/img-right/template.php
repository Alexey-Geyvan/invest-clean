<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>




<section class="zc-img-right block skewed-section mb-0 <?php echo $some_class; ?>">
    <div class="container">     
        <div class="row">    

            <div class="col-12 col-lg-6 block__content-col">
                <div class="block__content">
                    <div class="block__header section-header">
                        <h2 class="section-header__header text-gradient"><?php echo $title; ?></h2>
                        <p class="section-header__text text-gray--light"  data-aos="fade-in"><?php echo $subtitle; ?></p>
                    </div>                                        
                </div>                
            </div>     
            
            <div class="col-12 col-lg-6 block__image-col">
                <div class="block__image-under" data-aos="fade-in">
                    <div class="image-under">
                        <div class="image-under__outer"></div>
                        <div class="image-under__inner"></div>
                    </div>
                </div>
                <div class="block__image" data-aos="fade-up">
                    <?php echo $inner; ?>
                </div>                
            </div>

        </div>
    </div>
</section>

