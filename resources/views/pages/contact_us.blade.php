@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <!-- Map -->
                    <div id="contact-us-map">

                    </div>
                    <!-- End Map -->
                    <!-- Contact Info -->
                    <p class="contact-us-details">
                        <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                        <b>Phone:</b> +44 123 654321<br/>
                        <b>Fax:</b> +44 123 654321<br/>
                        <b>Email:</b> <a href="mailto:lazar.djokovic.pvt@gmail.com">lazar.djokovic.pvt@gmail.com</a>
                    </p>
                    <!-- End Contact Info -->
                </div>
                <div class="col-sm-5">
                    <!-- Contact Form -->
                    <h3>Send Us a Message</h3>
                    <div class="contact-form-wrapper">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="Name" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="contact-email" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" id="contact-message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn pull-right">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Info -->
                </div>
            </div>
        </div>
    </div>
@endsection