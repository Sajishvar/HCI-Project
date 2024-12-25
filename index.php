<?php
$pageTitle = "Home Page";
ob_start();
?>

<!-- Slider -->
<div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
        <div class="swiper-wrapper">
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/Slideshow_Electronics1.jpg" src="images/slider/Slideshow_Electronics1.jpg" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                            <h1 class="fade-item fade-item-2">Savings for<br> dads and grads.</h1>
                            <a href="productList.php" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/Slideshow_Electronics2.jpg" src="images/slider/Slideshow_Electronics2.jpg" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                            <h1 class="fade-item fade-item-2">Modern design</h1>
                            <a href="productList.php" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/Slideshow_Electronics3.jpg" src="images/slider/Slideshow_Electronics3.jpg" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                            <h1 class="fade-item fade-item-2">Fast charging</h1>
                            <a href="productList.php" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-pagination sw-absolute-2">
        <div class="container">
            <div class="sw-dots sw-pagination-slider justify-content-center"></div>
        </div>
    </div>
</div>
<!-- /Slider -->

<!-- Flash Sales -->
<section class="flat-spacing-11 pb-0">
    <div class="container">
        <div class="position-relative">
            <div class="flat-title flex-row justify-content-between px-0">
                <span class="title wow fadeInUp" data-wow-delay="0s">Flash Sales - Limited Time Offers!</span>
                <div id="flash-sale-timer" class="sale-timer">
                    <span class="timer-label">Hurry! Sale ends in:</span>
                    <span id="timer" class="timer-countdown">00:00:00</span>
                </div>
            </div>
            <div class="sw-pagination-wrapper">
                <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                    <div class="swiper-wrapper">
                        <!-- Product 1 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v2 type-small hover-img">
                                <a href="product-1.html" class="collection-inner">
                                    <div class="collection-image img-style radius-10 position-relative">
                                        <img class="lazyload" data-src="images/sales/graphic-card.jpg" src="images/sales/graphic-card.jpg" alt="Graphic Card">
                                        <span class="offer-tag position-absolute bg-danger text-white rounded">20% OFF</span>
                                    </div>
                                    <div class="collection-content">
                                        <div class="top">
                                            <h5 class="heading fw-5">NVIDIA RTX 3080</h5>
                                            <p class="subheading"><del>$699.99</del> <strong>$559.99</strong></p>
                                        </div>
                                        <div class="bottom">
                                            <button class="tf-btn collection-title hover-icon btn-light rounded-full">
                                                <span>Shop now</span><i class="icon icon-arrow1-top-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v2 type-small hover-img">
                                <a href="product-2.html" class="collection-inner">
                                    <div class="collection-image img-style radius-10 position-relative">
                                        <img class="lazyload" data-src="images/sales/ssd.jpg" src="images/sales/ssd.jpg" alt="SSD">
                                        <span class="offer-tag position-absolute bg-danger text-white rounded">15% OFF</span>
                                    </div>
                                    <div class="collection-content">
                                        <div class="top">
                                            <h5 class="heading fw-5">Samsung 970 EVO SSD</h5>
                                            <p class="subheading"><del>$129.99</del> <strong>$110.49</strong></p>
                                        </div>
                                        <div class="bottom">
                                            <button class="tf-btn collection-title hover-icon btn-light rounded-full">
                                                <span>Shop now</span><i class="icon icon-arrow1-top-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v2 type-small hover-img">
                                <a href="product-3.html" class="collection-inner">
                                    <div class="collection-image img-style radius-10 position-relative">
                                        <img class="lazyload" data-src="images/sales/cpu.jpg" src="images/sales/cpu.jpg" alt="CPU">
                                        <span class="offer-tag position-absolute bg-danger text-white rounded">10% OFF</span>
                                    </div>
                                    <div class="collection-content">
                                        <div class="top">
                                            <h5 class="heading fw-5">Intel Core i7-12700K</h5>
                                            <p class="subheading"><del>$399.99</del> <strong>$359.99</strong></p>
                                        </div>
                                        <div class="bottom">
                                            <button class="tf-btn collection-title hover-icon btn-light rounded-full">
                                                <span>Shop now</span><i class="icon icon-arrow1-top-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v2 type-small hover-img">
                                <a href="product-4.html" class="collection-inner">
                                    <div class="collection-image img-style radius-10 position-relative">
                                        <img class="lazyload" data-src="images/sales/motherboard.jpg" src="images/sales/motherboard.jpg" alt="Motherboard">
                                        <span class="offer-tag position-absolute bg-danger text-white rounded">25% OFF</span>
                                    </div>
                                    <div class="collection-content">
                                        <div class="top">
                                            <h5 class="heading fw-5">ASUS ROG STRIX B550-F</h5>
                                            <p class="subheading"><del>$199.99</del> <strong>$149.99</strong></p>
                                        </div>
                                        <div class="bottom">
                                            <button class="tf-btn collection-title hover-icon btn-light rounded-full">
                                                <span>Shop now</span><i class="icon icon-arrow1-top-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-sw-navigation">
                    <div class="sw-dots style-2 medium sw-pagination-collection justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Flash Sales -->

<script>
    // Timer Script
    const countdownDate = new Date().getTime() + 24 * 60 * 60 * 1000; // 24 hours from now

    const timerFunction = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = `${hours}:${minutes}:${seconds}`;

        if (distance < 0) {
            clearInterval(timerFunction);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<!-- Browse By Category Section -->
<section class="browse-category flat-spacing-11">
    <div class="container">
        <div class="position-relative">
            <!-- Section Title -->
            <div class="flat-title flex-row justify-content-between px-0">
                <span class="title wow fadeInUp" data-wow-delay="0s">Browse By Category</span>
            </div>

            <!-- Category Slider -->
            <div class="sw-pagination-wrapper">
                <div dir="ltr" class="swiper tf-sw-collection" data-preview="6" data-tablet="4" data-mobile="2" data-space-lg="30" data-space-md="20" data-space="10" data-loop="false" data-auto-play="false">
                    <div class="swiper-wrapper">
                        <!-- Category Item: CPU -->
                        <div class="swiper-slide" lazy="true">
                            <div class="category-item hover-img">
                                <a href="#" class="category-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/icons/cpu-icon.svg" alt="CPU">
                                    </div>
                                    <div class="category-name">CPU</div>
                                </a>
                            </div>
                        </div>

                        <!-- Category Item: Monitor -->
                        <div class="swiper-slide" lazy="true">
                            <div class="category-item hover-img">
                                <a href="#" class="category-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/icons/monitor-icon.svg" alt="Monitor">
                                    </div>
                                    <div class="category-name">Monitor</div>
                                </a>
                            </div>
                        </div>

                        <!-- Category Item: GPU -->
                        <div class="swiper-slide" lazy="true">
                            <div class="category-item hover-img">
                                <a href="#" class="category-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/icons/gpu-icon.svg" alt="GPU">
                                    </div>
                                    <div class="category-name">GPU</div>
                                </a>
                            </div>
                        </div>

                        <!-- Category Item: Camera -->
                        <div class="swiper-slide" lazy="true">
                            <div class="category-item hover-img active">
                                <a href="#" class="category-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/icons/camera-icon.svg" alt="Camera">
                                    </div>
                                    <div class="category-name">Camera</div>
                                </a>
                            </div>
                        </div>

                        <!-- Category Item: Headphones -->
                        <div class="swiper-slide" lazy="true">
                            <div class="category-item hover-img">
                                <a href="#" class="category-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/icons/headphones-icon.svg" alt="Headphones">
                                    </div>
                                    <div class="category-name">Headphones</div>
                                </a>
                            </div>
                        </div>

                        <!-- Category Item: Keyboard -->
                        <div class="swiper-slide" lazy="true">
                            <div class="category-item hover-img">
                                <a href="#" class="category-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/icons/keyboard-icon.svg" alt="Keyboard">
                                    </div>
                                    <div class="category-name">Keyboard</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="box-sw-navigation">
                        <div class="sw-prev">
                            <i class="icon-arrow-left"></i>
                        </div>
                        <div class="sw-next">
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Browse By Category Section -->

<section class="browse-category flat-spacing-11">
    <div class="container">
        <div class="position-relative">
            <!-- Section Title -->
            <div class="flat-title flex-row justify-content-between px-0">
                <span class="title wow fadeInUp" data-wow-delay="0s">Best Selling Products</span>
            </div>

            <!-- Product Slider -->
            <div class="sw-pagination-wrapper">
                <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="20" data-space="10" data-loop="false" data-auto-play="false">
                    <div class="swiper-wrapper">
                        <!-- Product 1 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="product-item hover-img">
                                <a href="#" class="product-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/products/product-1.jpg" alt="Gaming Laptop">
                                    </div>
                                    <div class="product-details">
                                        <h5 class="product-name">Gaming Laptop</h5>
                                        <p class="product-price">
                                            <span class="current-price">$800</span>
                                            <span class="original-price">$1000</span>
                                        </p>
                                        <span class="discount-tag" style="color: red;">-20%</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="product-item hover-img">
                                <a href="#" class="product-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/products/product-2.jpg" alt="Graphics Card">
                                    </div>
                                    <div class="product-details">
                                        <h5 class="product-name">Graphics Card</h5>
                                        <p class="product-price">
                                            <span class="current-price">$425</span>
                                            <span class="original-price">$500</span>
                                        </p>
                                        <span class="discount-tag" style="color: red;">-15%</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="product-item hover-img">
                                <a href="#" class="product-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/products/product-3.jpg" alt="Mechanical Keyboard">
                                    </div>
                                    <div class="product-details">
                                        <h5 class="product-name">Mechanical Keyboard</h5>
                                        <p class="product-price">
                                            <span class="current-price">$90</span>
                                            <span class="original-price">$100</span>
                                        </p>
                                        <span class="discount-tag" style="color: red;">-10%</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="swiper-slide" lazy="true">
                            <div class="product-item hover-img">
                                <a href="#" class="product-inner">
                                    <div class="icon-box">
                                        <img class="lazyload" src="images/products/product-4.jpg" alt="4K Monitor">
                                    </div>
                                    <div class="product-details">
                                        <h5 class="product-name">4K Monitor</h5>
                                        <p class="product-price">
                                            <span class="current-price">$350</span>
                                            <span class="original-price">$500</span>
                                        </p>
                                        <span class="discount-tag" style="color: red;">-30%</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="box-sw-navigation">
                        <div class="sw-prev">
                            <i class="icon-arrow-left"></i>
                        </div>
                        <div class="sw-next">
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Best Selling Products -->

<!-- Banner Collection -->
<section class="flat-spacing-8 pb_0">
    <div class="container">
        <div class="tf-banner-collection">
            <img class="lazyload" data-src="assets/images/collections/banner-collection-3.jpg" src="images/collections/banner-collection-3.jpg" alt="img-banner" loading="lazy">
            <div class="box-content">
                <div class="container wow fadeInUp" data-wow-delay="0s">
                    <div class="sub fw-7 text_white">SALE UP TO 30% OFF TODAY</div>
                    <h2 class="heading fw-6 text_white">Best Deals Discounts</h2>
                    <p class="text_white">Fast wireless charging on-the-go.</p>
                    <a href="productList.php" class="rounded-full tf-btn btn-primary-main style-3 fw-6 btn-light-icon animate-hover-btn"><span>Shop Collection</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner Collection -->

<section class="browse-category flat-spacing-11">
    <div class="container">
        <div class="position-relative">
            <!-- Section Title -->
            <div class="flat-title flex-row justify-content-between px-0">
                <span class="title wow fadeInUp" data-wow-delay="0s">All Products</span>
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-1.jpg" alt="Gaming Laptop">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Gaming Laptop</h5>
                                    <p class="product-price">
                                        <span class="current-price">$800</span>
                                        <span class="original-price">$1000</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-20%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-2.jpg" alt="Graphics Card">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Graphics Card</h5>
                                    <p class="product-price">
                                        <span class="current-price">$425</span>
                                        <span class="original-price">$500</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-15%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-3.jpg" alt="Mechanical Keyboard">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Mechanical Keyboard</h5>
                                    <p class="product-price">
                                        <span class="current-price">$90</span>
                                        <span class="original-price">$100</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-10%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-4.jpg" alt="4K Monitor">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">4K Monitor</h5>
                                    <p class="product-price">
                                        <span class="current-price">$350</span>
                                        <span class="original-price">$500</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-30%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-5.jpg" alt="Wireless Mouse">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Wireless Mouse</h5>
                                    <p class="product-price">
                                        <span class="current-price">$25</span>
                                        <span class="original-price">$30</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-15%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-6.jpg" alt="Gaming Chair">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Gaming Chair</h5>
                                    <p class="product-price">
                                        <span class="current-price">$200</span>
                                        <span class="original-price">$250</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-20%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-7.jpg" alt="Smartphone">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Smartphone</h5>
                                    <p class="product-price">
                                        <span class="current-price">$600</span>
                                        <span class="original-price">$700</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-15%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item hover-img">
                            <a href="#" class="product-inner">
                                <div class="icon-box">
                                    <img class="lazyload" src="images/products/product-8.jpg" alt="Bluetooth Speaker">
                                </div>
                                <div class="product-details">
                                    <h5 class="product-name">Bluetooth Speaker</h5>
                                    <p class="product-price">
                                        <span class="current-price">$50</span>
                                        <span class="original-price">$65</span>
                                    </p>
                                    <span class="discount-tag" style="color: red;">-25%</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- View All Products Button -->
                <div class="text-center mt-4">
                    <a href="productList.php" class="btn btn-danger">View All Products</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /All Products Section -->


<!-- Icon box -->
<section class="flat-spacing-1 flat-iconbox bg_grey-7 wow fadeInUp" data-wow-delay="0s">
    <div class="container">
        <div class="wrap-carousel wrap-mobile">
            <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                <div class="swiper-wrapper wrap-iconbox">
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-shipping"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">Free Shipping</div>
                                <p>Free shipping over order $120</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-payment fs-22"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">Flexible Payment</div>
                                <p>Pay with Multiple Credit Cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-return fs-20"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">14 Day Returns</div>
                                <p>Within 30 days for an exchange</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-suport"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">Premium Support</div>
                                <p>Outstanding premium support</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Icon box -->

<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>