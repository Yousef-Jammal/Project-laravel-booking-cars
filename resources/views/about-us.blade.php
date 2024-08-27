@extends('masterPage')
@section('content')

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">About us</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="section about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-down">
                <div class="about-img">
                    <div class="about-exp">
                        <span>12+ years of experiences</span>
                    </div>
                    <div class="abt-img">
                        <img src="{{ asset('img/about-us.png') }}" class="img-fluid" alt="About us">
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-down">
                <div class="about-content">
                    <h6>ABOUT OUR COMPANY</h6>
                    <h2>Best Solution For Cleaning Services</h2>
                    <p>Welcome to Dreams Rent, where we make your journey smooth, convenient, and memorable. With years of experience in the car rental industry, we are dedicated to providing top-notch services that cater to all your transportation needs.</p>
                    <p>At Dreams Rent, we understand that every trip is unique, and so are your needs. That's why we offer a wide selection of vehicles, from compact cars perfect for city driving to luxurious SUVs and vans for family trips or special occasions. Whether you're traveling for business, pleasure, or both, we have the right vehicle for you.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Wide range of vehicles for every journey.</li>
                                <li>Affordable pricing without compromising on quality.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>24/7 customer support for your convenience.</li>
                                <li>Flexible rental options to fit your schedule.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section services bg-light-primary">
    <div class="service-right">
        <img src="{{ asset('img/bg/service-right.svg') }}" class="img-fluid" alt="services right">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>How It Works</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="services-work">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-secondary">
                            <img class="icon-img bg-secondary" src="{{ asset('img/icons/services-icon-01.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>1. Choose Locations</h3>
                            <p>Select your pick-up and drop-off spots for maximum convenience. Enjoy flexible options that suit your travel needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-warning">
                            <img class="icon-img bg-warning" src="{{ asset('img/icons/services-icon-02.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>2. Pick-Up Locations</h3>
                            <p>Choose where you'd like to pick up your rental car. We offer various convenient locations, from airports to city centers, to fit your schedule and travel plans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-dark">
                            <img class="icon-img bg-dark" src="{{ asset('img/icons/services-icon-03.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>3. Book your Car</h3>
                            <p>Select your vehicle and complete the reservation. Confirm your details and make a secure payment to finalize your booking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section facts-number">
    <div class="facts-left">
        <img src="{{ asset('img/bg/facts-left.png') }}" class="img-fluid" alt="facts left">
    </div>
    <div class="facts-right">
        <img src="{{ asset('img/bg/facts-right.png') }}" class="img-fluid" alt="facts right">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">Facts By The Numbers</h2>
            <p class="description text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="counter-group">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="{{ asset('img/icons/bx-heart.svg') }}" alt="Icon">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">16</span>K+</h4>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="{{ asset('img/icons/bx-car.svg') }}" alt="Icon">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">2547</span>+</h4>
                                <p>Count of Cars</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="{{ asset('img/icons/bx-headphone.svg') }}" alt="Icon">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">625</span>K+</h4>
                                <p>Car Center Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="{{ asset('img/icons/bx-history.svg') }}" alt="Icon">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">200</span>K+</h4>
                                <p>Total Kilometer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section why-choose">
    <div class="choose-left">
        <img src="{{ asset('img/bg/choose-left.png') }}" class="img-fluid" alt="Why Choose Us">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Why Choose Us</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="why-choose-group">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-black">
                                <img src="{{ asset('img/icons/bx-selection.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>Easy & Fast Booking</h4>
                                <p>Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-secondary">
                                <img src="{{ asset('img/icons/bx-crown.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>Many Pickup Location</h4>
                                <p>Enthusiastically magnetic initiatives with cross-platform sources. Dynamically target testing procedures through effective.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-primary">
                                <img src="{{ asset('img/icons/bx-user-check.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>Customer Satisfaction</h4>
                                <p>Globally user centric method interactive. Seamlessly revolutionize unique portals corporate collaboration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section about-testimonial testimonials-section">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">What People say about us? </h2>
            <p class="description text-white">Read reviews from satisfied customers about our excellent service and vehicles.</p>
        </div>

        <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-02.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Rabien Ustoc</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"The car was perfect for our road trip."</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-05.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Valerie L. Ellis</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Quick pickup and return, zero hassles!"</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-01.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Laverne Marier</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Affordable rates and a great selection of vehicles."</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-10.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Sydney Salmons</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Smooth booking process and friendly customer support."</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-07.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Lucas Moquin</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Excellent service and spotless cars. Highly recommend!"</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="section faq-section bg-light-primary">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Frequently Asked Questions </h2>
            <p>Get answers to common questions about booking, vehicles, and policies in our FAQ section.</p>
        </div>

        <div class="faq-info">
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapseds" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">How do I book a car?</a>
                </h4>
                <div id="faqOne" class="card-collapse collapse show">
                    <p>Simply select your pickup location, choose your vehicle, select your rental dates, and complete the booking form.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">What documents do I need to rent a car?</a>
                </h4>
                <div id="faqTwo" class="card-collapse collapse">
                    <p>You will need a valid driver's license, a credit card, and a form of ID.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Can I modify or cancel my reservation?</a>
                </h4>
                <div id="faqThree" class="card-collapse collapse">
                    <p>Yes, you can modify or cancel your reservation through our website or by contacting customer support. Be sure to check the cancellation policy for any fees.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Are there any additional fees?</a>
                </h4>
                <div id="faqFour" class="card-collapse collapse">
                    <p>Additional fees may apply for insurance, extra drivers, and optional add-ons. All fees will be clearly displayed during the booking process.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">What is the fuel policy?</a>
                </h4>
                <div id="faqFive" class="card-collapse collapse">
                    <p>Most rentals require you to return the car with the same amount of fuel as when you picked it up. Some options include a pre-paid fuel option.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">Can I pick up the car at one location and return it at another?</a>
                </h4>
                <div id="faqSix" class="card-collapse collapse">
                    <p>Yes, you can select different pickup and drop-off locations. Additional fees may apply.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Is insurance included in the rental price?</a>
                </h4>
                <div id="faqSeven" class="card-collapse collapse">
                    <p>Basic insurance is often included, but you can choose to add extra coverage for more protection. Check the details during booking.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection