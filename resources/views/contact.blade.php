@extends('layouts\frontend')
 @section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="{{asset('assets/img/contact.jpg')}}" alt="Image">
                </div>

                <div class="container mt-5">
                <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" action="{{ route('contact.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="contact_name" id="contact_name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="contact_email" id="contact_email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="contact_phone" id="contact_phone">
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="contact_subject" id="contact_subject">
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="contact_message" id="contact_message" rows="4"></textarea>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>

       
        @endsection