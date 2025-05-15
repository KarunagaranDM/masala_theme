
<div class="container my-5">
<div class="flash-sale-card">
    <div class="flash-tag">Flash Sale</div>

    <div class="timer-section">
        <div class="time-tab">
            <span class="time-number" id="hours">00</span>
            <span class="time-label">Hrs</span>
        </div>
        <div class="colon">:</div>
        <div class="time-tab">
            <span class="time-number" id="minutes">00</span>
            <span class="time-label">Min</span>
        </div>
        <div class="colon">:</div>
        <div class="time-tab">
            <span class="time-number" id="seconds">00</span>
            <span class="time-label">Sec</span>
        </div>
    </div>

    <div class="product-details">
        <div style="width: 90px;height:90px;">
        <img class="card img-fluid" src="{{ asset('img/cate1.png') }}" alt="Product" class="product-image">
        </div>
        <div class="product-info">
           <span class="mt-2 desc-flash" >Masala</span>
           <span class="c-flash text-capitalize" style="font-size: 14px;font-weight:600;">Add an extra dose of style with this raw look henley t-shirt from the house of Tinted. </span>
           <div class="d-flex gap-2 align-items-center py-1">
                <span class="" style="font-size: 14px;color:#e53935;font-weight:700;">$890.00</span>
                <span class="" style="font-size: 12px;text-decoration:line-through;color:rgb(58, 57, 57)">$1090.00</span>
            </div>
        </div>
    </div>
    <div class="arrow-sec-flash">
        <span class="arrow-flash"><i class="ph ph-caret-left"></i></span>
        <span class="arrow-flash"><i class="ph ph-caret-right"></i></span>
    </div>
    <div class="flash_link-side">
        <a class="flash_link">Buy Now <i class="ph ph-arrow-right"></i></a>
    </div>
     <div class="border-bottom"></div>
    <div class="border-left"></div>
</div>
</div>

<script>
// Countdown Logic
function startCountdown(duration) {
    let timer = duration;
    setInterval(() => {
        const hours = Math.floor(timer / 3600);
        const minutes = Math.floor((timer % 3600) / 60);
        const seconds = timer % 60;

        document.getElementById("hours").innerText = String(hours).padStart(2, '0');
        document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
        document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');

        if (timer > 0) timer--;
    }, 1000);
}

// Start countdown from 2 hours
startCountdown(2 * 60 * 60);
</script>

<style>
.flash-sale-card {
    display: flex;
    align-items: center;
    background: linear-gradient(45deg, #c16d13, #00000030);
    border: 1px solid #e0e0e0;
    border-bottom-left-radius: 12px;
    border-top-right-radius: 12px;
    padding: 20px;
    position: relative;
    overflow: hidden;
    width: 100%;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
    gap: 2rem;
}

/* Flash Tag */
.flash-tag {
    position: absolute;
    top: 0;
    left: 0;
    background-color: #e53935;
    color: white;
    font-weight: bold;
    padding: 6px 14px;
    font-size: 14px;
    border-bottom-right-radius: 15px;
    clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
}

/* Timer */
.timer-section {
    display: flex;
    align-items: center;
    gap: 6px;
    margin: 35px 0px 0px 0px;
}

.time-tab {
    background-color: #000;
    color: #fff;
    padding: 10px 12px;
    border-radius: 5px;
    text-align: center;
    min-width: 50px;
}

.time-number {
    display: block;
    font-size: 20px;
    font-weight: bold;
}

.time-label {
    font-size: 10px;
    opacity: 0.7;
}

.colon {
    font-size: 20px;
    font-weight: bold;
}

/* Product Info */
.product-details {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-grow: 1;
}

.product-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
}

.product-info h4 {
    margin: 0;
    font-size: 18px;
}

.product-info p {
    margin: 0;
    color: #e53935;
    font-weight: bold;
}

/* Hurry Image */
.alert-side {
    text-align: center;
}

.hurry-img {
    width: 60px;
    height: 60px;
    margin-bottom: 5px;
}

.alert-text {
    font-size: 12px;
    font-weight: 600;
    color: #ff5722;
}

span.desc-flash {
    display: flex;
    text-transform: capitalize;
    font-family: "Dancing Script", cursive;
    font-weight: 700;
    font-size: 26px;
    color: black;
}

.flash_link-side {
    position: absolute;
    bottom: 10px;
    right: 10px;
}

a.flash_link {
    text-decoration: none;
    background: {{ theme_color() }};
    color: #fff;
    padding: 4px 8px;
    display: flex;
    align-items: center;
    gap: 0.3em;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
}

.arrow-sec-flash {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    align-items: center;
    gap: 0.4em;
}

span.arrow-flash {
    background: {{ theme_color() }};
    color: #fff;
    font-weight: 600;
    font-size: 18px;
    padding: 2px 6px;
   cursor: pointer;
}

.flash-sale-card {
    position: relative;
    overflow: hidden;
}

.flash-sale-card img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: transform 0.5s ease-in-out;
}

/* Zoom on hover */
.flash-sale-card:hover img {
    transform: scale(1.1);
}

/* Top & Right borders with pseudo-elements */
.flash-sale-card::before,
.flash-sale-card::after {
    content: '';
    position: absolute;
    background: {{ theme_color() }};
    z-index: 1;
    transition: transform 0.5s ease-in-out;
}

/* Top border */
.flash-sale-card::before {
    height: 1px;
    width: calc(100% - 30px);
    top: 5px;
    left: 5px;
    transform: scaleX(0);
    transform-origin: left;
}

/* Right border */
.flash-sale-card::after {
    width: 1px;
    height: calc(100% - 30px);
    top: 5px;
    right: 5px;
    transform: scaleY(0);
    transform-origin: top;
}

/* Bottom & Left borders via spans */
.flash-sale-card .border-bottom,
.flash-sale-card .border-left {
    position: absolute;
    background: {{ theme_color() }};
    z-index: 1;
    transition: transform 0.5s ease-in-out;
}

/* Bottom border */
.flash-sale-card .border-bottom {
    height: 1px;
    width: calc(100% - 30px);
    bottom: 5px;
    left: 5px;
    transform: scaleX(0);
    transform-origin: right;
}

/* Left border */
.flash-sale-card .border-left {
    width: 1px;
    height: calc(100% - 30px);
    bottom: 5px;
    left: 5px;
    transform: scaleY(0);
    transform-origin: bottom;
}

/* Hover triggers all borders */
.flash-sale-card:hover::before {
    transform: scaleX(1);
}
.flash-sale-card:hover::after {
    transform: scaleY(1);
}
.flash-sale-card:hover .border-bottom {
    transform: scaleX(1);
}
.flash-sale-card:hover .border-left {
    transform: scaleY(1);
}

</style>


