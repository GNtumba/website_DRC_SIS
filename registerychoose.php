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
              <h5>28-29 November 2022</h5>
              <h5>DRC-Kinshasa, Fleuve congo Hotel </h5>
            </ul>


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
            <a href="index.php" class="logo">
              <img height="94px" src="assets/images/drc isi logo site.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="aboutdrc.php">HISTORY</a></li>
              <li><a href="sponsor.html">SPONSOR/EXHIBIT</a></li>
              <li><a href="registerychoose.php">REGISTER</a></li>
              <li><a href="parteners.php">Parteners</a></li>
              <li><a href="speakers.html">SPEAKERS</a></li>
              <li><a href="#contact">Contact Us/DOWLOADS</a></li>
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
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <h2>Choose your payment</h2>
        </div>
      </div>
    </div>
  </section>
  <section>
    <br>
    <div class="sha">
      <p></p>
      <a href="exhibit.php"><button class="btn btn-primary" type="submit">RANGS</button></a>
      <a href="exhibit2.php"><button class="btn btn-primary" type="submit">DOLLARS</button></a>
    </div> <br><br>
    </div>
    </div>
    </div>
    <section class="contact-us" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 align-self-center">
            <div class="row">
              <div class="col-lg-12">
                <form id="contact" action="#" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <h2>Let's get in touch</h2>
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
                  <span>+243822931202</span>
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
      <p>Copyright © DRCSIS. All Rights Reserved.

    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/isotope.js"></script>
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