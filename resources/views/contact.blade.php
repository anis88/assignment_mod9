@extends('layouts.master')

@section('title', 'Contact')

@section('content')
    <!-- Contact Page Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="contact-heading">Contact Me</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <!-- Contact Form -->
                    <form id="contactForm" action="#" method="post" novalidate>
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <!-- Message Field -->
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            <div class="invalid-feedback">Please enter your message.</div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Page Section -->
@endsection
