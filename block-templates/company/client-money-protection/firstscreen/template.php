<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'inner'           => $inner,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<section class="cmp-first-screen bg-dark">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6 col-lg-6 align-self-center mb-5 mb-lg-0 order-2 order-md-1">

				<h1 class="cmp-first-screen__title text-gradient--dark text-white--light mb-4">

					<?php echo $title; ?>

				</h1>

				<h3 class="cmp-first-screen__subtitle text-gray--dark text-white--light">

					<?php echo $subtitle; ?>

				</h3>

			</div>

			<div class="col-12 col-md-6 col-lg-5 offset-lg-1 text-center order-1 order-md-2">

				<!-- <div class="cmp-first-screen__under-image"></div> -->

				<div class="cmp-first-screen__image" data-aos="fade-left">
				<svg width="534" height="471" viewBox="0 0 534 471" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M78.0034 205.599C-26.0017 265.558 -26.0017 362.756 78.0034 423.031C182.009 482.99 350.819 482.99 455.141 423.031C559.146 363.071 559.146 265.874 455.141 205.599C351.136 145.64 182.325 145.64 78.0034 205.599Z" fill="url(#paint0_linear_3747_63738)"/>
				<ellipse rx="189.044" ry="83.8858" transform="matrix(0.993265 -0.115869 0.148317 0.98894 279.212 365.862)" fill="#C1AEFF"/>
				<path d="M497.127 310.823C497.127 316.348 493.752 321.62 487.63 326.422C481.509 331.224 472.649 335.551 461.695 339.185C439.789 346.453 409.522 350.95 376.088 350.95C342.655 350.95 312.388 346.453 290.482 339.185C279.528 335.551 270.668 331.224 264.547 326.422C258.425 321.62 255.05 316.348 255.05 310.823C255.05 305.298 258.425 300.026 264.547 295.224C270.668 290.422 279.528 286.096 290.482 282.461C312.388 275.193 342.655 270.696 376.088 270.696C409.522 270.696 439.789 275.193 461.695 282.461C472.649 286.096 481.509 290.422 487.63 295.224C493.752 300.026 497.127 305.298 497.127 310.823Z" fill="#FFE600" fill-opacity="0.7" stroke="black" stroke-width="0.1"/>
				<mask id="path-4-inside-1_3747_63738" fill="white">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M376.088 315.287C442.964 315.287 497.177 297.299 497.177 275.11V310.823L497.177 311.939H497.131C495.35 333.612 441.839 351 376.088 351C310.338 351 256.827 333.612 255.046 311.939H255V310.823V275.11C255 297.299 309.213 315.287 376.088 315.287Z"/>
				</mask>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M376.088 315.287C442.964 315.287 497.177 297.299 497.177 275.11V310.823L497.177 311.939H497.131C495.35 333.612 441.839 351 376.088 351C310.338 351 256.827 333.612 255.046 311.939H255V310.823V275.11C255 297.299 309.213 315.287 376.088 315.287Z" fill="#E9A854" fill-opacity="0.6"/>
				<path d="M497.177 310.823H497.077H497.177ZM497.177 311.939V312.039H497.277V311.939H497.177ZM497.131 311.939V311.839H497.039L497.031 311.931L497.131 311.939ZM255.046 311.939L255.145 311.931L255.138 311.839H255.046V311.939ZM255 311.939H254.9V312.039H255V311.939ZM497.077 275.11C497.077 280.614 493.715 285.873 487.599 290.67C481.484 295.467 472.63 299.791 461.679 303.425C439.779 310.691 409.518 315.187 376.088 315.187V315.387C409.534 315.387 439.817 310.889 461.742 303.615C472.704 299.977 481.583 295.644 487.723 290.828C493.862 286.012 497.277 280.702 497.277 275.11H497.077ZM497.077 275.11V310.823H497.277V275.11H497.077ZM497.077 310.823L497.077 311.939H497.277L497.277 310.823H497.077ZM497.177 311.839H497.131V312.039H497.177V311.839ZM497.031 311.931C496.589 317.308 492.937 322.435 486.653 327.105C480.37 331.774 471.471 335.976 460.567 339.502C438.76 346.554 408.956 350.9 376.088 350.9V351.1C408.971 351.1 438.797 346.752 460.629 339.692C471.544 336.162 480.466 331.953 486.772 327.266C493.077 322.58 496.782 317.407 497.231 311.947L497.031 311.931ZM376.088 350.9C343.221 350.9 313.416 346.554 291.61 339.502C280.706 335.976 271.806 331.774 265.524 327.105C259.24 322.435 255.587 317.308 255.145 311.931L254.946 311.947C255.395 317.407 259.1 322.58 265.404 327.266C271.711 331.953 280.633 336.162 291.548 339.692C313.379 346.752 343.206 351.1 376.088 351.1V350.9ZM255.046 311.839H255V312.039H255.046V311.839ZM255.1 311.939V310.823H254.9V311.939H255.1ZM255.1 310.823V275.11H254.9V310.823H255.1ZM376.088 315.187C342.658 315.187 312.398 310.691 290.497 303.425C279.547 299.791 270.692 295.467 264.577 290.67C258.461 285.873 255.1 280.614 255.1 275.11H254.9C254.9 280.702 258.315 286.012 264.454 290.828C270.594 295.644 279.472 299.977 290.434 303.615C312.36 310.889 342.643 315.387 376.088 315.387V315.187Z" fill="black" mask="url(#path-4-inside-1_3747_63738)"/>
				<path d="M497.127 275.11C497.127 280.636 493.752 285.907 487.63 290.71C481.509 295.511 472.649 299.838 461.695 303.472C439.789 310.741 409.522 315.237 376.088 315.237C342.655 315.237 312.388 310.741 290.482 303.472C279.528 299.838 270.668 295.511 264.547 290.71C258.425 285.907 255.05 280.636 255.05 275.11C255.05 269.585 258.425 264.313 264.547 259.511C270.668 254.709 279.528 250.383 290.482 246.749C312.388 239.48 342.655 234.984 376.088 234.984C409.522 234.984 439.789 239.48 461.695 246.749C472.649 250.383 481.509 254.709 487.63 259.511C493.752 264.313 497.127 269.585 497.127 275.11Z" fill="#FFE600" fill-opacity="0.7" stroke="black" stroke-width="0.1"/>
				<path d="M497.127 268.414C497.127 273.94 493.752 279.211 487.63 284.014C481.509 288.815 472.649 293.142 461.695 296.776C439.789 304.045 409.522 308.541 376.088 308.541C342.655 308.541 312.388 304.045 290.482 296.776C279.528 293.142 270.668 288.815 264.547 284.014C258.425 279.211 255.05 273.94 255.05 268.414C255.05 262.889 258.425 257.617 264.547 252.815C270.668 248.013 279.528 243.687 290.482 240.053C312.388 232.784 342.655 228.288 376.088 228.288C409.522 228.288 439.789 232.784 461.695 240.053C472.649 243.687 481.509 248.013 487.63 252.815C493.752 257.617 497.127 262.889 497.127 268.414Z" fill="#FFE600" fill-opacity="0.7" stroke="black" stroke-width="0.1"/>
				<mask id="path-8-inside-2_3747_63738" fill="white">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M376.088 272.878C442.964 272.878 497.177 254.891 497.177 232.702V268.414L497.177 269.53H497.131C495.35 291.203 441.839 308.591 376.088 308.591C310.338 308.591 256.827 291.203 255.046 269.53H255V268.414V232.702C255 254.891 309.213 272.878 376.088 272.878Z"/>
				</mask>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M376.088 272.878C442.964 272.878 497.177 254.891 497.177 232.702V268.414L497.177 269.53H497.131C495.35 291.203 441.839 308.591 376.088 308.591C310.338 308.591 256.827 291.203 255.046 269.53H255V268.414V232.702C255 254.891 309.213 272.878 376.088 272.878Z" fill="#E9A854"/>
				<path d="M497.177 268.414H497.077H497.177ZM497.177 269.53V269.63H497.277V269.53H497.177ZM497.131 269.53V269.43H497.039L497.031 269.522L497.131 269.53ZM255.046 269.53L255.145 269.522L255.138 269.43H255.046V269.53ZM255 269.53H254.9V269.63H255V269.53ZM497.077 232.702C497.077 238.205 493.715 243.464 487.599 248.262C481.484 253.058 472.63 257.383 461.679 261.016C439.779 268.282 409.518 272.778 376.088 272.778V272.978C409.534 272.978 439.817 268.481 461.742 261.206C472.704 257.569 481.583 253.235 487.723 248.419C493.862 243.603 497.277 238.293 497.277 232.702H497.077ZM497.077 232.702V268.414H497.277V232.702H497.077ZM497.077 268.414L497.077 269.53H497.277L497.277 268.414H497.077ZM497.177 269.43H497.131V269.63H497.177V269.43ZM497.031 269.522C496.589 274.899 492.937 280.027 486.653 284.697C480.37 289.366 471.471 293.567 460.567 297.093C438.76 304.145 408.956 308.491 376.088 308.491V308.691C408.971 308.691 438.797 304.343 460.629 297.283C471.544 293.753 480.466 289.544 486.772 284.857C493.077 280.172 496.782 274.998 497.231 269.539L497.031 269.522ZM376.088 308.491C343.221 308.491 313.416 304.145 291.61 297.093C280.706 293.567 271.806 289.366 265.524 284.697C259.24 280.027 255.587 274.899 255.145 269.522L254.946 269.539C255.395 274.998 259.1 280.172 265.404 284.857C271.711 289.544 280.633 293.753 291.548 297.283C313.379 304.343 343.206 308.691 376.088 308.691V308.491ZM255.046 269.43H255V269.63H255.046V269.43ZM255.1 269.53V268.414H254.9V269.53H255.1ZM255.1 268.414V232.702H254.9V268.414H255.1ZM376.088 272.778C342.658 272.778 312.398 268.282 290.497 261.016C279.547 257.383 270.692 253.058 264.577 248.262C258.461 243.464 255.1 238.205 255.1 232.702H254.9C254.9 238.293 258.315 243.603 264.454 248.419C270.594 253.235 279.472 257.569 290.434 261.206C312.36 268.481 342.643 272.978 376.088 272.978V272.778Z" fill="black" mask="url(#path-8-inside-2_3747_63738)"/>
				<path d="M497.127 232.702C497.127 238.227 493.752 243.499 487.63 248.301C481.509 253.103 472.649 257.429 461.695 261.064C439.789 268.332 409.522 272.828 376.088 272.828C342.655 272.828 312.388 268.332 290.482 261.064C279.528 257.429 270.668 253.103 264.547 248.301C258.425 243.499 255.05 238.227 255.05 232.702C255.05 227.176 258.425 221.905 264.547 217.102C270.668 212.301 279.528 207.974 290.482 204.34C312.388 197.071 342.655 192.575 376.088 192.575C409.522 192.575 439.789 197.071 461.695 204.34C472.649 207.974 481.509 212.301 487.63 217.102C493.752 221.905 497.127 227.176 497.127 232.702Z" fill="#FFE600" fill-opacity="0.7" stroke="black" stroke-width="0.1"/>
				<path d="M497.127 224.889C497.127 230.415 493.752 235.686 487.63 240.489C481.509 245.29 472.649 249.617 461.695 253.251C439.789 260.52 409.522 265.016 376.088 265.016C342.655 265.016 312.388 260.52 290.482 253.251C279.528 249.617 270.668 245.29 264.547 240.489C258.425 235.686 255.05 230.415 255.05 224.889C255.05 219.364 258.425 214.092 264.547 209.29C270.668 204.488 279.528 200.162 290.482 196.528C312.388 189.259 342.655 184.763 376.088 184.763C409.522 184.763 439.789 189.259 461.695 196.528C472.649 200.162 481.509 204.488 487.63 209.29C493.752 214.092 497.127 219.364 497.127 224.889Z" fill="#FFE600" fill-opacity="0.7" stroke="black" stroke-width="0.1"/>
				<mask id="path-12-inside-3_3747_63738" fill="white">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M376.088 229.354C442.964 229.354 497.177 211.366 497.177 189.177V224.889L497.177 226.005H497.131C495.35 247.679 441.839 265.066 376.088 265.066C310.338 265.066 256.827 247.679 255.046 226.005H255V224.889V189.177C255 211.366 309.213 229.354 376.088 229.354Z"/>
				</mask>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M376.088 229.354C442.964 229.354 497.177 211.366 497.177 189.177V224.889L497.177 226.005H497.131C495.35 247.679 441.839 265.066 376.088 265.066C310.338 265.066 256.827 247.679 255.046 226.005H255V224.889V189.177C255 211.366 309.213 229.354 376.088 229.354Z" fill="#E9A854"/>
				<path d="M497.177 224.889H497.077H497.177ZM497.177 226.005V226.105H497.277V226.005H497.177ZM497.131 226.005V225.905H497.039L497.031 225.997L497.131 226.005ZM255.046 226.005L255.145 225.997L255.138 225.905H255.046V226.005ZM255 226.005H254.9V226.105H255V226.005ZM497.077 189.177C497.077 194.68 493.715 199.939 487.599 204.737C481.484 209.534 472.63 213.858 461.679 217.491C439.779 224.758 409.518 229.254 376.088 229.254V229.454C409.534 229.454 439.817 224.956 461.742 217.681C472.704 214.044 481.583 209.711 487.723 204.894C493.862 200.078 497.277 194.768 497.277 189.177H497.077ZM497.077 189.177V224.889H497.277V189.177H497.077ZM497.077 224.889L497.077 226.005H497.277L497.277 224.889H497.077ZM497.177 225.905H497.131V226.105H497.177V225.905ZM497.031 225.997C496.589 231.374 492.937 236.502 486.653 241.172C480.37 245.841 471.471 250.042 460.567 253.568C438.76 260.62 408.956 264.966 376.088 264.966V265.166C408.971 265.166 438.797 260.818 460.629 253.758C471.544 250.229 480.466 246.019 486.772 241.332C493.077 236.647 496.782 231.473 497.231 226.014L497.031 225.997ZM376.088 264.966C343.221 264.966 313.416 260.62 291.61 253.568C280.706 250.042 271.806 245.841 265.524 241.172C259.24 236.502 255.587 231.374 255.145 225.997L254.946 226.014C255.395 231.473 259.1 236.647 265.404 241.332C271.711 246.019 280.633 250.229 291.548 253.758C313.379 260.818 343.206 265.166 376.088 265.166V264.966ZM255.046 225.905H255V226.105H255.046V225.905ZM255.1 226.005V224.889H254.9V226.005H255.1ZM255.1 224.889V189.177H254.9V224.889H255.1ZM376.088 229.254C342.658 229.254 312.398 224.758 290.497 217.491C279.547 213.858 270.692 209.534 264.577 204.737C258.461 199.939 255.1 194.68 255.1 189.177H254.9C254.9 194.768 258.315 200.078 264.454 204.894C270.594 209.711 279.472 214.044 290.434 217.681C312.36 224.956 342.643 229.454 376.088 229.454V229.254Z" fill="black" mask="url(#path-12-inside-3_3747_63738)"/>
				<path d="M497.127 189.177C497.127 194.702 493.752 199.974 487.63 204.776C481.509 209.578 472.649 213.904 461.695 217.539C439.789 224.807 409.522 229.304 376.088 229.304C342.655 229.304 312.388 224.807 290.482 217.539C279.528 213.904 270.668 209.578 264.547 204.776C258.425 199.974 255.05 194.702 255.05 189.177C255.05 183.652 258.425 178.38 264.547 173.578C270.668 168.776 279.528 164.449 290.482 160.815C312.388 153.546 342.655 149.05 376.088 149.05C409.522 149.05 439.789 153.546 461.695 160.815C472.649 164.449 481.509 168.776 487.63 173.578C493.752 178.38 497.127 183.652 497.127 189.177Z" fill="#FFE600" stroke="black" stroke-width="0.1"/>
				<path d="M243.145 391C129.006 342.792 111.577 106.311 103.5 2.72547C220.189 -8.13592 289.418 13.8306 375.5 62.1035C374.5 124.603 357.284 346.951 243.145 391Z" fill="#7BA3BB"/>
				<path d="M247 389.5C351 344 372.551 157.392 375.5 62L350.599 78.8602C348.421 257.796 279.217 361.516 247 389.5Z" fill="#5EACDA"/>
				<path d="M233.5 385.711C128.911 325.73 112.981 116.23 103.284 3L73.5 19.8322C87.9069 288.157 172.317 387.779 207.872 399C218.955 395.083 229.575 388.568 233.5 385.711Z" fill="#5EACDA" stroke="black" stroke-width="0.2"/>
				<path d="M208.088 412C90.8438 352.732 82.2875 124.711 73.5 19.8222C200.457 8.82411 256.843 30.2553 350.5 79.1358" stroke="black" stroke-width="0.2"/>
				<path d="M83.5 30C89.7102 128.391 107.651 340.943 207.682 399C321.934 357.264 340 146.959 340 87.5C259.275 44.6506 207.243 22.6527 105 28.5M83.5 30C90.8765 29.3501 98.1078 28.8941 105 28.5M83.5 30L105 28.5" stroke="black" stroke-width="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M74.9868 44.6715C83.6372 157.272 98.9873 357.08 207.48 412.005C331.562 367.371 350.54 142.265 350.54 78.677C256.958 29.7631 199.855 8.49433 73 19.4999C73.6489 27.2565 74.2965 35.6863 74.9868 44.6715ZM83.8461 30.1253C90.0539 128.507 107.987 340.548 207.978 398.6C322.183 356.867 339.743 147.064 339.743 87.6102C259.05 44.7646 207.43 22.7136 105.228 28.5604C98.3389 28.9545 91.2197 29.4754 83.8461 30.1253Z" fill="#94D0F4"/>
				<path d="M207.48 412.005L207.435 412.094L207.473 412.114L207.514 412.099L207.48 412.005ZM74.9868 44.6715L74.8871 44.6791L74.9868 44.6715ZM350.54 78.677H350.64V78.6164L350.586 78.5884L350.54 78.677ZM73 19.4999L72.9914 19.4003L72.892 19.4089L72.9003 19.5083L73 19.4999ZM207.978 398.6L207.928 398.686L207.969 398.71L208.013 398.693L207.978 398.6ZM83.8461 30.1253L83.8374 30.0257L83.7402 30.0342L83.7463 30.1316L83.8461 30.1253ZM339.743 87.6102H339.843V87.55L339.79 87.5218L339.743 87.6102ZM105.228 28.5604L105.223 28.4606L105.228 28.5604ZM207.525 411.916C153.32 384.474 122.369 320.829 103.889 249.941C85.4115 179.058 79.4118 100.965 75.0865 44.6638L74.8871 44.6791C79.2122 100.978 85.2127 179.089 103.696 249.992C122.177 320.889 153.148 384.611 207.435 412.094L207.525 411.916ZM350.44 78.677C350.44 110.465 345.696 182.628 325.445 252.421C305.191 322.221 269.439 389.612 207.446 411.911L207.514 412.099C269.604 389.765 305.381 322.286 325.637 252.477C345.895 182.661 350.64 110.477 350.64 78.677H350.44ZM73.0086 19.5996C136.429 14.0974 182.407 16.6634 224.224 26.7159C266.042 36.7686 303.704 54.3094 350.493 78.7656L350.586 78.5884C303.794 54.1308 266.114 36.5802 224.271 26.5214C182.427 16.4624 136.426 13.8969 72.9914 19.4003L73.0086 19.5996ZM75.0865 44.6638C74.3962 35.6788 73.7486 27.2486 73.0997 19.4916L72.9003 19.5083C73.5492 27.2645 74.1968 35.6939 74.8871 44.6791L75.0865 44.6638ZM208.029 398.513C183.052 384.013 163.194 359.893 147.36 330.323C131.526 300.753 119.719 265.74 110.841 229.463C93.0847 156.907 87.0498 79.3093 83.9459 30.119L83.7463 30.1316C86.8503 79.3232 92.8859 156.937 110.646 229.51C119.527 265.797 131.339 300.828 147.184 330.417C163.028 360.006 182.909 384.161 207.928 398.686L208.029 398.513ZM339.643 87.6102C339.643 117.331 335.253 184.635 316.591 249.723C297.927 314.818 264.998 377.657 207.944 398.506L208.013 398.693C265.164 377.81 298.117 314.881 316.784 249.778C335.452 184.668 339.843 117.343 339.843 87.6102H339.643ZM105.234 28.6602C156.326 25.7374 194.77 29.7879 230.524 39.9219C266.28 50.0563 299.35 66.276 339.696 87.6985L339.79 87.5218C299.443 66.0988 266.357 49.8702 230.579 39.7295C194.799 29.5883 156.332 25.5367 105.223 28.4606L105.234 28.6602ZM83.8549 30.2249C91.2275 29.5751 98.3457 29.0543 105.234 28.6602L105.223 28.4606C98.3321 28.8548 91.2118 29.3757 83.8374 30.0257L83.8549 30.2249ZM83.8534 30.225L105.236 28.6601L105.221 28.4607L83.8388 30.0255L83.8534 30.225Z" fill="black"/>
				<path d="M350.5 79L375.5 62" stroke="black" stroke-width="0.2"/>
				<defs>
				<linearGradient id="paint0_linear_3747_63738" x1="384.444" y1="216.086" x2="62.2192" y2="397.663" gradientUnits="userSpaceOnUse">
				<stop stop-color="#9B7DFF"/>
				<stop offset="1" stop-color="#764DFF"/>
				</linearGradient>
				</defs>
				</svg>
				</div>
			</div>


		</div>
	</div>
</section>