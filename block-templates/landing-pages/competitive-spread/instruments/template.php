<?php 
// available fields
[
'title'           => $title,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
wp_enqueue_script("all-instruments-page");
?>


<section class="cs-instruments all-instruments block">
    <div class="container">
        <?php if ( !empty($title) ) { ?>            
            <div class="block__header section-header">
                <h3 class="section-header__header text-center"><?php echo $title; ?></h2>                   
            </div>            
        <?php } ?>

        <div class="cs-instruments__widgets-options bg-dark mb-5">        
            <!-- <div class="all-instruments__header section-header">
                <h1 class="section-header__header text-center"><?php //echo $title; ?></h1>              
            </div>             -->

            <ul class="widget-card-nav nav" role="tablist">
                <li class="nav-item mb-2 mb-lg-0" role="presentation" data-aos="fade-up">
                    <a class="widget-card-nav__link nav-link" role="tab" aria-selected="true" href="#indices" data-category="indices">
                        <div class="widget-card-nav__link-inner">
                            <div class="widget-card-nav__icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2679_56947)">
                                    <path d="M12.251 2.32227C12.4694 2.45021 12.5343 2.64073 12.5336 2.88966C12.5259 4.47085 12.5301 6.05204 12.5301 7.63324C12.5301 7.73545 12.5301 7.83697 12.5301 7.96769C13.1162 7.96769 13.671 7.96769 14.2257 7.96769C14.7532 7.96769 14.8627 8.07895 14.8627 8.61366C14.8627 12.4366 14.8627 16.2596 14.8627 20.0825C14.8627 20.5797 14.7497 20.6916 14.2487 20.6923C13.6926 20.693 13.1358 20.6923 12.5448 20.6923C12.5392 20.8064 12.5308 20.9065 12.5301 21.0059C12.5287 22.0747 12.5308 23.1434 12.528 24.2121C12.5273 24.5229 12.3906 24.6891 12.1443 24.7044C11.8645 24.7211 11.697 24.5375 11.6956 24.1926C11.6914 23.4368 11.6942 22.681 11.6942 21.9252C11.6942 21.5267 11.6942 21.1283 11.6942 20.6923C11.4737 20.6923 11.277 20.6923 11.0795 20.6923C10.6616 20.6923 10.2443 20.6972 9.82634 20.6895C9.52631 20.684 9.38467 20.5345 9.3742 20.2369C9.37211 20.1847 9.3735 20.1326 9.3735 20.0804C9.3735 16.2491 9.3735 12.4171 9.3735 8.58585C9.3735 8.08381 9.48724 7.96908 9.98264 7.96839C10.5387 7.96769 11.0942 7.96839 11.6935 7.96839C11.6935 7.85157 11.6935 7.75214 11.6935 7.65201C11.6935 6.07082 11.697 4.48963 11.6907 2.90843C11.69 2.65185 11.7528 2.44882 11.9901 2.32366C12.0766 2.32227 12.1638 2.32227 12.251 2.32227ZM14.0136 8.82087C12.7374 8.82087 11.4821 8.82087 10.231 8.82087C10.231 12.5082 10.231 16.1768 10.231 19.8433C11.5023 19.8433 12.7513 19.8433 14.0136 19.8433C14.0136 16.1678 14.0136 12.5054 14.0136 8.82087Z" fill="#797C97"/>
                                    <path d="M4.88661 29.0235C4.67379 28.8907 4.6103 28.7001 4.61309 28.4519C4.62356 27.427 4.61728 26.4014 4.61728 25.3764C4.61728 25.2826 4.61728 25.188 4.61728 25.0608C4.09466 25.0608 3.59367 25.0545 3.09269 25.0622C2.33702 25.074 2.3133 25.0093 2.32377 24.2931C2.33842 23.2939 2.32725 22.2947 2.32725 21.2955C2.32725 20.8762 2.41936 20.7851 2.85336 20.7851C3.42761 20.7844 4.00116 20.7851 4.61728 20.7851C4.61728 20.6649 4.61728 20.5557 4.61728 20.4472C4.61728 17.0936 4.61728 13.7393 4.61728 10.3857C4.61728 10.3078 4.61518 10.2293 4.61797 10.1514C4.62705 9.87881 4.78125 9.7015 5.015 9.69177C5.25293 9.68203 5.43504 9.86977 5.45109 10.1458C5.45597 10.2237 5.45249 10.3023 5.45249 10.3801C5.45249 13.7338 5.45249 17.088 5.45249 20.4416C5.45249 20.5446 5.45249 20.6482 5.45249 20.7844C5.97092 20.7844 6.4726 20.7844 6.97428 20.7844C7.73204 20.7844 7.77111 20.8241 7.77111 21.5757C7.77111 22.2711 7.77321 22.9657 7.77042 23.6611C7.76553 25.2228 7.93997 25.0566 6.35538 25.0608C6.0686 25.0615 5.78252 25.0608 5.45179 25.0608C5.45179 25.1623 5.45179 25.2527 5.45179 25.3438C5.45179 26.3777 5.4469 27.4117 5.45528 28.4457C5.45737 28.705 5.3869 28.9046 5.14687 29.0249C5.06105 29.0235 4.97383 29.0235 4.88661 29.0235ZM6.92404 21.6411C5.63739 21.6411 4.38283 21.6411 3.13386 21.6411C3.13386 22.511 3.13386 23.3579 3.13386 24.209C4.40656 24.209 5.66181 24.209 6.92404 24.209C6.92404 23.3433 6.92404 22.4957 6.92404 21.6411Z" fill="#797C97"/>
                                    <path d="M19.3535 2.32227C19.5663 2.46968 19.6235 2.67202 19.6193 2.92721C19.6067 3.78664 19.6144 4.64677 19.6144 5.54653C19.8845 5.54653 20.1419 5.54653 20.3994 5.54653C20.7301 5.54653 21.0609 5.54584 21.3916 5.54653C21.8068 5.54793 21.9421 5.67795 21.9428 6.0889C21.9456 7.06237 21.9435 8.03514 21.9435 9.00861C21.9435 9.61703 21.9456 10.2247 21.9428 10.8332C21.9407 11.2406 21.797 11.3846 21.3923 11.386C20.8104 11.3887 20.2291 11.3867 19.6137 11.3867C19.6137 11.5063 19.6137 11.6078 19.6137 11.7086C19.6137 13.9504 19.6137 16.1921 19.613 18.4339C19.613 18.5208 19.6221 18.6105 19.6019 18.6932C19.5516 18.9025 19.4163 19.0263 19.1944 19.0263C18.9718 19.0263 18.8378 18.9011 18.7883 18.6925C18.7687 18.6098 18.7778 18.5194 18.7778 18.4332C18.7771 16.1998 18.7778 13.967 18.7778 11.7336C18.7778 11.6307 18.7778 11.5278 18.7778 11.3873C18.3829 11.3873 18.004 11.3873 17.6244 11.3873C17.4067 11.3873 17.189 11.3901 16.972 11.3867C16.6008 11.3804 16.4508 11.2344 16.4494 10.8589C16.4459 9.84231 16.448 8.82574 16.448 7.80916C16.448 7.2355 16.4459 6.66185 16.4487 6.0889C16.4508 5.67726 16.5848 5.54793 17.0006 5.54723C17.5819 5.54584 18.1631 5.54723 18.7771 5.54723C18.7771 5.35462 18.7771 5.18357 18.7771 5.01321C18.7771 4.31788 18.7862 3.62254 18.7722 2.9279C18.7673 2.67341 18.8246 2.47037 19.0381 2.32366C19.1441 2.32227 19.2488 2.32227 19.3535 2.32227ZM17.3028 6.39206C17.3028 7.78969 17.3028 9.15811 17.3028 10.5314C18.5755 10.5314 19.83 10.5314 21.0916 10.5314C21.0916 9.14142 21.0916 7.7723 21.0916 6.39206C19.8244 6.39206 18.5734 6.39206 17.3028 6.39206Z" fill="#797C97"/>
                                    <path d="M26.7022 11.2303C27.3002 11.2303 27.864 11.2296 28.4271 11.2303C28.9134 11.231 29.0215 11.3395 29.0215 11.829C29.0215 13.7662 29.0222 15.7034 29.0215 17.6399C29.0215 18.0995 28.896 18.2233 28.4319 18.2233C27.8682 18.224 27.3037 18.2233 26.7022 18.2233C26.7022 18.3429 26.7022 18.443 26.7022 18.5432C26.7022 20.0027 26.7029 21.4615 26.7015 22.921C26.7015 23.0246 26.7015 23.1317 26.6771 23.2311C26.6241 23.4432 26.4754 23.5565 26.2571 23.5433C26.0401 23.5301 25.9047 23.4056 25.8754 23.1859C25.8628 23.092 25.867 22.9954 25.867 22.8994C25.8663 21.4573 25.867 20.0159 25.867 18.5737C25.867 18.4708 25.867 18.3672 25.867 18.2372C25.7582 18.2323 25.6661 18.224 25.5747 18.224C25.0527 18.2226 24.5308 18.2275 24.0089 18.2219C23.7012 18.2184 23.5358 18.0592 23.5358 17.7553C23.5323 15.7312 23.5323 13.7078 23.5358 11.6837C23.5365 11.3875 23.6942 11.2352 23.9908 11.2324C24.5992 11.2268 25.2076 11.231 25.8531 11.231C25.8579 11.1191 25.8663 11.0196 25.867 10.9209C25.8677 9.76593 25.8677 8.61029 25.8684 7.45533C25.8684 7.36007 25.8642 7.26273 25.8803 7.16955C25.9138 6.97555 26.0394 6.86221 26.2333 6.84135C26.4378 6.8191 26.5962 6.90393 26.6631 7.10141C26.698 7.20501 26.7022 7.32322 26.7022 7.43447C26.705 8.58943 26.7036 9.74507 26.7036 10.9C26.7022 11.0015 26.7022 11.1024 26.7022 11.2303ZM24.3906 12.0758C24.3906 13.8629 24.3906 15.6207 24.3906 17.375C25.6619 17.375 26.9108 17.375 28.1689 17.375C28.1689 15.6019 28.1689 13.8441 28.1689 12.0758C26.9018 12.0758 25.6521 12.0758 24.3906 12.0758Z" fill="#797C97"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2679_56947">
                                    <rect width="26.7009" height="26.7009" fill="#797C97" transform="translate(2.32227 2.32227)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>                        
                            <span>Indices</span>
                        </div>                        
                    </a>
                </li>                                      
                <li class="nav-item mb-2 mb-lg-0" role="presentation" data-aos="fade-up">
                    <a class="widget-card-nav__link nav-link" id="commodity-tab" role="tab" aria-selected="false" href="#commodity" data-category="commodity">
                        <div class="widget-card-nav__link-inner">
                            <div class="widget-card-nav__icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.77218 25.5527C4.66886 25.4457 4.51949 25.3546 4.47176 25.228C4.36619 24.9449 4.58856 24.6928 4.92773 24.684C5.25398 24.6753 5.58023 24.6824 5.92895 24.6824C5.92895 24.5793 5.92895 24.5013 5.92895 24.4232C5.92895 23.2616 5.95421 22.0994 5.92052 20.9389C5.89469 20.0424 6.54102 19.5383 7.31426 19.5764C7.94037 19.6075 8.56929 19.5819 9.19653 19.583C10.0428 19.5846 10.5291 20.0533 10.5324 20.8805C10.5364 22.0492 10.5335 23.2179 10.5335 24.3872C10.5335 24.474 10.5335 24.5607 10.5335 24.6649C11.3635 24.6649 12.18 24.6649 13.0268 24.6649C13.0268 24.5842 13.0268 24.5002 13.0268 24.4161C13.0268 22.0132 13.0256 19.6103 13.0273 17.2073C13.0279 16.5499 13.3817 16.0872 13.9825 15.9573C14.1049 15.9306 14.2341 15.9268 14.3604 15.9262C15.0028 15.9235 15.6458 15.924 16.2882 15.9251C17.1507 15.9262 17.6392 16.3971 17.6392 17.2308C17.6398 19.619 17.6392 22.0078 17.6392 24.3965C17.6392 24.4827 17.6392 24.5684 17.6392 24.6688C18.4714 24.6688 19.289 24.6688 20.1398 24.6688C20.1398 24.5782 20.1398 24.4871 20.1398 24.3954C20.1398 19.9164 20.142 15.4368 20.1364 10.9577C20.1358 10.423 20.315 9.99799 20.8237 9.76555C21.0113 9.67989 21.2404 9.65206 21.4515 9.6477C22.1085 9.63297 22.7666 9.64006 23.4236 9.64279C24.2575 9.64661 24.7387 10.1153 24.7415 10.9321C24.7455 11.9846 24.7427 13.0377 24.7427 14.0902C24.7427 17.5238 24.7427 20.958 24.7427 24.3916C24.7427 24.4843 24.7427 24.5766 24.7427 24.6835C25.0397 24.6835 25.3076 24.683 25.576 24.6835C25.9045 24.684 26.092 24.7861 26.1516 24.9956C26.2167 25.2231 26.1302 25.3792 25.8433 25.5549C18.8207 25.5527 11.7964 25.5527 4.77218 25.5527ZM23.8465 24.6715C23.8465 23.966 23.8465 23.2774 23.8465 22.5888C23.8465 18.7198 23.8465 14.8513 23.8465 10.9823C23.8465 10.5785 23.7785 10.5125 23.3647 10.5125C22.752 10.512 22.1394 10.512 21.5268 10.5125C21.0989 10.5131 21.0377 10.5736 21.0371 10.9943C21.0371 15.4728 21.0371 19.9513 21.0371 24.4303C21.0371 24.5078 21.0371 24.5853 21.0371 24.6726C21.9788 24.6715 22.8947 24.6715 23.8465 24.6715ZM16.7329 24.6693C16.7374 24.6251 16.7425 24.5967 16.7425 24.5689C16.743 22.1027 16.7436 19.6359 16.7419 17.1697C16.7419 16.9007 16.6268 16.7965 16.3387 16.7954C15.7042 16.7932 15.0696 16.7948 14.4351 16.7948C14.0044 16.7948 13.9235 16.8723 13.9235 17.2859C13.9235 19.6654 13.9235 22.0449 13.9235 24.4238C13.9235 24.5018 13.9235 24.5793 13.9235 24.6693C14.8686 24.6693 15.7907 24.6693 16.7329 24.6693ZM9.61543 24.6715C9.62386 24.6355 9.6334 24.6147 9.6334 24.594C9.63453 23.3314 9.6379 22.0689 9.63397 20.8063C9.6334 20.5542 9.51885 20.456 9.25549 20.4549C8.59063 20.4522 7.92633 20.4533 7.26147 20.4544C6.91725 20.4549 6.82684 20.5427 6.82684 20.881C6.82572 22.0781 6.82628 23.2758 6.82684 24.4729C6.82684 24.5362 6.83358 24.5989 6.83751 24.6715C7.76686 24.6715 8.68216 24.6715 9.61543 24.6715Z" fill="#797C97"/>
                                    <path d="M16.2488 9.85291C17.7909 8.35827 19.3224 6.87347 20.8667 5.37719C20.8126 5.37118 20.7568 5.36025 20.7005 5.36025C20.2214 5.35861 19.7428 5.36134 19.2637 5.35861C18.9182 5.35697 18.6995 5.18209 18.6939 4.91049C18.6877 4.63123 18.9126 4.44707 19.2705 4.44598C20.1577 4.44379 21.0448 4.44379 21.932 4.44598C22.3514 4.44707 22.5227 4.60446 22.5261 5.0094C22.5328 5.82367 22.5312 6.63848 22.5266 7.45274C22.525 7.79594 22.3457 7.99923 22.0633 8.00305C21.7832 8.00688 21.5944 7.80031 21.5876 7.46258C21.5803 7.07457 21.5854 6.68602 21.5854 6.29802C21.5854 6.22479 21.5854 6.15101 21.5854 6.02313C21.4834 6.11385 21.4214 6.16522 21.3633 6.22096C19.8195 7.7167 18.2762 9.21297 16.7324 10.7087C16.3632 11.0667 16.1598 11.065 15.7855 10.7022C15.2534 10.1863 14.7219 9.67038 14.1301 9.09603C14.0698 9.18565 14.0303 9.27418 13.965 9.33757C11.3801 11.8476 8.793 14.3554 6.20589 16.8632C6.12867 16.9381 6.05032 17.0152 5.96127 17.0758C5.77921 17.1993 5.53008 17.1747 5.37734 17.0294C5.22346 16.8829 5.19359 16.6479 5.3159 16.4659C5.36663 16.3905 5.43257 16.3228 5.49852 16.2588C8.23443 13.6045 10.9709 10.9508 13.7074 8.29761C14.0681 7.94786 14.2755 7.9495 14.6408 8.30308C15.1238 8.77087 15.6068 9.23975 16.0899 9.70754C16.1451 9.76055 16.2026 9.81028 16.2488 9.85291Z" fill="#797C97"/>
                                </svg>
                            </div>                        
                            <span>Commodity</span>
                        </div>                        
                    </a>
                </li>
                <li class="nav-item" role="presentation" data-aos="fade-up">
                    <a class="widget-card-nav__link nav-link" id="forex-tab" role="tab" aria-selected="false" href="#forex" data-category="forex">
                        <div class="widget-card-nav__link-inner">
                            <div class="widget-card-nav__icon">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.7778 20.1154C27.6853 20.5602 27.6331 21.0192 27.4928 21.448C26.6378 24.062 24.8533 25.6741 22.1552 26.0465C19.3945 26.4273 17.2237 25.3209 15.6929 22.9659C15.6546 22.9069 15.6183 22.846 15.5628 22.7576C14.5121 24.5325 13.0094 25.6478 11.0043 26.0235C9.58316 26.2901 8.21751 26.0773 6.92582 25.4248C4.44126 24.1697 2.99209 21.382 3.40331 18.6699C3.65579 17.0021 4.40556 15.6105 5.69278 14.5278C6.97746 13.4477 8.47509 12.9663 10.1742 13.0048C9.11647 11.3626 8.79514 9.61393 9.24016 7.74478C9.59591 6.25126 10.4018 5.03593 11.6112 4.10136C14.0289 2.23285 17.385 2.31874 19.7497 4.28981C22.0627 6.21793 22.9738 9.93571 20.9706 12.9901C21.2824 13.0074 21.5871 13.0157 21.8906 13.042C24.6946 13.283 27.0975 15.4547 27.6388 18.2353C27.6892 18.4924 27.7319 18.7513 27.7784 19.009C27.7778 19.3782 27.7778 19.7468 27.7778 20.1154ZM9.8656 9.30753C9.85986 10.6549 10.3176 11.9427 11.1873 12.974C11.2874 13.0926 11.441 13.1933 11.5889 13.2381C12.6358 13.5535 13.5609 14.074 14.3578 14.8291C14.4324 14.8996 14.5434 14.9509 14.6447 14.9707C15.3008 15.0957 15.9594 15.0836 16.6129 14.9586C19.4098 14.4227 21.4889 11.8549 21.2364 8.81333C21.0088 6.06922 18.8265 3.78214 15.9352 3.58728C12.646 3.36485 9.87899 5.98204 9.8656 9.30753ZM15.5539 19.7442C15.5749 19.925 15.5992 20.2769 15.6604 20.6224C16.1934 23.6261 19.1229 25.7235 22.1118 25.2478C25.1255 24.7677 27.2027 22.0788 26.9286 19.0109C26.6353 15.7297 23.5578 13.3445 20.3439 13.9118C20.2425 13.9298 20.1335 13.9855 20.0589 14.0567C19.2505 14.8246 18.3158 15.3592 17.2441 15.6573C17.1242 15.6906 16.9992 15.7739 16.9183 15.8701C16.0212 16.9367 15.573 18.1744 15.5539 19.7442ZM9.83627 25.3081C12.0652 25.3139 14.1194 23.9902 15.0362 21.9467C15.0847 21.8384 15.0904 21.682 15.0553 21.5672C14.6492 20.2513 14.6377 18.9353 15.0496 17.6225C15.1114 17.4264 15.0885 17.277 15.0062 17.1033C13.9103 14.7945 11.4544 13.4958 8.94561 13.9048C6.05492 14.3765 3.95161 17.0251 4.16711 19.9231C4.39344 22.9768 6.83975 25.3004 9.83627 25.3081ZM15.8644 15.8944C15.6457 15.8944 15.4653 15.8944 15.2568 15.8944C15.3684 16.0707 15.4614 16.2194 15.5673 16.3867C15.675 16.2085 15.7636 16.0617 15.8644 15.8944Z" fill="#797C97"/>
                                    <path d="M13.124 8.90781C13.124 8.54757 13.1189 8.22066 13.1247 7.89376C13.1534 6.3637 14.3877 5.19837 15.907 5.26439C17.2663 5.32336 18.4018 6.50344 18.412 7.86812C18.4139 8.13028 18.2596 8.31874 18.0294 8.33412C17.7999 8.3495 17.631 8.18541 17.601 7.91876C17.4881 6.89252 16.9571 6.26947 16.0581 6.10858C15.0386 5.9259 14.0294 6.69253 13.9471 7.73223C13.9172 8.11234 13.942 8.49693 13.942 8.90781C14.1135 8.90781 14.2697 8.90781 14.4266 8.90781C15.0546 8.90781 15.6826 8.90589 16.3106 8.90909C16.5968 8.91038 16.7747 9.06806 16.7792 9.30843C16.7836 9.55842 16.5987 9.72508 16.3023 9.72636C15.6029 9.72893 14.9035 9.72765 14.2034 9.72765C14.1174 9.72765 14.0313 9.72765 13.9414 9.72765C13.9312 9.80457 13.921 9.85841 13.9165 9.91354C13.8662 10.4859 13.8164 11.0577 13.7648 11.6494C14.2136 11.5128 14.6657 11.4731 15.1183 11.6051C15.2777 11.6513 15.4416 11.7006 15.5838 11.7833C16.3138 12.207 17.0514 12.25 17.8139 11.8763C18.0396 11.766 18.2647 11.85 18.3648 12.0513C18.4706 12.2641 18.3897 12.4859 18.1576 12.6141C18.1161 12.6371 18.0721 12.6564 18.0288 12.6756C17.163 13.0589 16.3061 13.0358 15.4467 12.641C15.1751 12.516 14.8875 12.3987 14.5955 12.3538C14.1218 12.2814 13.7578 12.5262 13.4562 12.8781C13.3121 13.0467 13.1291 13.1127 12.9245 12.9967C12.7345 12.889 12.6771 12.716 12.7345 12.5038C12.7472 12.4576 12.7562 12.4102 12.7625 12.3628C12.8735 11.5397 12.9844 10.7167 13.0941 9.89302C13.0998 9.84751 13.0947 9.80072 13.0947 9.72893C12.8442 9.72893 12.6083 9.73149 12.3717 9.72829C12.0797 9.7238 11.8885 9.55137 11.8967 9.30587C11.9044 9.06806 12.0861 8.91422 12.3717 8.91038C12.6102 8.90525 12.848 8.90781 13.124 8.90781Z" fill="#797C97"/>
                                    <path d="M19.4579 20.7933C19.827 21.6843 20.434 22.2285 21.331 22.3919C22.1618 22.5432 22.8414 22.2265 23.3929 21.6035C23.4458 21.5439 23.4885 21.4759 23.5376 21.4125C23.7014 21.2003 23.9291 21.1497 24.1203 21.2817C24.3218 21.4208 24.3562 21.6599 24.1936 21.8945C23.7187 22.5823 23.0741 23.0259 22.2574 23.1893C20.7591 23.4893 19.1856 22.5361 18.6762 21.0195C18.6176 20.8452 18.55 20.7753 18.3651 20.7881C18.1197 20.8055 17.8723 20.7965 17.6256 20.7907C17.3654 20.7849 17.1869 20.6125 17.1901 20.3818C17.1933 20.1619 17.3654 19.9863 17.6103 19.9766C17.871 19.9664 18.133 19.9741 18.4091 19.9741C18.4091 19.6991 18.4091 19.4401 18.4091 19.1536C18.1547 19.1536 17.9023 19.1562 17.6504 19.153C17.3737 19.1491 17.1876 18.9805 17.1895 18.7427C17.1914 18.5068 17.3782 18.3395 17.6562 18.3357C17.9654 18.3312 18.2752 18.3344 18.5908 18.3344C18.6476 18.1838 18.696 18.0415 18.754 17.903C19.2628 16.6774 20.5143 15.83 21.7913 15.8864C22.8082 15.9313 23.6109 16.4044 24.1962 17.2441C24.3524 17.4684 24.3218 17.7005 24.1343 17.8415C23.945 17.9838 23.6912 17.937 23.5338 17.7139C23.1563 17.1787 22.6533 16.8492 22.0107 16.73C20.9944 16.5415 19.7811 17.3005 19.4885 18.3351C19.9609 18.3351 20.4257 18.3351 20.8911 18.3351C21.1219 18.3351 21.3527 18.3331 21.5829 18.3357C21.8882 18.3389 22.0674 18.4902 22.0693 18.7421C22.0719 18.9959 21.8933 19.1523 21.5911 19.1536C20.907 19.1555 20.223 19.1542 19.5389 19.1542C19.4521 19.1542 19.3661 19.1542 19.2551 19.1542C19.2551 19.4292 19.2551 19.6869 19.2551 19.9734C19.3935 19.9734 19.5185 19.9734 19.6428 19.9734C20.2867 19.9734 20.9313 19.9715 21.5752 19.9741C21.8933 19.9754 22.0757 20.1363 22.068 20.3991C22.061 20.651 21.887 20.7913 21.5733 20.7926C20.8835 20.7939 20.193 20.7933 19.4579 20.7933Z" fill="#797C97"/>
                                    <path d="M9.45376 15.8976C9.45376 15.6322 9.45121 15.3771 9.45439 15.122C9.45822 14.838 9.6157 14.6521 9.8516 14.6457C10.0951 14.6386 10.2622 14.8309 10.266 15.1271C10.2686 15.3271 10.2743 15.5277 10.2641 15.7277C10.2571 15.8681 10.3068 15.9136 10.4452 15.9424C11.0305 16.0629 11.5328 16.3366 11.9103 16.8168C12.1436 17.1142 12.2737 17.4526 12.3018 17.8302C12.3228 18.1071 12.1742 18.309 11.9371 18.3334C11.6993 18.3577 11.5284 18.1955 11.4933 17.9109C11.4175 17.3039 10.9667 16.87 10.2826 16.7603C10.2826 17.5654 10.2826 18.3686 10.2826 19.0993C10.7098 19.3077 11.142 19.4487 11.4933 19.7032C12.5785 20.489 12.5804 21.9165 11.5003 22.7088C11.2007 22.9287 10.8264 23.0549 10.4707 23.1806C10.3113 23.237 10.2507 23.2863 10.2635 23.4524C10.2769 23.6274 10.2673 23.8043 10.266 23.9805C10.2635 24.3004 10.1079 24.4921 9.85478 24.4882C9.60422 24.4844 9.45503 24.2921 9.45312 23.9684C9.45184 23.7286 9.45312 23.4895 9.45312 23.262C9.18088 23.169 8.91438 23.1069 8.67465 22.9908C7.97334 22.6518 7.49644 22.1287 7.42503 21.3095C7.4008 21.0275 7.54234 20.8313 7.78143 20.8006C8.01286 20.7711 8.19074 20.9371 8.23155 21.2204C8.32081 21.8441 8.78113 22.2883 9.43718 22.3697C9.43718 21.5653 9.43718 20.7627 9.43718 19.9628C8.07853 19.5647 7.39315 18.8615 7.41866 17.8988C7.44543 16.9219 8.18501 16.1847 9.45376 15.8976ZM10.2794 22.3652C10.9163 22.3152 11.4882 21.7659 11.492 21.2121C11.4959 20.6506 10.9189 20.0974 10.2794 20.0506C10.2794 20.8217 10.2794 21.5928 10.2794 22.3652ZM9.44228 16.7616C8.74479 16.8552 8.20541 17.4007 8.23665 17.9705C8.26725 18.525 8.85062 19.0615 9.44228 19.0782C9.44228 18.3071 9.44228 17.5353 9.44228 16.7616Z" fill="#797C97"/>
                                </svg>
                            </div>                        
                            <span>Forex</span>
                        </div>                        
                    </a>
                </li> 
                <li class="nav-item" role="presentation" data-aos="fade-up">
                    <a class="widget-card-nav__link nav-link" role="tab" aria-selected="true" href="#crypto" data-category="crypto">
                        <div class="widget-card-nav__link-inner">
                            <div class="widget-card-nav__icon">
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8585 22.3124C10.7508 22.2323 10.6787 22.1132 10.6576 21.9807C10.6364 21.8481 10.6679 21.7126 10.7453 21.6029C10.8228 21.4933 10.9399 21.4182 11.0719 21.3938C11.2039 21.3693 11.3402 21.3974 11.4518 21.472C16.6241 25.1136 23.9081 21.4372 23.9081 14.9999C23.9078 13.7573 23.6148 12.5323 23.0527 11.4241C22.4906 10.3159 21.6752 9.35578 20.6728 8.62154C19.6703 7.8873 18.5089 7.39961 17.2828 7.198C16.0567 6.9964 14.8003 7.08657 13.6155 7.46118C12.4308 7.8358 11.3509 8.48433 10.4636 9.35419C9.57625 10.2241 8.90637 11.2908 8.50826 12.4679C8.11015 13.6449 7.99501 14.8993 8.17219 16.1292C8.34936 17.3591 8.81385 18.5299 9.52801 19.5468C9.60011 19.6584 9.62619 19.7936 9.60077 19.9241C9.57535 20.0545 9.50042 20.17 9.39167 20.2464C9.28293 20.3228 9.14884 20.3541 9.01751 20.3338C8.88618 20.3135 8.76782 20.2431 8.68726 20.1374C7.87965 18.9883 7.35423 17.665 7.15363 16.2748C6.95304 14.8847 7.0829 13.4668 7.53269 12.1363C7.98248 10.8057 8.73954 9.59988 9.74247 8.61658C10.7454 7.63328 11.966 6.90021 13.3052 6.4768C14.6444 6.05339 16.0645 5.95158 17.4504 6.17961C18.8363 6.40765 20.149 6.95911 21.2819 7.78928C22.4148 8.61945 23.3362 9.70495 23.9712 10.9577C24.6062 12.2105 24.937 13.5954 24.9367 14.9999C24.9367 22.2565 16.7235 26.4426 10.8585 22.3124Z" fill="#797C97"/>
                                    <path d="M16 27C13.6266 27 11.3065 26.2962 9.33315 24.9776C7.35977 23.659 5.8217 21.7849 4.91345 19.5922C4.0052 17.3995 3.76756 14.9867 4.23058 12.6589C4.6936 10.3311 5.83649 8.19295 7.51472 6.51472C9.19295 4.83649 11.3311 3.6936 13.6589 3.23058C15.9867 2.76756 18.3995 3.0052 20.5922 3.91345C22.7849 4.8217 24.659 6.35977 25.9776 8.33315C27.2962 10.3065 28 12.6266 28 15C27.9964 18.1815 26.731 21.2316 24.4813 23.4813C22.2316 25.731 19.1815 26.9964 16 27ZM16 4.02863C13.8301 4.02863 11.7089 4.67209 9.90463 5.87764C8.1004 7.08318 6.69417 8.79668 5.86377 10.8014C5.03338 12.8062 4.81611 15.0122 5.23944 17.1404C5.66277 19.2686 6.70769 21.2235 8.24206 22.7579C9.77644 24.2923 11.7313 25.3372 13.8596 25.7605C15.9878 26.1839 18.1938 25.9666 20.1985 25.1362C22.2033 24.3058 23.9168 22.8996 25.1223 21.0953C26.3279 19.2911 26.9713 17.1699 26.9713 15C26.968 12.0912 25.811 9.30259 23.7542 7.24579C21.6974 5.18899 18.9087 4.032 16 4.02863Z" fill="#797C97"/>
                                    <path d="M17.1489 20.8742C17.0125 20.874 16.8817 20.8197 16.7853 20.7233C16.6888 20.6268 16.6346 20.4961 16.6344 20.3597V19.5939C16.6344 19.5273 16.6079 19.4634 16.5608 19.4163C16.5137 19.3692 16.4498 19.3427 16.3831 19.3427H14.8516C14.785 19.3427 14.7211 19.3692 14.674 19.4163C14.6268 19.4634 14.6004 19.5273 14.6004 19.5939V20.3597C14.6022 20.4284 14.5903 20.4968 14.5653 20.5608C14.5403 20.6248 14.5027 20.6832 14.4547 20.7324C14.4068 20.7817 14.3495 20.8208 14.2862 20.8476C14.2228 20.8743 14.1548 20.8881 14.0861 20.8881C14.0173 20.8881 13.9493 20.8743 13.886 20.8476C13.8226 20.8208 13.7653 20.7817 13.7174 20.7324C13.6694 20.6832 13.6319 20.6248 13.6068 20.5608C13.5818 20.4968 13.5699 20.4284 13.5718 20.3597V19.5939C13.5717 19.5273 13.5451 19.4634 13.4979 19.4163C13.4507 19.3692 13.3868 19.3427 13.3201 19.3427H12.5548C12.486 19.3445 12.4177 19.3326 12.3536 19.3076C12.2896 19.2826 12.2313 19.245 12.182 19.1971C12.1328 19.1491 12.0936 19.0918 12.0669 19.0285C12.0401 18.9652 12.0264 18.8971 12.0264 18.8284C12.0264 18.7596 12.0401 18.6916 12.0669 18.6283C12.0936 18.565 12.1328 18.5076 12.182 18.4597C12.2313 18.4118 12.2896 18.3742 12.3536 18.3492C12.4177 18.3241 12.486 18.3122 12.5548 18.3141H13.3201C13.3868 18.3141 13.4507 18.2876 13.4979 18.2405C13.5451 18.1934 13.5717 18.1295 13.5718 18.0628V11.9368C13.5717 11.8702 13.5451 11.8063 13.4979 11.7591C13.4507 11.712 13.3868 11.6856 13.3201 11.6856H12.5548C12.486 11.6874 12.4177 11.6755 12.3536 11.6505C12.2896 11.6255 12.2313 11.5879 12.182 11.54C12.1328 11.492 12.0936 11.4347 12.0669 11.3714C12.0401 11.308 12.0264 11.24 12.0264 11.1713C12.0264 11.1025 12.0401 11.0345 12.0669 10.9712C12.0936 10.9079 12.1328 10.8505 12.182 10.8026C12.2313 10.7546 12.2896 10.7171 12.3536 10.692C12.4177 10.667 12.486 10.6551 12.5548 10.657H13.3201C13.3868 10.657 13.4507 10.6305 13.4979 10.5834C13.5451 10.5363 13.5717 10.4724 13.5718 10.4057V9.63996C13.5699 9.57125 13.5818 9.50287 13.6068 9.43885C13.6319 9.37482 13.6694 9.31646 13.7174 9.26721C13.7653 9.21796 13.8226 9.17881 13.886 9.15208C13.9493 9.12535 14.0173 9.11157 14.0861 9.11157C14.1548 9.11157 14.2228 9.12535 14.2862 9.15208C14.3495 9.17881 14.4068 9.21796 14.4547 9.26721C14.5027 9.31646 14.5403 9.37482 14.5653 9.43885C14.5903 9.50287 14.6022 9.57125 14.6004 9.63996V10.4057C14.6004 10.4723 14.6268 10.5363 14.674 10.5834C14.7211 10.6305 14.785 10.657 14.8516 10.657H16.3831C16.4498 10.657 16.5137 10.6305 16.5608 10.5834C16.6079 10.5363 16.6344 10.4723 16.6344 10.4057V9.63996C16.6344 9.50351 16.6886 9.37264 16.7851 9.27615C16.8816 9.17967 17.0124 9.12546 17.1489 9.12546C17.2853 9.12546 17.4162 9.17967 17.5127 9.27615C17.6092 9.37264 17.6634 9.50351 17.6634 9.63996V10.6742C17.6634 10.7216 17.6768 10.768 17.702 10.8082C17.7272 10.8483 17.7632 10.8805 17.8059 10.9011C18.1275 11.0511 18.412 11.2704 18.6389 11.5434C18.8657 11.8163 19.0294 12.136 19.1181 12.4797C19.2068 12.8233 19.2184 13.1823 19.152 13.531C19.0856 13.8796 18.9428 14.2092 18.734 14.4962C18.7139 14.5241 18.6997 14.5559 18.6923 14.5895C18.685 14.6231 18.6847 14.6579 18.6913 14.6917C18.698 14.7255 18.7116 14.7575 18.7312 14.7858C18.7508 14.8141 18.776 14.8381 18.8052 14.8562C19.2283 15.1168 19.5608 15.5016 19.7574 15.958C19.9539 16.4144 20.005 16.9203 19.9037 17.4068C19.8024 17.8933 19.5535 18.3367 19.1911 18.6767C18.8286 19.0167 18.3702 19.2367 17.8782 19.3067C17.8185 19.3154 17.7639 19.3453 17.7244 19.3909C17.685 19.4366 17.6633 19.495 17.6634 19.5553V20.3597C17.6632 20.4961 17.6089 20.6268 17.5125 20.7233C17.416 20.8197 17.2853 20.874 17.1489 20.8742ZM14.8516 15.5143C14.785 15.5143 14.7211 15.5408 14.674 15.5879C14.6268 15.635 14.6004 15.6989 14.6004 15.7656V18.0628C14.6004 18.1295 14.6268 18.1934 14.674 18.2405C14.7211 18.2876 14.785 18.3141 14.8516 18.3141H17.5317C17.903 18.3141 18.2591 18.1666 18.5216 17.9041C18.7841 17.6415 18.9316 17.2855 18.9316 16.9142C18.9316 16.5429 18.7841 16.1869 18.5216 15.9243C18.2591 15.6618 17.903 15.5143 17.5317 15.5143H14.8516ZM14.8516 11.6856C14.785 11.6856 14.7211 11.7121 14.674 11.7592C14.6268 11.8063 14.6004 11.8702 14.6004 11.9368V14.2341C14.6004 14.3007 14.6268 14.3646 14.674 14.4117C14.7211 14.4589 14.785 14.4853 14.8516 14.4853H16.766C17.1373 14.4853 17.4933 14.3378 17.7559 14.0753C18.0184 13.8128 18.1659 13.4567 18.1659 13.0855C18.1659 12.7142 18.0184 12.3581 17.7559 12.0956C17.4933 11.8331 17.1373 11.6856 16.766 11.6856H14.8516Z" fill="#797C97"/>
                                </svg>
                            </div>                        
                            <span>Crypto</span>
                        </div>                        
                    </a>
                </li> 
            </ul>            
        </div>

        <div class="widget-card card bg-dark-1 rounded" data-aos="fade-down">
            <div class="card-header">
                <h3 class="widget-card__title text-white mb-0">Indices</h3>
                <form class="" id="instruments-widget-data">
                    <input type="hidden" name="category" value="indices">
                    <input type="hidden"  name="toShow" value="10">
                    <select class="form-control" id="toShow">
                        <option value="5">5 per page</option>
                        <option value="10" selected>10 per page</option>
                        <option value="25">25 per page</option>
                        <option value="50">50 per page</option>
                    </select>                    
                </form>
            </div>
            <div class="card-body pt-1">                   
                <div class="" role="tabpanel">
                    <div class="tradingview-widget-container" id="instruments-widget" style="width: 100%; height: 100%;">                            
                        <iframe id="instruments-frame" scrolling="no" allowtransparency="true" frameborder="0" src="" style="box-sizing: border-box; height: 100%; width: 100%;"></iframe>  
                        <div class="pagination text-center mt-3"></div>
                    </div>                       
                </div>	
            </div>				
        </div>

    </div>
</section>

