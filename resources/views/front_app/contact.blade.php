@extends('front_app.layouts.template')
@section('content')
<section class="container">
    <div class="">
        <div class="section-header text-center" style="padding-top: 12% !important;">
            <h2 class="title fw-bold display-4">Contact Us</h2>
        </div>
    </div>
</section>


<!-- Contact us Section Section Starts Here -->
<div class="contact-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Get in touch with Contact us</span>
            <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
        </div>
        <div class="section-wrapper">
            <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                </div>
                <div class="form-group w-100">
                    <textarea name="message" rows="8" id="message" placeholder="Your Message" required></textarea>
                </div>
                <div class="form-group w-100 text-center">
                    <button class="lab-btn"><span>Send our Message</span></button>
                </div>
            </form>
            <p class="form-message"></p>
        </div>
    </div>
</div>
@endsection
