 <section class="alazea-portfolio-area section-padding-100-0" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR PORTFOLIO</h2>
                        <p>We devote all of our experience and efforts for creation</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
          
            <div class="row alazea-portfolio">
        @foreach ($products as $product)
                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design home-design" >
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img"><img src="{{asset($product->cover_image)}}" style="border: 1px solid"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="{{asset($product->cover_image)}}" class="portfolio-img d-flex align-items-center justify-content-center" title="{{$product->title}}">
                            <div class="port-hover-text">
                                <h3>{{$product->title}}</h3>
                                <h5>{{$product->categoryName}}</h5>
                            </div>
                        </a>
                    </div>
                </div>

       @endforeach

            </div>
        </div>
    </section>