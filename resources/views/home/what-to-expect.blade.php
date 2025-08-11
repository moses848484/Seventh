<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
   <title>What to Expect - SDA Church</title>

   <!-- Bootstrap 4 CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
   <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
   <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
   <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />

   <style>
      /* --- original CSS adapted for Bootstrap 4 --- */
      body {
         font-family: 'Montserrat', sans-serif;
      }

      .hero-section {
         background: url('https://via.placeholder.com/1920x500') center/cover no-repeat;
         color: white;
         padding: 100px 0;
      }

      .expectation-card {
         background: #fff;
         border-radius: 8px;
         padding: 20px;
         text-align: center;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         margin-bottom: 20px;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
         height: 100%;
      }

      .expectation-icon {
         font-size: 40px;
         color: #007bff;
         margin-bottom: 15px;
      }

      .content-card {
         background: #fff;
         border-radius: 8px;
         overflow: hidden;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         margin-bottom: 30px;
      }

      .card-header-custom {
         background-color: #007bff;
         color: #fff;
         padding: 15px;
      }

      .card-body-custom {
         padding: 0;
      }

      .slider-container {
         position: relative;
         overflow: hidden;
         height: 100%;
      }

      .slider {
         display: flex;
         transition: transform 0.5s ease-in-out;
         width: 300%; /* Enough width for 3 slides */
      }

      .slider img {
         width: 100%;
         height: auto;
         display: block;
         flex-shrink: 0;
      }

      .slider-btn {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         background-color: rgba(0, 0, 0, 0.5);
         color: white;
         border: none;
         padding: 10px;
         cursor: pointer;
         z-index: 10;
      }

      .prev-btn {
         left: 10px;
      }

      .next-btn {
         right: 10px;
      }

      .text-content-area {
         padding: 20px;
      }

      .content-title {
         margin-bottom: 15px;
      }
   </style>
</head>

<body>
   <!-- Replace this include with your actual header content -->
   <!-- @include('home.header') -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">SDA Church</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
       aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="#">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">About</a>
         </li>
       </ul>
     </div>
   </nav>

   <!-- Hero Section -->
   <section class="hero-section text-center">
      <div class="container">
         <h1 class="display-4 mb-4">What to Expect</h1>
         <p class="lead">Your first visit to University SDA Church - we're excited to welcome you!</p>
      </div>
   </section>

   <!-- Expectation Cards -->
   <section class="py-5">
      <div class="container">
         <div class="row justify-content-center text-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex">
               <div class="expectation-card w-100">
                  <div class="expectation-icon">
                     <i class="fas fa-clock"></i>
                  </div>
                  <h4>Service Times</h4>
                  <p><strong>Sabbath School:</strong> 9:30 AM</p>
                  <p><strong>Worship Service:</strong> 11:00 AM</p>
                  <p><strong>Prayer Meeting:</strong> Wed 7:00 PM</p>
                  <small>Services last 60-90 min</small>
               </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex">
               <div class="expectation-card w-100">
                  <div class="expectation-icon">
                     <i class="fas fa-users"></i>
                  </div>
                  <h4>Friendly Atmosphere</h4>
                  <p>Our greeters will welcome you at the door and help you find your way. Our community is warm and welcoming!</p>
                  <small>Feel free to introduce yourself</small>
               </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex">
               <div class="expectation-card w-100">
                  <div class="expectation-icon">
                     <i class="fas fa-tshirt"></i>
                  </div>
                  <h4>Come As You Are</h4>
                  <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is that you're here.</p>
                  <small>No dress code required</small>
               </div>
            </div>
         </div>
      </div>

      <!-- Content Cards with Sliders -->
      <div class="container mt-5">
         <!-- Annual Theme -->
         <div class="content-card">
            <div class="card-header-custom">
               <h5 class="mb-0">
                  <i class="fas fa-heart mr-2"></i>Annual Theme ~ More Like Jesus
               </h5>
            </div>
            <div class="card-body-custom">
               <div class="row no-gutters h-100">
                  <div class="col-md-6">
                     <div class="slider-container">
                        <div class="slider">
                           <img src="https://via.placeholder.com/600x400?text=Theme+1" alt="Theme 1">
                           <img src="https://via.placeholder.com/600x400?text=Theme+2" alt="Theme 2">
                           <img src="https://via.placeholder.com/600x400?text=Theme+3" alt="Theme 3">
                        </div>
                        <button class="slider-btn prev-btn">&#10094;</button>
                        <button class="slider-btn next-btn">&#10095;</button>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="text-content-area">
                        <h3 class="content-title">More Like Jesus</h3>
                        <div class="content-text">
                           <p><strong>"And this is eternal life, that they may know You, the only true God, and Jesus Christ whom You have sent."</strong></p>
                           <p><em>~ John 17:3</em></p>
                           <p>Join us in our journey to become more like Jesus through fellowship, worship, and spiritual growth.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Baptism -->
         <div class="content-card">
            <div class="card-header-custom">
               <h5 class="mb-0">
                  <i class="fas fa-water mr-2"></i>Baptism
               </h5>
            </div>
            <div class="card-body-custom">
               <div class="row no-gutters h-100">
                  <div class="col-md-6">
                     <div class="slider-container">
                        <div class="slider">
                           <img src="https://via.placeholder.com/600x400?text=Baptism+1" alt="Baptism 1">
                           <img src="https://via.placeholder.com/600x400?text=Baptism+2" alt="Baptism 2">
                           <img src="https://via.placeholder.com/600x400?text=Baptism+3" alt="Baptism 3">
                        </div>
                        <button class="slider-btn prev-btn">&#10094;</button>
                        <button class="slider-btn next-btn">&#10095;</button>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="text-content-area">
                        <h3 class="content-title">New Life in Christ</h3>
                        <div class="content-text">
                           <p>Baptism is a public declaration of your faith and commitment to Jesus Christ.</p>
                           <p>If you are interested in baptism, speak with one of our elders or the pastor.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Sabbath School -->
         <div class="content-card">
            <div class="card-header-custom">
               <h5 class="mb-0">
                  <i class="fas fa-book mr-2"></i>Sabbath School
               </h5>
            </div>
            <div class="card-body-custom">
               <div class="row no-gutters h-100">
                  <div class="col-md-6">
                     <div class="slider-container">
                        <div class="slider">
                           <img src="https://via.placeholder.com/600x400?text=Sabbath+School+1" alt="Sabbath 1">
                           <img src="https://via.placeholder.com/600x400?text=Sabbath+School+2" alt="Sabbath 2">
                           <img src="https://via.placeholder.com/600x400?text=Sabbath+School+3" alt="Sabbath 3">
                        </div>
                        <button class="slider-btn prev-btn">&#10094;</button>
                        <button class="slider-btn next-btn">&#10095;</button>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="text-content-area">
                        <h3 class="content-title">Study & Fellowship</h3>
                        <div class="content-text">
                           <p>Join us for an engaging time of Bible study and discussion every Sabbath morning before worship.</p>
                           <p>Classes are available for all ages.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Bootstrap 4 JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <!-- Slider JS -->
   <script>
      document.querySelectorAll('.content-card').forEach(card => {
         const slider = card.querySelector('.slider');
         const slides = card.querySelectorAll('.slider img');
         const prevBtn = card.querySelector('.prev-btn');
         const nextBtn = card.querySelector('.next-btn');
         let index = 0;

         function showSlide(i) {
            if (i < 0) index = slides.length - 1;
            else if (i >= slides.length) index = 0;
            else index = i;
            slider.style.transform = `translateX(-${index * 100}%)`;
         }

         prevBtn.addEventListener('click', () => showSlide(index - 1));
         nextBtn.addEventListener('click', () => showSlide(index + 1));
      });
   </script>
</body>

</html>
