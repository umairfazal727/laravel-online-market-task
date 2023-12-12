@extends('welcome')
@section('content')
    <main id="MainContent" class="content-for-layout">
        <!-- banner -->
        <div class="banner">
            <img src="{{ URL::asset('/images/slider1.png') }}" alt="E-Commerce Banner">
            <div class="banner-text">
                <h2>Special Sale!</h2>
                <p>Save up to 50% on selected items. Limited time offer.</p>
                <a href="#"
                    style="color: #fff; text-decoration: none; background-color: #f00; padding: 10px 20px; border-radius: 5px;">Shop
                    Now</a>
            </div>
        </div>
        <!-- Banner -->

        <main id="MainContent" class="content-for-layout">

            <div class="collection mt-100">
                <div class="container">
                    <div class="row">
                        <!-- product area start -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                                <div class="collection-title-wrap d-flex align-items-end">
                                    <h2 class="collection-title heading_24 mb-0">All products</h2>
                                    <p class="collection-counter text_16 mb-0 ms-2">({{ count($products) }})</p>
                                </div>
                                <div class="filter-sorting">
                                    <div class="collection-sorting position-relative d-none d-lg-block">
                                        <div class="sorting-header text_16 d-flex align-items-center justify-content-end">
                                            <span class="sorting-title me-2">Sort by:</span>
                                            <span class="active-sorting">Featured</span>
                                            <span class="sorting-icon">
                                                <svg class="icon icon-down" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                        <ul class="sorting-lists list-unstyled m-0">
                                            <li><a href="#" class="text_14">Featured</a></li>
                                            <li><a href="#" class="text_14">Best Selling</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                            <li><a href="#" class="text_14">Price, low to high</a></li>
                                            <li><a href="#" class="text_14">Price, high to low</a></li>
                                            <li><a href="#" class="text_14">Date, old to new</a></li>
                                            <li><a href="#" class="text_14">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                    <div class="filter-drawer-trigger mobile-filter d-flex align-items-center d-lg-none">
                                        <span class="mobile-filter-icon me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-filter">
                                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                            </svg>
                                        </span>
                                        <span class="mobile-filter-heading">Sorting</span>
                                    </div>
                                </div>
                            </div>
                            <div class="collection-product-container">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                            <div class="product-card">
                                                <div class="product-card-img">
                                                    <a class="hover-switch" href="{{ route('product-details', ['id' => $product->id]) }}">
                                                        <img class="secondary-img"
                                                            src="{{ URL::asset('/images/shirt0.jpg') }}" alt="product-img">
                                                        <img class="primary-img"
                                                            src="{{ URL::asset('/images/shirt0.jpg') }}" alt="product-img">
                                                    </a>

                                                    <div class="product-badge">
                                                        <span class="badge-label badge-percentage rounded">-44%</span>
                                                    </div>

                                                    <div
                                                        class="product-card-action product-card-action-2 justify-content-center">
                                                        <a href="#quickview-modal" class="action-card action-quickview"
                                                            data-bs-toggle="modal">
                                                            <svg width="26" height="26" viewBox="0 0 26 26"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                                    fill="#00234D" />
                                                            </svg>
                                                        </a>

                                                        <a href="#" class="action-card action-wishlist">
                                                            <svg class="icon icon-wishlist" width="26" height="22"
                                                                viewBox="0 0 26 22" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                    fill="#00234D" />
                                                            </svg>
                                                        </a>

                                                        <a href="#" class="action-card action-addtocart">
                                                            <svg class="icon icon-cart" width="24" height="26"
                                                                viewBox="0 0 24 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                                    fill="#00234D" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-card-details">

                                                    <h3 class="product-card-title">
                                                        <a href="{{ route('product-details', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="product-card-price">
                                                        <span class="card-price-regular">{{ $product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pagination justify-content-center mt-100">
                                <nav>
                                    <ul class="pagination m-0 d-flex align-items-center">
                                        <li class="item disabled">
                                            <a class="link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-left">
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="item"><a class="link" href="#">1</a></li>
                                        <li class="item active"><a class="link" href="#">2</a></li>
                                        <li class="item"><a class="link" href="#">3</a></li>
                                        <li class="item"><a class="link" href="#">4</a></li>
                                        <li class="item">
                                            <a class="link" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- product area end -->

                        <!-- sidebar start -->
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="collection-filter filter-drawer">
                                <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                                    <h5 class="heading_24">Sorting By</h4>
                                        <button type="button"
                                            class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                                </div>

                                <div class="filter-widget d-lg-none">
                                    <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                        data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                        <span>
                                            <span class="sorting-title me-2">Sort by:</span>
                                            <span class="active-sorting">Featured</span>
                                        </span>
                                        <span class="faq-heading-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                    <div id="filter-mobile-sort" class="accordion-collapse collapse show">
                                        <ul class="sorting-lists-mobile list-unstyled m-0">
                                            <li><a href="#" class="text_14">Featured</a></li>
                                            <li><a href="#" class="text_14">Best Selling</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                            <li><a href="#" class="text_14">Price, low to high</a></li>
                                            <li><a href="#" class="text_14">Price, high to low</a></li>
                                            <li><a href="#" class="text_14">Date, old to new</a></li>
                                            <li><a href="#" class="text_14">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar end -->
                    </div>
                </div>
            </div>
        </main>

        <!-- gift card -->
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ URL::asset('/images/card.webp') }}" alt="img" class="w-100">
                </div>
                <div class="col-lg-8">

                    <div class="row py-3 border border-secondary-subtle text-center d-flex align-items-center">
                        <div class="col-3">
                            <img src="{{ URL::asset('/images/card.webp') }}" alt="" height="50"
                                width="100">
                        </div>
                        <div class="col-5">
                            <h2 class="product-title fw-bold"><a href="#">Gift Card 5K</a></h2>
                            <p class="" style="font-size: 12px;">Rs.5,000.00</p>
                        </div>
                        <div class="col-4 cart-item-quantity">
                            <div class="quantity d-flex align-items-center justify-content-between">
                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                        alt="minus"></button>
                                <input class="qty-input" type="number" name="qty" value="0" min="0">
                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                        alt="plus"></button>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3 border border-secondary-subtle text-center d-flex align-items-center">
                        <div class="col-3">
                            <img src="{{ URL::asset('/images/card.webp') }}" alt="" height="50"
                                width="100">
                        </div>
                        <div class="col-5">
                            <h2 class="product-title fw-bold"><a href="#">Gift Card 5K</a></h2>
                            <p class="" style="font-size: 12px;">Rs.5,000.00</p>
                        </div>
                        <div class="col-4 cart-item-quantity">
                            <div class="quantity d-flex align-items-center justify-content-between">
                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                        alt="minus"></button>
                                <input class="qty-input" type="number" name="qty" value="0" min="0">
                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                        alt="plus"></button>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3 border border-secondary-subtle text-center d-flex align-items-center">
                        <div class="col-3">
                            <img src="{{ URL::asset('/images/card.webp') }}" alt="" height="50"
                                width="100">
                        </div>
                        <div class="col-5">
                            <h2 class="product-title fw-bold"><a href="#">Gift Card 5K</a></h2>
                            <p class="" style="font-size: 12px;">Rs.5,000.00</p>
                        </div>
                        <div class="col-4 cart-item-quantity">
                            <div class="quantity d-flex align-items-center justify-content-between">
                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                        alt="minus"></button>
                                <input class="qty-input" type="number" name="qty" value="0" min="0">
                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                        alt="plus"></button>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>


    </main>
@endsection