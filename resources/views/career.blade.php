<!-- resources/views/career.blade.php -->

@extends('layouts.app')

@section('title', 'Career Opportunities')

@section('body-class', 'career-page')

@section('content')
<head><meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
        <div class="page-bg-container">
            <div class="container">
                <h1 class="servicehead">Career Opportunities</h1>
                <nav class="breadcrumbs">
                    <a href="{{ url('/') }}">Home</a> &gt; Career Opportunities
                </nav>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section id="career-details" class="career-details section">

        <div class="container">
            <div class="row gy-4">
                <!-- Text Content Section -->
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <h1> <strong>Join Our Team </strong></h1>
                    <p style="text-align: justify;">
                        At Al-Khamisi International Investments, we are committed to building a dynamic and inclusive team. As a member of our team, you'll have the opportunity to work in a stimulating environment that fosters growth, innovation, and collaboration.
                    </p>
                    <h4>Benefits of Joining Us:</h4>
                    <ul style="list-style-type:none">
                        <li><i class="bi bi-check2-all"></i> <span>Competitive Salary Packages</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Comprehensive Health and Wellness Programs</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Opportunities for Professional Development</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Flexible Work Arrangements</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Supportive Work Culture and Team Collaboration</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Access to Cutting-Edge Technologies and Tools</span></li>
                    </ul>

                    <h4>Our Services:</h4>
                    <p style="text-align: justify;">
                        Al-Khamisi International Investments offers a diverse range of services across various sectors. Join us to be part of a team that excels in:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>IT Services: Expert training, custom software development, and robust technical support.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Real Estate: Seamless transactions, property sales, and management across the GCC.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Construction Services: Comprehensive MEP solutions for residential, commercial, and infrastructure projects.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Tourism: World-class resorts, hotels, and tour operations showcasing the beauty of Oman.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Food Trade: Expert import, export, and distribution services across the GCC.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Education: IT training and support to boost skills and infrastructure.</span></li>
                    </ul>
                </div>

<!-- Application Form Section -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <div class="apply-form">
        <h2><strong>APPLY FOR A POSITION</strong></h2>
        <form action="{{ route('application.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position">Position Applying For</label>
                <input type="text" id="position" name="position" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cv">Upload Your CV(docs/pdf)</label>
                <input type="file" id="cv" name="cv" class="form-control" required>
            </div>
            <div class="form-group">
                <div class="loading" style="display: none;">Loading</div>
                <div class="error-message" id="error-message" style="display: none; background: red;color:white"></div>
                <div class="sent-message" id="success-message" style="display: none; background: green;color:white"></div>
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select the form and message elements
        const form = document.querySelector('form');
        const loadingMessage = document.querySelector('.loading');
        const errorMessage = document.getElementById('error-message');
        const successMessage = document.getElementById('success-message');
    
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
    
            // Show the loading message
            loadingMessage.style.display = 'block';
    
            // Clear previous messages
            errorMessage.style.display = 'none';
            successMessage.style.display = 'none';
    
            // Create a FormData object from the form
            const formData = new FormData(form);
    
            // Send the form data using Fetch API
            fetch('{{ route('application.submit') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', // Indicate an AJAX request
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                // Hide the loading message
                loadingMessage.style.display = 'none';
    
                if (data.status === 'success') {
                    // Show success message
                    successMessage.textContent = data.message;
                    successMessage.style.display = 'block';
    
                    // Optionally, clear the form fields after successful submission
                    form.reset();
                } else {
                    // Show error message
                    errorMessage.textContent = data.message;
                    errorMessage.style.display = 'block';
                }
            })
            .catch(error => {
                // Hide the loading message
                loadingMessage.style.display = 'none';
    
                // Show a general error message
                errorMessage.textContent = 'There was an error submitting your application. Please try again later.';
                errorMessage.style.display = 'block';
            });
        });
    });
    </script>
    

            </div>
        </div>

    </section><!-- /Career Details Section -->

</main>
@endsection
