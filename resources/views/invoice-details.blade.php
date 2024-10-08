@extends('masterPage')
@section('content')

<div class="breadcrumb-bar">
<div class="container">
<div class="row align-items-center text-center">
<div class="col-md-12 col-12">
<h2 class="breadcrumb-title">Invoice</h2>
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
<li class="breadcrumb-item active" aria-current="page">Invoice</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<div class="invoice-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="card-body">

<div class="invoice-item">
<div class="row">
<div class="col-md-6">
<div class="invoice-logo">
<img src="{{ asset('img/logo.svg') }}" alt="logo">
</div>
</div>
<div class="col-md-6">
<div class="invoice-info">
<h1>Invoice</h1>
<h6>Invoice Number : <span>In983248782</span></h6>
</div>
</div>
</div>
</div>


<div class="invoice-item-bill">
<ul>
<li>
<div class="invoice-info">
<h6>Billed to</h6>
<p>
Customer Name<br>
9087484288<br>
Address line 1,<br>
Address line 2<br>
Zip code ,City - Country
</p>
</div>
</li>
<li>
<div class="invoice-info">
<h6>Invoice From</h6>
<p>
Company Name<br>
9087484288<br>
Address line 1, Address line 2<br>
Zip code ,City - Country
</p>
</div>
</li>
<li>
<div class="invoice-info">
<p>Issue Date : <span> 27 Jul 2022</span></p>
<p>Due Date : <span> 27 Aug 2022</span></p>
<p>Due Amount : <span> $ 1,54,22</span></p>
<p>Recurring Invoice : <span> 15 Months</span></p>
<p>PO Number : <span> 54515454</span></p>
</div>
</li>
</ul>
</div>


<div class="invoice-table-wrap">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-center table-hover">
<thead class="thead-light">
<tr>
<th>Description</th>
<th>Category</th>
<th>Rate/Item</th>
<th>Quantity</th>
<th>Discount (%)</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>Dreams Rental Cars</td>
<td>Kia Soul</td>
<td>$1,110</td>
<td>2</td>
<td>2 %</td>
<td>$2,220</td>
</tr>
<tr>
<td>Dreams Rental Cars</td>
<td>Toyota Tacoma</td>
<td>$1,110</td>
<td>0</td>
<td>0</td>
<td>$2,220</td>
</tr>
<tr>
<td>Dreams Rental Cars</td>
<td>Audi A3</td>
<td>$1,110</td>
<td>0</td>
<td>0</td>
<td>$2,220</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div class="payment-details">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="invoice-terms">
<h6>Payment Details</h6>
<div class="invocie-note">
<p>Debit Card<br>
XXXXXXXXXXXX-2541<br>
HDFC Bank</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="invoice-total-box">
<div class="invoice-total-inner">
<p>Taxable <span>$6,660.00</span></p>
<p>Additional Charges<span>$6,660.00</span></p>
<p>Discount: <span>- $ 3,300.00</span></p>
<p>Sub total <span> $ 3,300.00</span></p>
</div>
</div>
</div>
</div>
</div>


<div class="invoice-total">
<h4>Total Amount <span>$143,300.00</span></h4>
</div>

<div class="invoice-note-footer">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="invocie-note">
<h6>Notes</h6>
<p>Enter customer notes or any other details</p>
</div>
<div class="invocie-note mb-0">
<h6>Terms and Conditions</h6>
<p>Enter customer notes or any other details</p>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="invoice-sign">
<img class="img-fluid d-inline-block" src="{{ asset('img/signature.png') }}" alt="sign">
<span class="d-block">Harristemp</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection
