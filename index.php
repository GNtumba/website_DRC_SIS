<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>DRCSIS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">

          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
<<<<<<< HEAD
=======

>>>>>>> 467436b721a7a66fd876d559afc7f94e2b9e3c1d
              <h6>29-30 November 2022</h6>
              <h6>DRC-Kinshasa, Fleuve Congo Hotel </h6>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="" class="logo">
              <img height="95px" ; width="60px" src="assets/images/drc isi logo site.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class=""><a href="#meetings">ABOUT US</a></li>
<<<<<<< HEAD
              <li><a href="drcsocial.php">DRC Social Innovation Summit 2022 </a></li>
              <li class="has-sub">
                <a href="javascript:void(0)"> NETWORK</a>
                <ul class="sub-menu">
                  <li><a href="network.php">NETWORK DRC-SIS</a></li>
=======
              <li><a href="drcsocial.php">DRC Social Innovation Summit 1 </a></li>
              <li class="has-sub">
                <a href="javascript:void(0)"> NETWORK</a>
                <ul class="sub-menu">
                  <li><a href="#network.php">NETWORK DRC-SIS</a></li>
>>>>>>> 467436b721a7a66fd876d559afc7f94e2b9e3c1d
                  <li><a href="project.html">SUPPORTED PROJECT</a></li>
                  <li><a href="index.php">SEARCH AND PUBLICATION</a></li>
                </ul>
              </li>
              <li class=""><a href="#contact">Contact Us</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
<<<<<<< HEAD
    <img src="assets/images/BACKGROUND (2).jpg" alt="">
=======
    <img src="assets/images/BACKGROUND (1).jpg" alt="">

>>>>>>> 467436b721a7a66fd876d559afc7f94e2b9e3c1d

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <!-- ***** Main Banner Area End ***** -->

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        
          <div class="section-heading">
            <h2> WHO WE ARE </h2>
          </div>
        
        <div class="col-lg-98">
          <div class="categories">
            <p>DRC Social Innovation Summit (DRC-SIS) is a partnership initiative established to catalyse interests, join efforts and facilitate research, capacity building, networking and investment in the social innovation sector in the Democratic Republic of Congo and the African continent.
              We envision a society free of poverty through social businesses, and where everyone is an entrepreneur and a changemaker for the public good.
              We believe that a seed can grow into a piece of the sky and we want to create a dynamic national and regional plateform for increased collaboration across sectors and challenge each of our network member to take action towards reaching the global Sustainable Dévelopment Goals and creating a better future for all.
            </p>
          </div>
        </div>
      </div>

  </section>
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="#" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Contact us</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Your name...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Subject...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button name="create" type="submit" id="form-submit" class="button">Send message now</button>
                    </fieldset>
                  </div>
                </div>
              </form>
              <?php
              include('classes/Contact.class.php');
              $contact = new Contact;
              if (isset($_POST['create'])) {
                $contact->create($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>+243810780378</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <a href=""><span>communicationdrcsis@gmail.com</span></a>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Democratic Republic of Congo , 15 A.v Bandoma,Q/GB, Kinshasa</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.drcsis.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer">
    <p> © DRCSIS. All Rights Reserved.

  </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</body>

</html>