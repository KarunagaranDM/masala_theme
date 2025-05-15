<div class="container my-5">
   <div class="brand-banner-sec w-100" style="overflow: hidden">
    <div class="d-flex gap-4 h-100">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="brand-banner-root h-100">
                <div class="brand_banner_img h-100">
                    <img class="img-fluid h-100" src="{{ asset('img/masala3.jpg') }}"  alt="banner" title="banner"/>
                </div>
                <div class="brand_banner_content2">
                    <span class="brand_banner_title">Aachi Masala</span>
                    <span class="brand_banner_desc">Healthy and tasty</span>
                    <a class="brand_banner_link">Shop Now <i class="ph ph-arrow-right"></i></a>
                </div>
                <!-- Border elements -->
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="d-flex gap-4 flex-column">
             <div class="brand-banner-root h-50">
                <div class="brand_banner_img h-100">
                    <img class="img-fluid h-100" src="{{ asset('img/masala3.jpg') }}"  alt="banner" title="banner"/>
                </div>
                <div class="brand_banner_content">
                    <span class="brand_banner_title">Aachi Masala</span>
                    <span class="brand_banner_desc">Healthy and tasty</span>
                    <a class="brand_banner_link">Shop Now <i class="ph ph-arrow-right"></i></a>
                </div>
                 <!-- Border elements -->
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>

            <div class="brand-banner-root h-50">
                <div class="brand_banner_img h-100">
                    <img class="img-fluid h-100" src="{{ asset('img/masala3.jpg') }}"  alt="banner" title="banner"/>
                </div>
                <div class="brand_banner_content">
                    <span class="brand_banner_title">Aachi Masala</span>
                    <span class="brand_banner_desc">Healthy and tasty</span>
                    <a class="brand_banner_link">Shop Now <i class="ph ph-arrow-right"></i></a>
                </div>
                 <!-- Border elements -->
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
             <div class="brand-banner-root h-100">
                <div class="brand_banner_img h-100">
                    <img class="img-fluid h-100" src="{{ asset('img/masala3.jpg') }}"  alt="banner" title="banner"/>
                </div>
                <div class="brand_banner_content2">
                    <span class="brand_banner_title">Aachi Masala</span>
                    <span class="brand_banner_desc">Healthy and tasty</span>
                    <a class="brand_banner_link">Shop Now <i class="ph ph-arrow-right"></i></a>
                </div>
                 <!-- Border elements -->
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>
        </div>
    </div>
   </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
    .brand_banner_content {
    display: flex;
    position: absolute;
    top: 30%;
    z-index: 999;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    width: 100%;
}

    .brand_banner_content2 {
    display: flex;
    position: absolute;
    top: 50%;
    z-index: 999;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    width: 100%;
}

.brand-banner-root.h-50 {
    position: relative;
    overflow: hidden;
}

.brand-banner-root.h-100 {
    position: relative;
    overflow: hidden;
}

span.brand_banner_desc {
    font-family: "Dancing Script", cursive;
    font-size: 30px;
}

span.brand_banner_title {
    font-size: 17px;
    font-weight: 600;
}

a.brand_banner_link {
    text-transform: uppercase;
    background: {{ theme_color() }};
    color: #fff;
    padding: 5px 8px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
}

.brand-banner-root {
    position: relative;
    overflow: hidden;
}

.brand_banner_img {
    height: 100%;
    width: 100%;
    overflow: hidden;
    position: relative;
}

.brand_banner_img img {
    transition: transform 0.5s ease-in-out;
    height: 100%;
    width: 100%;
    object-fit: cover;
}

/* Zoom effect on hover */
.brand-banner-root:hover .brand_banner_img img {
    transform: scale(1.1);
}

/* Inner animated border using pseudo-elements */
.brand-banner-root::before,
.brand-banner-root::after {
    content: '';
    position: absolute;
    background: {{ theme_color() }};
    z-index: 1;
    transition: transform 0.5s ease-in-out;
}

/* Top border */
.brand-banner-root::before {
    height: 2px;
    width: calc(100% - 30px);
    top: 15px;
    left: 15px;
    transform: scaleX(0);
    transform-origin: left;
}

/* Right border */
.brand-banner-root::after {
    width: 2px;
    height: calc(100% - 30px);
    top: 15px;
    right: 15px;
    transform: scaleY(0);
    transform-origin: top;
}

/* Extra spans for bottom and left borders */
.brand-banner-root .border-bottom,
.brand-banner-root .border-left {
    content: '';
    position: absolute;
    background: {{ theme_color() }};
    z-index: 1;
    transition: transform 0.5s ease-in-out;
}

/* Bottom border */
.brand-banner-root .border-bottom {
    height: 2px;
    width: calc(100% - 30px);
    bottom: 15px;
    left: 15px;
    transform: scaleX(0);
    transform-origin: right;
}

/* Left border */
.brand-banner-root .border-left {
    width: 2px;
    height: calc(100% - 30px);
    bottom: 15px;
    left: 15px;
    transform: scaleY(0);
    transform-origin: bottom;
}

/* Hover animations trigger */
.brand-banner-root:hover::before {
    transform: scaleX(1);
}
.brand-banner-root:hover::after {
    transform: scaleY(1);
}
.brand-banner-root:hover .border-bottom {
    transform: scaleX(1);
}
.brand-banner-root:hover .border-left {
    transform: scaleY(1);
}

</style>