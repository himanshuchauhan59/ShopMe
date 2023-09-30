<?php
  include "../attaches/navbar.php";
?>

<?php
if(isset($_REQUEST['type']) == 'ok')
{
  ?>
    <script>
        alert('Your Inquirie are submited');
    </script>
  <?php
}
?>
<!DOCTYPE html><html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We
          are looking forward to hearing from you! We reply within 24 hours.Willpower is a good start, but it’s very
          difficult to stay on track simply through willpower.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 info">
              <i class="bx bx-map"></i>
              <h4>Address</h4>
              <p>Raiya chock,<br>Rajkot, Gujarat.</p>
            </div>
            <div class="col-lg-6 info">
              <i class="bx bx-phone"></i>
              <h4>Call Us</h4>
              <p><a href="tel:8595987525" style="text-decoration: none;"> 88660 40296 </a><br><a href="tel:8595987525">
                  84696 25789 </a></p>
            </div>
            <div class="col-lg-6 info">
              <i class="bx bx-envelope"></i>
              <h4>Email Us</h4>
              <p><a href="mailto:devhimanshu59@gmail.com">To Himanshu </a><br><a
                  href="mailto:devhimanshu59@gmail.com"> To Divyesh </a></p>
            </div>
            <div class="col-lg-6 info">
              <i class="bx bx-time-five"></i>
              <h4>Working Hours</h4>
              <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <form action="contact_send.php" method="post" class="php-email-form" data-aos="fade-up">
            <div class="form-group">
              <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group mt-3">
              <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group mt-3">
              <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><input type="submit" name="submit" value="Send Message"></div>
          </form>
          <div></div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>