<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'image'           => $image,
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



<section class="trust-firstscreen block mb-0">   
    <div class="block__bg" style="background-image: url('<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>'), linear-gradient(108deg, #637CFF 25.48%, #7D56FF 85.58%);"></div> 
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6 d-flex align-items-center mb-5 mb-lg-0">
                <div class="text-center text-lg-left">
                    <!-- <a href="../">
                        <svg class="trust-firstscreen__logo" width="190" height="36" viewBox="0 0 190 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.478271 34.865V10.6817H7.01672V34.865H0.478271Z" fill="white"/>
                            <path d="M27.0859 10.0995C29.8326 10.0995 31.9972 11.0251 33.5795 12.8761C35.1917 14.6973 35.9979 17.1455 35.9979 20.2207V34.865H29.4594V21.2507C29.4594 17.6382 28.0562 15.8319 25.2497 15.8319C24.1451 15.8319 23.1747 16.0856 22.3388 16.5932C21.5327 17.1007 20.9057 17.8322 20.4578 18.7876C20.0399 19.743 19.8309 20.8626 19.8309 22.1464V34.865H13.2924V10.6817H17.7708L19.0695 13.6822C19.5174 13.115 20.0249 12.6224 20.5922 12.2044C21.1893 11.7565 21.8312 11.3833 22.5179 11.0848C23.2046 10.7564 23.9211 10.5175 24.6675 10.3682C25.4438 10.1891 26.2499 10.0995 27.0859 10.0995Z" fill="white"/>
                            <path d="M57.1359 10.6817H63.943L54.3145 34.865H48.2687L38.461 10.6817H45.4025L51.3587 26.8935L57.1359 10.6817Z" fill="white"/>
                            <path d="M90.0275 22.6838C90.0275 23.3108 89.9828 23.9527 89.8932 24.6095H71.6214C71.8901 26.2516 72.532 27.5205 73.5471 28.4162C74.592 29.282 75.9206 29.7149 77.5328 29.7149C78.6375 29.7149 79.6377 29.476 80.5334 28.9983C81.429 28.4908 82.1307 27.8041 82.6382 26.9383H89.5349C88.6393 29.5656 87.1166 31.6555 84.967 33.208C82.8173 34.7605 80.3393 35.5368 77.5328 35.5368C73.9501 35.5368 70.9645 34.3127 68.5761 31.8645C66.1876 29.4163 64.9933 26.3859 64.9933 22.7734C64.9933 21.3403 65.1874 19.9669 65.5755 18.6533C65.9935 17.3396 66.5757 16.1603 67.3221 15.1153C68.0984 14.0704 68.994 13.1747 70.0091 12.4283C71.0242 11.652 72.1737 11.0549 73.4575 10.6369C74.7413 10.219 76.0998 10.01 77.5328 10.01C79.9512 10.01 82.1157 10.5772 84.0265 11.7118C85.9671 12.8463 87.445 14.3839 88.4601 16.3245C89.5051 18.2651 90.0275 20.3849 90.0275 22.6838ZM77.5328 15.5632C76.0699 15.5632 74.8309 15.9662 73.8158 16.7723C72.8305 17.5784 72.1588 18.698 71.8005 20.1311H83.4891C83.1905 19.1459 82.7576 18.3248 82.1904 17.668C81.6231 16.9813 80.9364 16.4588 80.1303 16.1006C79.3541 15.7423 78.4882 15.5632 77.5328 15.5632Z" fill="white"/>
                            <path d="M129.793 29.0431H132.748V34.865H128.091C125.434 34.865 123.344 34.1037 121.821 32.5811C120.298 31.0285 119.537 28.9088 119.537 26.2217V15.9214H115.148V14.5331L124.687 4.36719H125.941V10.6817H132.614V15.9214H126.075V25.3708C126.075 26.5352 126.389 27.4458 127.016 28.1027C127.673 28.7296 128.598 29.0431 129.793 29.0431ZM104.445 19.952C105.251 20.1013 105.833 20.2207 106.191 20.3103C106.58 20.37 107.147 20.5043 107.893 20.7133C108.669 20.9223 109.252 21.1313 109.64 21.3403C110.058 21.5493 110.535 21.8478 111.073 22.236C111.64 22.6241 112.058 23.0421 112.327 23.4899C112.625 23.9378 112.879 24.505 113.088 25.1917C113.297 25.8485 113.402 26.58 113.402 27.3861C113.402 29.8642 112.476 31.8496 110.625 33.3424C108.774 34.8053 106.326 35.5368 103.28 35.5368C100.235 35.5368 97.7869 34.7456 95.9359 33.1632C94.0848 31.5809 93.1443 29.491 93.1145 26.8935H99.4738C99.5037 27.9385 99.8769 28.7446 100.593 29.3118C101.34 29.8492 102.31 30.1179 103.504 30.1179C104.49 30.1179 105.311 29.9089 105.967 29.491C106.624 29.073 106.953 28.4759 106.953 27.6996C106.953 27.3115 106.833 26.9681 106.594 26.6696C106.385 26.371 106.042 26.1322 105.564 25.953C105.087 25.744 104.609 25.5798 104.131 25.4604C103.654 25.341 103.042 25.2216 102.295 25.1021C101.31 24.9529 100.489 24.8036 99.8321 24.6543C99.2051 24.505 98.4438 24.2512 97.5481 23.893C96.6823 23.5049 95.9807 23.0719 95.4433 22.5942C94.9357 22.1165 94.4879 21.4597 94.0997 20.6238C93.7116 19.7878 93.5175 18.8175 93.5175 17.7128C93.5175 15.4437 94.4132 13.5927 96.2046 12.1596C97.9959 10.7265 100.34 10.01 103.236 10.01C106.162 10.01 108.505 10.7564 110.267 12.2492C112.058 13.7121 112.954 15.6527 112.954 18.0711H106.729C106.729 16.1603 105.52 15.2049 103.101 15.2049C102.086 15.2049 101.295 15.4139 100.728 15.8319C100.16 16.2499 99.8769 16.8171 99.8769 17.5337C99.8769 17.8322 99.9515 18.1159 100.101 18.3846C100.28 18.6234 100.474 18.8175 100.683 18.9667C100.922 19.116 101.28 19.2653 101.758 19.4146C102.235 19.534 102.639 19.6236 102.967 19.6833C103.295 19.743 103.788 19.8326 104.445 19.952Z" fill="white"/>
                            <path d="M7.64113 7.64113V0C3.42105 0 0 3.42105 0 7.64113H7.64113Z" fill="black"/>
                            <path d="M7.64113 7.64113V0C3.42105 0 0 3.42105 0 7.64113H7.64113Z" fill="url(#paint0_linear_1093_2653)"/>
                            <path d="M7.64113 7.64113V0C3.42105 0 0 3.42105 0 7.64113H7.64113Z" fill="url(#paint1_linear_1093_2653)"/>
                            <path d="M150.406 34.8622C149.254 34.8622 148.202 34.5935 147.251 34.0561C146.315 33.5043 145.573 32.7491 145.025 31.7906C144.492 30.8321 144.226 29.772 144.226 28.6102C144.226 26.8529 144.817 25.3861 145.998 24.2098C147.179 23.0335 148.656 22.4453 150.428 22.4453C151.94 22.4453 153.237 22.8883 154.317 23.7741C155.398 24.6455 156.082 25.8073 156.37 27.2596H153.237C152.977 26.6932 152.596 26.2502 152.091 25.9307C151.602 25.5967 151.04 25.4297 150.406 25.4297C149.556 25.4297 148.843 25.7347 148.267 26.3446C147.705 26.9546 147.424 27.717 147.424 28.6319C147.424 29.5469 147.712 30.3166 148.288 30.941C148.865 31.5655 149.57 31.8778 150.406 31.8778C151.04 31.8778 151.602 31.7107 152.091 31.3767C152.581 31.0282 152.963 30.5344 153.237 29.8954H156.413C156.125 31.3912 155.434 32.5966 154.339 33.5116C153.244 34.412 151.933 34.8622 150.406 34.8622Z" fill="white"/>
                            <path d="M164.041 34.8622C162.845 34.8622 161.765 34.5935 160.8 34.0561C159.835 33.5188 159.078 32.7782 158.531 31.8342C157.998 30.8757 157.731 29.8155 157.731 28.6537C157.731 26.8675 158.329 25.3861 159.525 24.2098C160.72 23.0335 162.226 22.4453 164.041 22.4453C165.842 22.4453 167.34 23.0335 168.536 24.2098C169.731 25.3861 170.329 26.8675 170.329 28.6537C170.329 30.4255 169.724 31.9068 168.514 33.0977C167.318 34.274 165.827 34.8622 164.041 34.8622ZM164.041 31.8778C164.949 31.8778 165.69 31.58 166.267 30.9846C166.843 30.3747 167.131 29.5977 167.131 28.6537C167.131 27.7098 166.843 26.9401 166.267 26.3446C165.69 25.7347 164.941 25.4297 164.019 25.4297C163.112 25.4297 162.37 25.7347 161.794 26.3446C161.217 26.9401 160.929 27.7098 160.929 28.6537C160.929 29.1185 161.001 29.5541 161.145 29.9608C161.304 30.3674 161.52 30.7087 161.794 30.9846C162.067 31.2605 162.392 31.4784 162.766 31.6381C163.155 31.7979 163.58 31.8778 164.041 31.8778Z" fill="white"/>
                            <path d="M185.873 22.4889C187.083 22.4889 188.069 22.9246 188.833 23.7959C189.611 24.6673 190 25.7855 190 27.1506V34.5354H186.845V27.6735C186.845 26.076 186.254 25.2772 185.073 25.2772C184.612 25.2772 184.209 25.3934 183.863 25.6258C183.532 25.8436 183.28 26.1704 183.107 26.606C182.934 27.0417 182.847 27.5645 182.847 28.1745V34.5354H179.757V27.6735C179.757 26.076 179.188 25.2772 178.05 25.2772C177.33 25.2772 176.768 25.5314 176.365 26.0397C175.961 26.548 175.76 27.2596 175.76 28.1745V34.5354H172.605V22.7721H174.809L175.392 24.2316C175.825 23.6943 176.343 23.2731 176.948 22.9681C177.568 22.6486 178.216 22.4889 178.893 22.4889C179.628 22.4889 180.29 22.6559 180.881 22.9899C181.472 23.3239 181.933 23.7887 182.264 24.3841C182.408 24.1808 182.559 23.9992 182.718 23.8395C182.876 23.6652 183.049 23.5127 183.236 23.382C183.424 23.2368 183.618 23.1134 183.82 23.0117C184.021 22.8955 184.23 22.8011 184.446 22.7285C184.677 22.6559 184.907 22.5978 185.138 22.5542C185.383 22.5107 185.628 22.4889 185.873 22.4889Z" fill="white"/>
                            <path d="M141.361 32.7116C141.361 33.8985 140.398 34.8606 139.211 34.8606C138.025 34.8606 137.062 33.8985 137.062 32.7116C137.062 31.5247 138.025 30.5625 139.211 30.5625C140.398 30.5625 141.361 31.5247 141.361 32.7116Z" fill="white"/>
                            <defs>
                            <linearGradient id="paint0_linear_1093_2653" x1="-1.39528" y1="-0.898723" x2="11.5366" y2="0.416295" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4200FF"/>
                            <stop offset="1" stop-color="#60C6FF"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_1093_2653" x1="-1.39528" y1="-0.898723" x2="11.5366" y2="0.416295" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4200FF"/>
                            <stop offset="1" stop-color="#9766FF"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </a> -->


                    <h1 class="hero__title text-white--light" data-aos="fade-down">
                        <?php echo $title; ?>
                    </h1>
                    <h3 class="hero__subtitle text-white--light" data-aos="fade-down">
                        <?php echo $subtitle; ?>
                    </h3>
            
                    <a href="<?php echo $button_link; ?>"
                        class="hero__btn btn btn-secondary" data-aos="fade-up"><?php echo $button_text; ?></a>
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="trust-firstscreen__img-cont text-center text-lg-left" data-aos="fade-left">
                    <?php echo $inner; ?>
                    <div class="trust-firstscreen__under-img">
                        <svg width="543" height="804" viewBox="0 0 543 804" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1203_2620)">
                            <path d="M427.13 25.668C481.181 48.2627 512.879 110.259 520.289 192.458C527.698 274.632 510.811 376.854 467.847 479.631C424.883 582.409 363.996 666.237 300.31 718.692C236.604 771.162 170.214 792.156 116.163 769.561C62.1125 746.966 30.4148 684.97 23.0042 602.771C15.5959 520.597 32.4824 418.375 75.4462 315.598C118.41 212.82 179.297 128.991 242.983 76.5373C306.689 24.0668 373.079 3.07332 427.13 25.668Z" stroke="url(#paint0_linear_1203_2620)" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_1203_2620" x="0.816162" y="0.15625" width="541.661" height="802.914" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="10"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.92 0 0 0 0 0 0 0 0 0 1 0 0 0 1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1203_2620"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1203_2620" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_1203_2620" x1="152.652" y1="206.744" x2="629.538" y2="466.695" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0"/>
                            <stop offset="0.484375" stop-color="#C099FF"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="trust-firstscreen__under-img">
                        <svg width="635" height="658" viewBox="0 0 635 658" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M593.527 34.6635C636.244 74.7541 644.226 143.925 622.385 223.515C600.551 303.08 548.939 392.917 472.707 474.144C396.475 555.371 310.089 612.572 232.068 639.405C154.022 666.247 84.4843 662.664 41.767 622.574C-0.950293 582.483 -8.93261 513.312 12.9086 433.722C34.743 354.157 86.3542 264.32 162.587 183.093C238.819 101.866 325.204 44.6649 403.226 17.8318C481.271 -9.00963 550.809 -5.42715 593.527 34.6635Z" stroke="url(#paint0_linear_1203_2619)"/>
                            <defs>
                            <linearGradient id="paint0_linear_1203_2619" x1="215.547" y1="139.926" x2="628.691" y2="518.644" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0"/>
                            <stop offset="0.484375" stop-color="#A2BCFF"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



