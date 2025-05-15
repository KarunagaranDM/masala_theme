<div class="trend-product-sec" style="margin-top: 150px;">
    <div class="trend-pro-head d-flex gap-1 flex-column align-items-center justify-content-center text-center">
        <span class="trend-pro-title" style="font-size: 18px;">Exclusive Products</span>
        <span class="trend-pro-title2" style="font-size: 32px; font-weight: 500;">Trending Products</span>
        <div class="title-line position-relative mt-2">
            <span class="line"></span>
            <div class="dots">
                <span></span><span></span><span></span><span></span>
            </div>
        </div>
    </div>

    {{-- Trend products tab section --}}
    <div class="trend-product-tab_sec position-relative ">
        <div class="trend-tab d-flex justify-content-center align-items-center gap-3 my-4">
            <a href="#" class="trend-tab-link text-dark active" data-tab="new" style="text-decoration: none">New Product</a>
            <a href="#" class="trend-tab-link text-dark" data-tab="special" style="text-decoration: none">Special Product</a>
            <a href="#" class="trend-tab-link text-dark" data-tab="best" style="text-decoration: none">Best Sellers</a>
        </div>

        {{-- Tab contents --}}
        <div class="tab-content container" id="tab-new">
            <!-- Swiper Container -->
<div class="swiper trendSwiper ">
    <!-- Slides -->
    <div class="swiper-wrapper" style="padding: 48px 0px;">
        @for ($i = 1; $i <= 15; $i++)
            <div class="swiper-slide">
                <div class="product-card text-center p-2 border">
                    <img src="{{ asset('img/masala3.jpg') }}" alt="Product" style="width:100%; height:150px; object-fit:cover;">
                    <div class="product-options-sec">
                        <a class="op-ic"><i class="ph ph-heart"></i></a>
                        <a class="op-ic"><i class="ph ph-magnifying-glass"></i></a>
                        <a class="op-ic"><i class="ph ph-arrows-clockwise"></i></a>
                    </div>
                    <span class="mt-2" style="font-size: 15px;font-weight:600;">Masala</span>
                    <div class="d-flex gap-2 align-items-center justify-content-center py-1">
                        <span class="" style="font-size: 14px;color:{{theme_color()}};font-weight:500;">$890.00</span>
                         <span class="text-muted" style="font-size: 12px;text-decoration:line-through;">$1090.00</span>
                    </div>
                    <div class="star-rating text-gold fs-12">
                @for ($index = 1; $index <= 5; $index++)
                    @if ($index <= 5)
                      <i class="ph ph-star"></i>
                    @elseif (5 != 0 && $index <= 5 + 1.1 && 5 > (5))
                        <i class="ph ph-star-half"></i>
                    @else
                        <i class="ph ph-star"></i>
                    @endif
                @endfor
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination mt-2"></div>

    <!-- Navigation Buttons (must be after swiper-wrapper!) -->
    <div class="swiper-nav position-absolute d-flex">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

        </div>

        </div>
        <div class="tab-content container d-none" id="tab-special">
                       <!-- Swiper Container -->
<div class="swiper trendSwiper ">
    <!-- Slides -->
    <div class="swiper-wrapper" style="padding: 48px 0px;">
        @for ($i = 1; $i <= 7; $i++)
            <div class="swiper-slide">
                <div class="product-card text-center p-2 border">
                    <img src="{{ asset('img/masala3.jpg') }}" alt="Product" style="width:100%; height:150px; object-fit:cover;">
                    <div class="product-options-sec">
                        <a class="op-ic"><i class="ph ph-heart"></i></a>
                        <a class="op-ic"><i class="ph ph-magnifying-glass"></i></a>
                        <a class="op-ic"><i class="ph ph-arrows-clockwise"></i></a>
                    </div>
                    <span class="mt-2" style="font-size: 15px;font-weight:600;">Masala</span>
                    <div class="d-flex gap-2 align-items-center justify-content-center py-1">
                        <span class="" style="font-size: 14px;color:{{theme_color()}};font-weight:500;">$890.00</span>
                         <span class="text-muted" style="font-size: 12px;text-decoration:line-through;">$1090.00</span>
                    </div>
                    <div class="star-rating text-gold fs-12">
                @for ($index = 1; $index <= 5; $index++)
                    @if ($index <= 5)
                      <i class="ph ph-star"></i>
                    @elseif (5 != 0 && $index <= 5 + 1.1 && 5 > (5))
                        <i class="ph ph-star-half"></i>
                    @else
                        <i class="ph ph-star"></i>
                    @endif
                @endfor
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination mt-2"></div>

    <!-- Navigation Buttons (must be after swiper-wrapper!) -->
    <div class="swiper-nav position-absolute d-flex">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

        </div>
        <div class="tab-content container d-none" id="tab-best">
                       <!-- Swiper Container -->
<div class="swiper trendSwiper ">
    <!-- Slides -->
    <div class="swiper-wrapper" style="padding: 48px 0px;">
        @for ($i = 1; $i <= 12; $i++)
            <div class="swiper-slide">
                <div class="product-card text-center p-2 border">
                    <img src="{{ asset('img/masala3.jpg') }}" alt="Product" style="width:100%; height:150px; object-fit:cover;">
                    <div class="product-options-sec">
                        <a class="op-ic"><i class="ph ph-heart"></i></a>
                        <a class="op-ic"><i class="ph ph-magnifying-glass"></i></a>
                        <a class="op-ic"><i class="ph ph-arrows-clockwise"></i></a>
                    </div>
                    <span class="mt-2" style="font-size: 15px;font-weight:600;">Masala</span>
                    <div class="d-flex gap-2 align-items-center justify-content-center py-1">
                        <span class="" style="font-size: 14px;color:{{theme_color()}};font-weight:500;">$890.00</span>
                         <span class="text-muted" style="font-size: 12px;text-decoration:line-through;">$1090.00</span>
                    </div>
                    <div class="star-rating text-gold fs-12">
                @for ($index = 1; $index <= 5; $index++)
                    @if ($index <= 5)
                      <i class="ph ph-star"></i>
                    @elseif (5 != 0 && $index <= 5 + 1.1 && 5 > (5))
                        <i class="ph ph-star-half"></i>
                    @else
                        <i class="ph ph-star"></i>
                    @endif
                @endfor
                <span class="border-bottom"></span>
                <span class="border-left"></span>
            </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination mt-2"></div>

    <!-- Navigation Buttons (must be after swiper-wrapper!) -->
    <div class="swiper-nav position-absolute d-flex">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

        </div>
    </div>
</div>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabLinks = document.querySelectorAll(".trend-tab-link");
    const tabContents = document.querySelectorAll(".tab-content");

    tabLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            // Remove active class from all tabs
            tabLinks.forEach(link => link.classList.remove("active"));

            // Add active class to clicked tab
            this.classList.add("active");

            // Hide all content
            tabContents.forEach(content => content.classList.add("d-none"));

            // Show the clicked tab's content
            const tabId = this.getAttribute("data-tab");
            document.getElementById("tab-" + tabId).classList.remove("d-none");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".trendSwiper", {
        slidesPerView: 5,
        grid: {
            rows: 2,
            fill: "row",
        },
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

</script>

<style>
.trend-tab-link {
    padding: 10px 20px;
    border-radius: 5px;
    transition: 0.3s ease;
}

.trend-tab-link.active {
    background-color: {{ theme_color() }};
    color: white !important;
}

.tab-content {
    text-align: center;
    font-size: 18px;
}

.d-none {
    display: none !important;
}

/* Keep your existing styles */
.title-line {
    position: relative;
    width: 180px;
    height: 8px;
}

.title-line .line {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #ff7a00;
    transform: translateY(-50%);
}

.title-line .dots {
    position: absolute;
    top: 50%;
    left: 50%;
    display: flex;
    gap: 5px;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.title-line .dots span {
    width: 8px;
    height: 8px;
    background-color: #ff7a00;
    border-radius: 50%;
}

.trendSwiper {
    padding: 10px;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: start;
}

.product-card {
    width: 100%;
    background: #fff;
    cursor: pointer;
    /* border-radius: 8px; */
}

.swiper-nav {
    top: 25px;
    right: 5%;
    position: absolute;
    z-index: 10;
}

.swiper-button-prev,
.swiper-button-next {
    width: 30px;
    height: 30px;
    background-color: #ff7a00;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 2px;
    cursor: pointer;
}

.swiper-button-prev::after,
.swiper-button-next::after {
    font-size: 15px;
    font-weight: bold;
}

.product-options-sec {
    opacity: 0;
    transform: translateX(20px); /* hidden to the right */
    transition: all 0.3s ease-in-out;
    align-items: center;
    flex-direction: column;
    position: absolute;
    top: 15px;
    right: 15px;
    gap: 0.5em;
    display: flex;
    pointer-events: none; /* optional: prevent hover when hidden */
}

a.op-ic {
    text-decoration: none;
    background: {{ theme_color() }};
    color: #fff;
    font-weight: 700;
    padding: 2px 5px;
    cursor: pointer;
}

.product-card.text-center.p-2.border:hover .product-options-sec {
    opacity: 1;
     flex-direction: column;
     display: flex;
    transform: translateX(0); /* slide into view */
    pointer-events: auto;
}

.product-card {
    position: relative;
    overflow: hidden;
    z-index: 1;
    transition: border-color 0.3s ease-in-out;
}

/* Initial invisible border lines */
.product-card::before,
.product-card::after {
    content: "";
    position: absolute;
    background: {{ theme_color() }};
    transition: transform 0.4s ease;
    z-index: -1;
}

/* Horizontal line (top) */
.product-card::before {
    height: 2px;
    width: 100%;
    top: 0;
    left: 0;
    transform: scaleX(0);
    transform-origin: left;
}

/* Vertical line (right) */
.product-card::after {
    width: 2px;
    height: 100%;
    top: 0;
    right: 0;
    transform: scaleY(0);
    transform-origin: top;
}

.product-card:hover::before {
    transform: scaleX(1); /* top border appears */
}

.product-card:hover::after {
    transform: scaleY(1); /* right border appears */
}

/* Optional: bottom and left sides for full animated border */
.product-card .border-bottom,
.product-card .border-left {
    content: "";
    position: absolute;
    background: {{ theme_color() }};
    transition: transform 0.4s ease;
    z-index: -1;
}

/* Bottom border */
.product-card .border-bottom {
    height: 2px;
    width: 100%;
    bottom: 0;
    left: 0;
    transform: scaleX(0);
    transform-origin: right;
}

/* Left border */
.product-card .border-left {
    width: 2px;
    height: 100%;
    bottom: 0;
    left: 0;
    transform: scaleY(0);
    transform-origin: bottom;
}

.product-card:hover .border-bottom {
    transform: scaleX(1);
}

.product-card:hover .border-left {
    transform: scaleY(1);
}


</style>
