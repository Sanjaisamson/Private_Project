<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Al-Khamisi International')

@section('body-class', 'home-page')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="./assets/img/banner.jpg" alt="" data-aos="fade-in" class="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-out">
                    <div class="col-xl-7 col-lg-9 text-center">
                        <h1>ALKHAMISI INTERNATIONAL INVESTMENTS</h1>
                        <p><small>We are here to serve you</small> </p>
                    </div>
                </div>
                <!-- <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
                      <a href="#about" class="btn-get-started">Get Started</a>
                    </div> -->



        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us<br></h2>
                <p>Welcome to Al-Khamisi International Investments, where versatility meets excellence.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="row gy-4">
                        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="">
                            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
                        </div>
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                            <!-- <h3>Welcome to Al-Khamisi International Investments, where versatility meets excellence.</h3> -->
                            <p class="fst-italic" style="text-align: justify;">
                                AlKhamisi International Investments is a multifaceted service company committed to
                                delivering
                                exceptional solutions across
                                various industries.
                                With a strong foundation in Construction, we manage diverse projects with a focus on quality
                                and
                                precision,
                                ensuring that each development meets the highest standards. Our Real Estate services excel
                                in
                                facilitating seamless
                                transactions, connecting clients with landowners through our trusted brokerage network.
                            </p>
                            <ul>
                                <li class="key"><i class="bi bi-check2-all"></i> <span
                                        class="fst-italic"><strong>Innovation:</strong>
                                        Embracing new technologies and trends to stay ahead in the market.</span></li>
                                <li class="key"><i class="bi bi-check2-all"></i> <span
                                        class="fst-italic"><strong>Reliability:</strong>
                                        Consistently delivering on our promises and ensuring customer satisfaction across
                                        all
                                        sectors.</span></li>
                                <li class="key"><i class="bi bi-check2-all"></i> <span
                                        class="fst-italic"><strong>Excellence:</strong>
                                        Pushing boundaries to achieve outstanding results in every project and service we
                                        undertake.</span>
                                </li>
                            </ul>
                            <p class="fst-italic" style="text-align: justify;">
                                In the field of IT Services, we offer cutting-edge IT training and support, empowering
                                businesses to
                                thrive in a digital landscape.
                                Our commitment to excellence extends to managing culinary ventures in the Food Trade
                                industry, where we
                                set new standards and create
                                lasting value for our clients and partners.
                                At AlKhamisi International Investments, these core values guide our approach to business and
                                ensure our
                                continued success.
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->


        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Here we are sharing our valuable services.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bi bi-pc-display"></i>
                            </div>
                            <a href="/itsupport" class="stretched-link">
                                <h3>IT Services</h3>
                            </a>
                            <p class="servicedes">Offering comprehensive IT solutions, our services include expert training
                                programs,
                                custom software development,
                                and reliable hardware and software supply.
                                We empower businesses with the tools and knowledge needed to excel in a rapidly evolving
                                digital
                                landscape.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="/realestate" class="stretched-link">
                                <h3>Real Estate</h3>
                            </a>
                            <p class="servicedes">We specialize in seamless real estate transactions across the GCC,
                                connecting clients with landowners through trusted brokerage services.
                                Our expertise spans property sales, development, and management, delivering premium spaces
                                tailored to your needs with integrity and transparency.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-buildings-fill"></i>
                            </div>
                            <a href="/construction" class="stretched-link">
                                <h3>Construction Services: Comprehensive MEP Solutions</h3>
                            </a>
                            <p class="servicedes">With a strong focus on quality and efficiency, our construction services
                                cover
                                everything from skilled labor provision to project management.
                                We deliver high-standard residential, commercial, and infrastructure projects that meet the
                                needs of our
                                clients.</p>
                        </div>
                    </div><!-- End Service Item -->

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                  </path>
                </svg>
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Industial Support</h3>
              </a>
              <p class="servicedes">We provide comprehensive industrial support services that cater to the unique needs
                of various sectors.
                From equipment maintenance and supply chain management to workforce training and operational consulting,
                our solutions are designed to enhance efficiency, productivity, and safety in industrial operations.
                We are committed to delivering reliable and effective support that helps industries thrive and meet
                their operational goals.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item --> --}}

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bi bi-airplane"></i>
                            </div>
                            <a href="/tourism" class="stretched-link">
                                <h3>Tourism</h3>
                            </a>
                            <p class="servicedes">Our tourism services are designed to showcase the beauty and culture of
                                Oman. We
                                develop and manage world-class resorts,
                                hotels, and tour operations,
                                creating unforgettable experiences for visitors while promoting the Sultanate as a top
                                global
                                destination.</p>
                            <a href="/tourism" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bi bi-truck"></i>
                            </div>
                            <a href="/foodtrade" class="stretched-link">
                                <h3>Food Trade</h3>
                            </a>
                            <p class="servicedes">AlKhamisi International Investments offers expert food trade services
                                across the GCC, covering import, export, and distribution.
                                We ensure compliance with regional standards and cultural preferences, providing sourcing,
                                warehousing, quality assurance, and market entry support.
                                Our extensive network and regional expertise make us your ideal partner for efficient food
                                trade.</p>
                            <a href="/foodtrade" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="/education" class="stretched-link">
                                <h3>Education</h3>
                            </a>
                            <p class="servicedes">Boost your IT skills with Al-Khamisi’s expert-led training and support
                                services.
                                From programming to AI, our flexible courses and hands-on learning prepare you for
                                real-world challenges,
                                while our ongoing support ensures your IT infrastructure stays strong.</p>
                            <a href="/education" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                  </path>
                </svg>
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Administrative Services</h3>
              </a>
              <p class="servicedes">Our Administrative Services are tailored to streamline business operations, offering
                support in areas such as office management,
                human resources, and compliance. We help organizations improve efficiency, maintain smooth workflows,
                and focus on their core activities by managing
                their administrative needs effectively.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section --> --}}


                    <!-- Clients Section -->
                    <!-- <section id="clients" class="clients section light-background">

                  <div class="container" data-aos="fade-up">

                    <div class="row gy-4">

                      <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                      </div> -->
                    <!-- End Client Item -->

                    <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                      </div> -->
                    <!-- End Client Item -->

                    <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                      </div> -->
                    <!-- End Client Item -->

                    <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                      </div> -->
                    <!-- End Client Item -->

                    <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                      </div> -->
                    <!-- End Client Item -->

                    <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                      </div> -->
                    <!-- End Client Item -->

                </div>

            </div>

        </section>

        <!-- /Clients Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Here our happy clients share their wonderful experiences</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                    data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" "="">
                        <p>
                          <i class=" bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                              Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum
                                velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim
                                duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                          </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt
                                culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                          </div>
                        </div><!-- End testimonial item -->

                      </div>
                      <div class="swiper-pagination"></div>
                    </div>

                  </div>

                </section><!-- /Testimonials Section -->



                <!-- Call To Action Section -->
                <!-- <section id="call-to-action" class="call-to-action section accent-background">

                  <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                      <div class="col-xl-10">
                        <div class="text-center">
                          <h3>Call To Action</h3>
                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>/Call To Action Section -->

                <!-- Portfolio Section -->


                <!-- /Portfolio Section -->

                <!-- Team Section -->
                <section id="team" class="team section light-background">

                  <!-- Section Title -->
                  <div class="container section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>This is our young, enthusiastic, energetic team</p>
                  </div><!-- End Section Title -->

                  <div class="container">

                    <div class="row gy-4">

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                          </div>
                        </div>
                      </div><!-- End Team Member -->

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                          </div>
                        </div>
                      </div><!-- End Team Member -->

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                          </div>
                        </div>
                      </div><!-- End Team Member -->

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                          </div>
                        </div>
                      </div><!-- End Team Member -->

                    </div>

                  </div>

                </section><!-- /Team Section -->

                <!-- Contact Section -->
                <section id="contact" class="contact section">

                  <!-- Section Title -->
                  <div class="container section-title" data-aos="fade-up">
                    <h2>Need Help? Feel free to ask</h2>
                    <p>You can share your Queries Here. We are eagerly waiting to here from you.</p>
                  </div><!-- End Section Title -->

                  <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                      <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234022.5205532338!2d58.25970410550102!3d23.58273783580163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffa8879aafc9%3A0xdb53876d0d79a72c!2sMuscat%2C%20Oman!5e0!3m2!1sen!2sin!4v1724998523592!5m2!1sen!2sin"
                        frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->

                    <div class="row gy-4">

                      <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                          <i class="bi bi-geo-alt flex-shrink-0"></i>
                          <div>
                            <h3>Address</h3>
                            <p>Al-Khamisi International</p>
                            <p>P.O BOX: 123</p>
                            <p>P.C: 123</p>
                            <p>CR.NO: 1488445</p>
                            <p>Muscat, Sultanate of Oman</p>
                          </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                          <i class="bi bi-telephone flex-shrink-0"></i>
                          <div>
                            <h3>Call Us</h3>
                            <p>+968 92165009</p>
                          </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                          <i class="bi bi-envelope flex-shrink-0"></i>
                          <div>
                            <h3>Email Us</h3>
                            <p>info@alkhamisiintl.com</p>
                          </div>
                        </div><!-- End Info Item -->

                      </div>

            <!-- Form Validaation-->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.querySelector('form');
                    if (form) {
                        form.addEventListener('submit', function(event) {
                            const name = document.getElementById('name-field').value;
                            const email = document.getElementById('email-field').value;
                            const subject = document.getElementById('subject-field').value;
                            const message = document.getElementById('message-field').value;

                            // Name validation
                            const nameRegex = /^[A-Za-z\s]{2,}$/;
                            if (!nameRegex.test(name)) {
                                alert(
                                    'Name must be at least 2 characters long and contain only letters and spaces.'
                                );
                                event.preventDefault(); // Prevent form submission
                                return;
                            }

                            // Email validation (additional check)
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (!emailRegex.test(email)) {
                                alert('Please enter a valid email address.');
                                event.preventDefault(); // Prevent form submission
                                return;
                            }

                            // Subject validation
                            if (subject.trim() === '') {
                                alert('Subject is required.');
                                event.preventDefault(); // Prevent form submission
                                return;
                            }

                            // Message validation
                            if (message.trim() === '') {
                                alert('Message is required.');
                                event.preventDefault(); // Prevent form submission
                                return;
                            }
                        });
                    }
                });
            </script>

<div class="col-lg-8">
  <form id="contact-form" action="{{ route('contact.submit') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
      @csrf
      <div class="row gy-4">
          <div class="col-md-6">
              <input type="text" name="name" id="name-field" class="form-control" placeholder="Your Name" pattern="[A-Za-z\s]{2,}" title="Name must be at least 2 characters long and contain only letters and spaces." required="">
          </div>
          <div class="col-md-6">
              <input type="email" class="form-control" id="email-field" name="email" placeholder="Your Email" required="">
          </div>
          <div class="col-md-12">
              <input type="text" class="form-control" name="subject" id="subject-field" placeholder="Subject" required="">
          </div>
          <div class="col-md-12">
              <textarea class="form-control" name="message" id="message-field" rows="6" placeholder="Message" required=""></textarea>
          </div>
          <div class="col-md-12 text-center">
              <div class="loading" style="display: none;">Loading</div>
              <div class="error-message" id="error-message" style="display: none; background: red;color:white"></div>
              <div class="sent-message" id="success-message" style="display: none; background: green;color:white"></div>
              <button type="submit">Send Message</button>
          </div>
      </div>
  </form>
</div><!-- End Contact Form -->

<script>
(function () {
  "use strict";

  let form = document.getElementById('contact-form');

  form.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent default form submission

      let action = form.getAttribute('action');
      if (!action) {
          displayError(form, 'The form action property is not set!');
          return;
      }

      form.querySelector('.loading').classList.add('d-block');
      form.querySelector('.error-message').classList.remove('d-block');
      form.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData(form);
      let recaptcha = form.getAttribute('data-recaptcha-site-key');

      if (recaptcha) {
          if (typeof grecaptcha !== "undefined") {
              grecaptcha.ready(function () {
                  grecaptcha.execute(recaptcha, { action: 'php_email_form_submit' })
                      .then(token => {
                          formData.set('recaptcha-response', token);
                          submitForm(form, action, formData);
                      })
                      .catch(error => {
                          displayError(form, error);
                      });
              });
          } else {
              displayError(form, 'The reCaptcha javascript API url is not loaded!');
          }
      } else {
          submitForm(form, action, formData);
      }
  });

  function submitForm(form, action, formData) {
      fetch(action, {
          method: 'POST',
          body: formData,
          headers: { 'X-Requested-With': 'XMLHttpRequest' }
      })
      .then(response => {
          if (response.ok) {
              return response.json(); // Expecting JSON response
          } else {
              throw new Error(`${response.status} ${response.statusText}`);
          }
      })
      .then(data => {
          form.querySelector('.loading').classList.remove('d-block');
          if (data.status === 'success') {
              form.querySelector('.sent-message').textContent = data.message;
              form.querySelector('.sent-message').classList.add('d-block');
              form.reset(); // Clear the form
          } else {
              throw new Error(data.message || 'Form submission failed without an error message.');
          }
      })
      .catch(error => {
          displayError(form, error.message);
      });
  }

  function displayError(form, message) {
      form.querySelector('.loading').classList.remove('d-block');
      form.querySelector('.error-message').textContent = message;
      form.querySelector('.error-message').classList.add('d-block');
  }

})();
</script>
                    </div>

                  </div>

                </section><!-- /Contact Section -->

              </main>

@endsection
