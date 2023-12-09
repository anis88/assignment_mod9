@extends('layouts.master')

@section('title', 'About')

@section('content')
    <!-- About Me Page Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="about-heading">About Me</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('images/tanchan.png') }}" class="img-fluid img-thumbnail" alt="Your Profile Picture">
                </div>
                <div class="col-lg-6">
                    <h3>Chef Tanchan</h3>
                    <p>
                        I am a passionate and results-driven Chef with a strong background in Bakery & Patissiere.
                        Throughout my career, I have gained expertise in  bakery & patissiere field.
                    </p>
                    <h4 class="info">Education</h4>
                    <p><strong>Degree:</strong> Diploma In Global Culinary Arts , Le Cordon Bleu, Graduated 2020</p>

                    <h4 class="info">Work Experience</h4>

                    <p>
                        <strong>Executive Chef</strong><br>
                        Sugar Lane Bakery, Paris<br>
                        <i>15/06/2023 - Present</i><br>
                        Creating new and exciting desserts to renew our menus and engage the interest of customers.
                    </p>

                    <h4 class="info">Certifications</h4>
                    <ul>
                        <li><i>Diploma In Global Culinary Arts</i> - Le Cordon Bleu</li>
                        <li><i>National Skills Certificate in Bakery & Pastry Production (Level-2)</i> - BTEB</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About Me Page Section -->
@endsection
