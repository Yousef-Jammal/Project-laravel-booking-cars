@extends('masterPage')
@section('content')
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Booking</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="booking-section">
    <div class="container">
        <ul class="nav nav-pills booking-tab" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-booking-tab" data-bs-toggle="pill" href="#pills-booking" role="tab"
                    aria-controls="pills-booking" aria-selected="true">
                    <span>Step 1</span>
                    <h5>Booking Details</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-payment-tab" data-bs-toggle="pill" href="#pills-payment" role="tab"
                    aria-controls="pills-payment" aria-selected="false">
                    <span>Step 2</span>
                    <h5>Payments Details</h5>
                </a>
            </li>
            <!-- hi -->
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-booking" role="tabpanel" aria-labelledby="pills-booking-tab">
                <div class="booking-details">
                    <div class="booking-title">
                        <h3>Booking Details</h3>
                    </div>
                    <div class="row booking-info">
                        <div class="col-md-4 col-sm-6 pickup-address">
                            <h5>Pickup</h5>
                            <p>{{ 'location'}}</p>
                            <span>Date & time : {{ $data['pickup_date'}}</span>
                        </div>
                        <div class="col-md-4 col-sm-6 drop-address">
                            <h5>Drop Off</h5>
                            <p>{{ $data['location'] }}</p>
                            <span>Date & time : {{ 'return_date' }}</span>
                        </div>
                        <div class="col-md-4 col-sm-6 booking-amount">
                            <h5>Amount to be paid</h5>
                            <h6><span>{{ 'total_price' }} </span><i class="feather-info"></i></h6>
                        </div>
                    </div>
                         <div class="payment-btn">
                                <button class="btn btn-primary submit-review" type="button" id="goToPaymentBtn">
                                    Go to Payment <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="back-detail-page">
                    <a href="/booking_c"><i class="fa-solid fa-arrow-left me-2"></i> Back to detail page</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab"
                id="complet-payment">
                <div class="booking-details payment-details">
                    <div class="booking-title">
                        <h3>Payment Details</h3>
                    </div>
                    <div class="booking-info">
                        <div class="booking-amount">
                            <h5>Your Payment</h5>
                            <h6><span>{{$data['total_price'] }} </span><i class="feather-info"></i></h6>
                        </div>
                    </div>
                    <div class="payment-method">
                        <h4>Choose your Payment Method</h4>
                        <ul>
                            <li><a href="#"><img src="{{ asset('img/icons/payment-1.svg') }}" alt="Payment Icon"></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('img/icons/payment-2.svg') }}" alt="Payment Icon"></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('img/icons/payment-3.svg') }}" alt="Payment Icon"></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('img/icons/payment-4.svg') }}" alt="Payment Icon"></a>
                            </li>
                        </ul>
                        <div class="booking-form">
                            <div class="booking-title">
                                <h5>Enter Below details</h5>
                            </div>
                            <!-- Success Modal -->
                            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title text-center w-100" id="successModalLabel">
                                                <i class="bi bi-check-circle-fill text-success"
                                                    style="font-size: 2rem;"></i>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h4>Success!</h4>
                                            <p>We've confirmed your order and payment.<br>Thank you for shopping with
                                                us!</p>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="button" class="btn btn-success w-100"
                                                data-bs-dismiss="modal">Continue Browsing</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Form -->
                            <form class="#" id="payment-form" novalidate>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block">
                                            <label>Card Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="45612212255455"
                                                id="cardNumber">
                                            <small id="cardNumberError" class="text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label>Expiration date <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="MM/YY" id="expiryDate">
                                            <small id="expiryDateError" class="text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label>Security number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="CVV"
                                                id="securityNumber">
                                            <small id="securityNumberError" class="text-danger"></small>
                                        </div>
                                    </div>
                                </div>
                              
                            </form>




<section class="order-confirmation">
<div class="container">
<div class="confirm-order">
<div class="section-title">
<h3>Order Confirmation</h3>
<h5>Order Total : <span>$315.00</span></h5>
</div>
<div class="booking-details order-confirm-box">
<div class="row">
<div class="col-lg-6">
<div class="confirmation-title">
<h4>Car Details</h4>
<a href="javascript:void(0)">Edit</a>
</div>
<div class="order-car">
<span><img src="{{ asset('img/detail-smallcar-img-2.jpg') }}" alt="car"></span>
<h5>Chevrolet Camaro<span>$315</span></h5>
</div>
</div>
<div class="col-lg-6">
<div class="confirmation-title">
<h4>Extra Service</h4>
<a href="javascript:void(0)">Edit</a>
</div>
<ul class="address-info">
<li>Baby Seat : $10</li>
</ul>
</div>
<div class="col-lg-6">
<div class="confirmation-title">
<h4>Payment details</h4>
<a href="javascript:void(0)">Edit</a>
</div>
<div class="visa-card">
<a href="#"><img src="{{ asset('img/visa.svg') }}" alt="Visa"></a>
<h6>Visa card ending in 1245</h6>
</div>
</div>
<div class="col-lg-6">
<div class="confirmation-title">
<h4>Pickup Location & Date</h4>
<a href="javascript:void(0)">Edit</a>
</div>
<ul class="address-info">
<li>45, 4th Avanue Mark Street USA</li>
<li>11 Jan 2023 - 11:00 PM</li>
</ul>
</div>
<div class="col-lg-6">
<div class="confirmation-title">
<h4>Your Information</h4>
<a href="javascript:void(0)">Edit</a>
</div>
<ul class="address-info">
<li>Casandra</li>
<li><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="36555745575852445776534e575b465a531855595b">[email&#160;protected]</a></li>
<li>+1 73940 45355</li>
<li>45, 4th Avanue Mark Street USA</li>
</ul>
</div>
<div class="col-lg-6">
<div class="confirmation-title">
<h4>Drop Off Location</h4>
<a href="javascript:void(0)">Edit</a>
</div>
<ul class="address-info mb-0">
<li>45, 4th Avanue Mark Street USA</li>
<li>11 Jan 2023 - 11:00 PM</li>
</ul>
</div>
</div>
</div>
<div class="payment-btn">
                                    <button class="btn btn-primary submit-review w-100" type="button" id="submitBtn">
                                    {{$data['total'] }}
                                    </button>
                                </div>
</div>
</div>
</section>

<div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-body">
<div class="payment-success">
<span class="check"><i class="fa-solid fa-check-double"></i></span>
<h5>Order Confirmed</h5>
<p>You Payment has been successfully done.
Trasaction id :<span> #5064164454</span>
</p>
</div>
</div>
</div>
</div>
</div>


                            <script>
                                document.getElementById('goToPaymentBtn').addEventListener('click', function(event) {
                                    // Activate the Payment Details tab
                                    var paymentTab = new bootstrap.Tab(document.getElementById('pills-payment-tab'));
                                    paymentTab.show();

                                    // Optionally, scroll to the payment section
                                    document.getElementById('pills-payment').scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                });

                                document.getElementById('submitBtn').addEventListener('click', function(event) {
                                    // Clear previous errors
                                    document.getElementById('cardNumberError').innerText = "";
                                    document.getElementById('expiryDateError').innerText = "";
                                    document.getElementById('securityNumberError').innerText = "";

                                    // Get form elements
                                    const cardNumber = document.getElementById('cardNumber');
                                    const expiryDate = document.getElementById('expiryDate');
                                    const securityNumber = document.getElementById('securityNumber');

                                    let isValid = true;

                                    // Validate Card Number
                                    if (!cardNumber.value.match(/^\d{13,19}$/)) {
                                        document.getElementById('cardNumberError').innerText =
                                            "Please enter a valid card number between 13 to 19 digits.";
                                        isValid = false;
                                    }

                                    // Validate Expiration Date
                                    if (!expiryDate.value.match(/^(0[1-9]|1[0-2])\/?([0-9]{2})$/)) {
                                        document.getElementById('expiryDateError').innerText =
                                            "Please enter a valid expiration date in MM/YY format.";
                                        isValid = false;
                                    }

                                    // Validate Security Number
                                    if (!securityNumber.value.match(/^\d{3,4}$/)) {
                                        document.getElementById('securityNumberError').innerText =
                                            "Please enter a valid security number (CVV) with 3 or 4 digits.";
                                        isValid = false;
                                    }

                                    // If valid, show the success modal
                                    if (isValid) {
                                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                                        successModal.show();
                                    }
                                });
                            </script>

                        </div>
                    </div>
                </div>
                <div class="back-detail-page">
                    <a href="/booking_c"><i class="fa-solid fa-arrow-left me-2"></i> Back to Booking Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <div class="payment-success">
                    <span class="check"><i class="fa-solid fa-check-double"></i></span>
                    <h5>Payment Successful</h5>
                    <p>You Payment has been successfully done. Trasaction id :<span> #5064164454</span></p>
                    <div class="order-confirm">
                        <a href="booking.html">Go to Order Confirmation<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
