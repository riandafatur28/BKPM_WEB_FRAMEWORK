@section('portofolio')
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg') }} class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href={{ asset('assets/img/portfolio/app-1.jpg') }} title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Branding 1" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Branding 2" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Product 3" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Branding 2" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src={{ asset('assets/img/portfolio/app-1.jpg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            assets/img/portfolio/app-1.jpg') }}
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>
@endsection
