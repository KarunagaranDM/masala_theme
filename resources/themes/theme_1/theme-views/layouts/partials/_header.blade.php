<header>
    <div class="header-container">
        {{-- Speacial header sec --}}
        <div class="special-head-root d-flex justify-content-center align-items-center position-relative p-2 text-dark text-uppercase" style="background: url({{ asset('img/banner_image.webp') }});">
            <span class="specia-head-desc" style="font-size: 15px;">$470.00 away from free shipping</span>
            <span class="remove-special-head position-absolute" style="z-index: 999;right: 15px;cursor: pointer;">x</span>
        </div>

        {{-- Info header sec --}}
        <div class="info-header-root d-flex align-items-center justify-content-around py-2" style="background-color: #f8f8f8;gap:15em;">
            <div class="left-info d-flex align-items-center gap-4">
                <div class="social-ic-sec d-flex align-items-center gap-3">
                    <a class="sc-ic text-dark" style="text-decoration: none;"><i class="ph-fill ph-facebook-logo"></i></a>
                    <a class="sc-ic text-dark" style="text-decoration: none;"><i class="ph-fill ph-google-logo"></i></a>
                    <a class="sc-ic text-dark" style="text-decoration: none;"><i class="ph-fill ph-threads-logo"></i></a>
                    <a class="sc-ic text-dark" style="text-decoration: none;"><i class="ph-fill ph-instagram-logo"></i></a>
                    <a class="sc-ic text-dark" style="text-decoration: none;"><i class="ph-fill ph-youtube-logo"></i></a>
                </div>
                <span class="text-dark fw-medium">|</span>
                <div class="email-ic d-flex gap-2 align-items-center"><i class="ph-fill ph-envelope"></i> <span style="font-size: 14px;">gatwy@je.com</span></div>
            </div>
            <div class="right-info d-flex align-items-center gap-4">
                <div class="wish-menu d-flex gap-2 align-items-center" style="font-size:14px;">
                    <span><i class="ph-fill ph-heart"></i></span>
                    <a href="#" class="text-dark" style="text-decoration: none">Wishlist</a>
                </div>
                <div class="wish-menu d-flex gap-2 align-items-center" style="font-size:14px;">
                    <span><i class="ph ph-globe"></i></span>
                    <a href="#" class="text-dark" style="text-decoration: none">Language <i class="ph ph-caret-down"></i></a>
                </div>
                <div class="wish-menu d-flex gap-2 align-items-center" style="font-size:14px;">
                    <span><i class="ph ph-currency-inr"></i></span>
                    <a href="#" class="text-dark" style="text-decoration: none">Currency <i class="ph ph-caret-down"></i></a>
                </div>
                <div class="wish-menu d-flex gap-2 align-items-center" style="font-size:14px;">
                    <span><i class="ph ph-user"></i></span>
                    <a href="#" class="text-dark" style="text-decoration: none">My Account <i class="ph ph-caret-down"></i></a>
                </div>
            </div>
        </div>

        {{-- Secondary header sec --}}
        <div class="secondary-jeader-root d-flex align-items-center justify-content-around py-1">
            <div class="logo-sec">
               <img class="brand-logo" style="width:173px;" title="Brand" src="{{ asset('img/gbMart-logo.webp') }}" />
            </div>
            <div class="search-bar d-flex align-items-center">
                <div class="border d-flex">
                <div style="border: none" class="dropdown">
                  <a style="background: #fff,color:#ddd;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  All Category
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <input class="form-control" type="search" style="border: none"/>
                </div>
                <a class="btn" style="background-color: {{ theme_color() }}; color: #fff;">
                    <i class="ph ph-magnifying-glass"></i>
                </a>
            </div>

            <div class="cart-menu-sec d-flex gap-4 align-items-center">
                <div class="cart-menu-root d-flex gap-1 align-items-center">
                    <div class="left-sec" style="font-size: 40px;">
                        <a class="ic-left" style="color: {{ theme_color() }};text-decoration:none;"><i class="ph ph-whatsapp-logo"></i></a>
                    </div>
                    <div class="right-sec d-flex flex-column">
                        <span class="content-left-top text-uppercase" style="font-size: 15px;font-weight:500;">Call Us Now</span>
                        <span class="content-left-bottom fw-light" style="font-size: 13px;">+91 634638923</span>
                    </div>
                </div>

                <div class="cart-menu-root d-flex gap-1 align-items-center">
                    <div class="left-sec" style="font-size: 40px;">
                        <a class="ic-left" style="color: {{ theme_color() }};text-decoration:none;"><i class="ph ph-shopping-cart-simple"></i></a>
                    </div>
                    <div class="right-sec d-flex flex-column">
                        <span class="content-left-top text-uppercase" style="font-size: 15px;font-weight:500;">SHOPPING CART</span>
                        <span class="content-left-bottom fw-light" style="font-size: 13px;">Item-1</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main menu header sec --}}
        <div class="main-header-rooter d-flex gap-5" style="padding: 5px 77px;background-color:{{ theme_color() }}">
            <div class="main-category-sec">
                 <div style="border: none" class="dropdown">
                  <a class="btn btn-dark dropdown-toggle text-uppercase" style="font-size: 14px;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Shop All Categories
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-menu d-flex gap-5 align-items-center">
                <div class="menu-root d-flex gap-2 align-items-center">
                    <a class="menu-link text-white text-capitalize" style="text-decoration: none;cursor: pointer;font-weight:500;">Home</a>
                </div>
                <div class="menu-root d-flex gap-2 align-items-center">
                    <a class="menu-link text-white text-capitalize" style="text-decoration: none;cursor: pointer;font-weight:500;">Shop</a>
                    <span class="text-white"><i class="ph ph-caret-down"></i></span>
                </div>
                <div class="menu-root d-flex gap-2 align-items-center">
                    <a class="menu-link text-white text-capitalize" style="text-decoration: none;font-weight:500;">About</a>
                     <span class="text-white"><i class="ph ph-caret-down"></i></span>
                </div>
                <div class="menu-root d-flex gap-2 align-items-center">
                    <a class="menu-link text-white text-capitalize" style="text-decoration: none;cursor: pointer;font-weight:500;">Service</a>
                     <span class="text-white"><i class="ph ph-caret-down"></i></span>
                </div>
                <div class="menu-root d-flex gap-2 align-items-center">
                    <a class="menu-link text-white text-capitalize" style="text-decoration: none;cursor: pointer;font-weight:500;">FAQ</a>
                </div>
            </div>
        </div>
    </div>
</header>