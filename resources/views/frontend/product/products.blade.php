    @extends('frontend.master')
@section('mainContent')
<div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url({{asset('frontEnd/')}}/img/bg-img/24.jpg);">
            <h2>Shop</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
           

            <div class="row">
                <!-- Sidebar Area -->
                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">
                    @foreach($products as $product)
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}"><img src="{{asset($product->cover_image)}}" alt=""></a>
                                        <!-- Product Tag -->
                                        <div class="product-tag">
                                            <a href="#">Hot</a>
                                        </div>
                                        <div class="product-meta d-flex">
                                            <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                            <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}" class="add-to-cart-btn">Add to cart</a>
                                            <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                                        </div>
                                    </div>
                                       <div class="portfolio-hover-overlay">
                        <a href="{{asset($product->cover_image)}}" class="portfolio-img d-flex align-items-center justify-content-center" title="{{$product->title}}">
                           
                        </a>
                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}">
                                            <p>{{$product->title}}</p>
                                        </a>
                                        <h6>${{$product->price}}</h6>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                          

                        <!-- Pagination -->
                     
                    </div>
                       <nav aria-label="Page navigation">
                            {{$products->render()}}
                        </nav>
                </div>
            </div>
        </div>
    </section>
    @endsection