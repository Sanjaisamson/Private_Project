<!-- resources/views/construction.blade.php -->

@extends('layouts.app')

@section('title', 'Construction Services')

@section('body-class', 'construction-services-page')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="page-bg-container">
        <div class="container">
          <h1 class="servicehead">Construction Services</h1>
          <nav class="breadcrumbs">
          </nav>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">


            <h4>Construction Services: Comprehensive MEP Solutions</h4>
            <p style="text-align: justify;">At Al-Khamisi, we pride ourselves on delivering exceptional Mechanical,
              Electrical, and Plumbing (MEP) services for a wide range of construction projects. Our team of highly
              skilled professionals brings years of experience and technical expertise to every job, ensuring that your
              MEP systems are installed, integrated, and maintained to the highest industry standards.</p>
            <div class="services-list">
              <a href="#" class="active">Mechanical Systems</a>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>HVAC installation and optimization</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ventilation and air filtration systems</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Energy-efficient cooling solutions</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Heating system design and implementation</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Industrial equipment installation</span></li>
              </ul>
              <a href="#" class="active">Electrical Systems</a>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Complete electrical wiring and rewiring</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Power distribution and management</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Lighting design and installation</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Emergency power systems</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Smart building automation</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Data and communication network setup</span></li>
              </ul>
              <a href="#" class="active">Plumping Systems</a>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Water supply and distribution systems</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Drainage and waste management</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Fire protection systems</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Water heating solutions</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Sustainable plumbing options</span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\Services\Construction.jpeg" alt="" class="img-fluid services-img">
            <h2>Why Choose Us:</h2>
            <p class="servicedes">
              Whether you're undertaking a new build or renovation, our MEP services are tailored to meet your specific
              project requirements. We guarantee a smooth integration of mechanical, electrical, and plumbing systems,
              resulting in a functional and well-executed construction project. </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span><b>Expertise:</b> Our team consists of certified professionals
                  with extensive experience in MEP systems for various types of buildings and industries.</span></li>
              <li><i class="bi bi-check2-all"></i> <span><b>Timely Completion:</b> We understand the importance of
                  deadlines in construction projects. Our efficient project management ensures on-time delivery without
                  compromising on quality.</span></li>
              <li><i class="bi bi-check2-all"></i> <span><b>Quality Assurance:</b> We adhere to strict quality control
                  measures and follow all relevant building codes and regulations to guarantee the safety and longevity
                  of our installations.</span></li>
              <li><i class="bi bi-check2-all"></i> <span><b>Cost-Effective:</b> Our streamlined processes and efficient
                  resource management allow us to offer competitive pricing without sacrificing quality.</span></li>

            </ul>
            <p class="servicedes">
              From initial design consultation to final implementation and beyond, [Your Company Name] is committed to
              delivering MEP solutions that exceed your expectations. Our attention to detail, commitment to quality,
              and passion for excellence ensure that your construction project benefits from reliable, efficient, and
              innovative MEP systems.</p>
            <p class="servicedes">
              Choose AlKhamisi International Investments for MEP services that stand the test of time and contribute to
              the overall success of your construction project.</p>
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection