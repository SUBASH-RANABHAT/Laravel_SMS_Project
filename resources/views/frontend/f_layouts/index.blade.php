 @extends('frontend.f_layouts.main')
 @section('main-container')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>{{ $b_post->page_title }}</h1>
      <h2>{{ $b_post->slogan }}</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#contact" class="btn-get-started scrollto">Contact Us</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Introduction ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Welcome to</h3>
              <h2>Nimble English Boarding School</h2>
              <p>.
                <b>Nimble English Boarding School</b>,{{ $b_post->content}}
                NEBS which is set up in a small boundary but it is a team of NEBS who are dedicated to seek options in every difficulty and comfort in every discomfort    
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
{{-- main chahu tujko merijan bepana --}}
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h1 data-aos="fade-up">{{ $a_post->about_title }}</h2>
            <p data-aos="fade-up">{{ $a_post->content }}, 
                                  meaningful and innovative learning experiences in a caring and collaborative learning community,
                                   supported by partnerships with parents and families. 
                                   Our emphasis will be on providing valued–based education in an intellectually stimulating learning environment, imparted by professionals trained in progressive teaching-learning approaches, 
                                   to transform the young learners into knowledgeable, confident, responsible and proactive individuals with an international-mindedness and a passion for lifelong learning. We aim to prepare individuals who can face the challenges in an uncertain and interconnected global community.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Notice Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Notices</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><img src="frontend/img/admission.jpg" height="50px" width="50px" style="border-radius: 50px;"/></div>
              <h4 class="title"><a href="">{{$n_post->notice1_title}}</a></h4>
              <p class="description">{{$n_post->content1}}</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="frontend/img/eca.jpg" height="50px" width="50px" style="border-radius: 50px;"/></div>
              <h4 class="title"><a href="">{{$n_post->notice2_title}}</a></h4>
              <p class="description">{{$n_post->content2}}</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="frontend/img/ref.jpg" height="50px" width="50px" style="border-radius: 50px;"/></div>
              <h4 class="title"><a href="">{{$n_post->notice3_title}}</a></h4>
              <p class="description">{{$n_post->content3}}</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="frontend/img/fv.jpg" height="50px" width="50px" style="border-radius: 50px;"/></div>
              <h4 class="title"><a href="">{{$n_post->notice4_title}}</a></h4>
              <p class="description">{{$n_post->content4}}</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="frontend/img/cultural.jpg" height="50px" width="50px" style="border-radius: 50px;"/></div>
              <h4 class="title"><a href="">{{$n_post->notice5_title}}</a></h4>
              <p class="description">{{$n_post->content5}}</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><img src="frontend/img/farewell.jpg" height="50px" width="50px" style="border-radius: 50px;"/></div>
              <h4 class="title"><a href="">{{$n_post->notice6_title}}</a></h4>
              <p class="description">{{$n_post->content6}}</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Notice Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative" data-aos="fade-up">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="frontend/img/principal.jpg" class="testimonial-img" alt="">
                <h3>Subash Lamichanne</h3>
                <h4>Principal</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  As the principal of our school, my message to students, parents, and staff is that we are committed to providing a diverse, inclusive, and high-quality education that develops well-rounded individuals with essential life skills.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="frontend/img/suraj.jpg" class="testimonial-img" alt="">
                <h3>Purna Subedi</h3>
                <h4>Chairman</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am grateful for the dedication of our students, parents, and staff in achieving excellence in all areas of our institution. Let us continue to work together to provide a well-rounded education that prepares our students for success in their future endeavors.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Gallery</h2>
          <p data-aos="fade-up"></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Events</li>
              <li data-filter=".filter-card">Farewell</li>
              <li data-filter=".filter-web">Sports</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="frontend/img/farewell.jpg" class="img-fluid" alt="" height="500 px" width="500 px">
            <div class="portfolio-info">
              <h4>Events</h4>
              <p>Dance and Farewell Program</p>
              <a href="frontend/img/s8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Events"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/s7.jpg" class="img-fluid" alt="" height="500 px" width="500 px">
            <div class="portfolio-info">
              <h4>ECA</h4>
              <p>Extra Curriculam Activities</p>
              <a href="frontend/img/s6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ECA"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="frontend/img/s9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sports</h4>
              <p>Games and Rewards</p>
              <a href="frontend/img/s1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sports"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/fv5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Field Visit</h4>
              <p>Educational Tour</p>
              <a href="frontend/img/s4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Field Visit"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/picnic.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Picnic</h4>
              <p>Refreshment Program</p>
              <a href="frontend/img/picnic.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="refreshment"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/cultural1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Cultural Program</h4>
              <p>App</p>
              <a href="frontend/img/cultural.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="cultural"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="frontend/img/smg.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Swimming and Refreshment</h4>
              <p>Refreshment</p>
              <a href="frontend/img/smg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Swimming"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/debate.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Debate Competition</h4>
              <p>Debate</p>
              <a href="frontend/img/debate.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="debate"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="frontend/img/result.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Progress Planning</h4>
              <p>Result Distribution</p>
              <a href="frontend/img/result.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallary Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
          <p data-aos="fade-up"></p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Bhandaritole Gangabu, Kathmandu, Nepal</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>nimbleboardingschool@gmail.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>01-4956873</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="{{ url('/') }}/User_Contact" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection