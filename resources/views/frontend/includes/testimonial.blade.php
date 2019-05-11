  <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">
                    @foreach($reviews as $review)
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="{{asset($review->cover_image)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>TESTIMONIAL</h2>
                                            <p>Some kind words from clients about {{$review->title}}</p>
                                        </div>
                                        <p>“{{$review->comment}}”</p>
                                        <div class="testimonial-author-info">
                                            <h6>{{$review->user_name}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       @endforeach

                    

                    </div>
                </div>
            </div>
        </div>
    </section>