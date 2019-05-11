@extends('frontend.master')
@section('mainContent')
   @include('frontend.includes.slider')


 @include('frontend.includes.services')





    <!-- ##### About Area Start ##### -->
   @include('frontend.includes.aboutus')
    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    @include('frontend.includes.portfilio')
    <!-- ##### Portfolio Area End ##### -->


   <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>NEW ARRIVALS</h2>
                        <p>We have the latest products, it must be exciting for you</p>
                    </div>
                </div>
            </div>

            <div class="row">
@foreach($products as $product)
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}"><img src="{{asset($product->cover_image)}}" alt=""></a>
                            <!-- Product Tag -->
                            <div class="product-tag">
                                <a href="#">Hot</a>
                            </div>
                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="{{url('/product/details/'.$product->id.'/'.$product->title)}}" class="add-to-cart-btn">Add to cart</a>
                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                            </div>
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

                <div class="col-12 text-center">
                    <a href="{{url('/product/view')}}" class="btn alazea-btn">View All</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area Start ##### -->
    @include('frontend.includes.testimonial')
        <!-- ##### Subscribe Area Start ##### -->
   @include('frontend.includes.subscription')
    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
 @include('frontend.includes.contactus')
    <!-- ##### Contact Area End ##### -->

         @endsection