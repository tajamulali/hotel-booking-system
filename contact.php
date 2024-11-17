<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Hotel-Contact</title>
    <?php require('Include/links.php')?>
</head>
    
<body class="bg-light">

<?php require('Include/header.php')?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Contact Us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    <h6 class="text-center h-font">At Hotel SMA, we pride ourselves on offering a wide range of facilities to ensure a comfortable<br> 
    and enjoyable stay for our guests. Our state-of-the-art amenities are designed <br>
    to cater to the needs of both business and leisure travelers.
  </h6>
</div>

<?php
  $contact_q = "SELECT * FROM `contact_details` WHERE `s_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>


<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">

      <div class="bg-white rounded shadow p-4">
        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123200.36759234093!2d74.64919166764469!3d34.18727507714713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e182b72729b827%3A0x36115238bff28861!2sGanderbal%20191201!5e0!3m2!1sen!2sin!4v1728457338223!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/FTbym5zoAv45WtZY6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2"> 
          <i class="bi bi-geo-alt"></i> XYZ, Ganderbal J&K
        </a>
        
        <h5 class="mt-4">Call Us</h5>
          <a href="tel: +917006123456" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-outbound-fill"></i> +917006123456</a>
          <br>
          <a href="tel: +917006123456" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-outbound-fill"></i> +917006654321</a>
        <h5 class="mt-4">Email</h5>
          <a href="mailto: ask.smahotel@gmail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-at"></i> ask.smahotel@gmail.com</a>

        <h5 class="mt-4">Follow Us</h5>
          <a href="#" class="d-inline-block text-dark fs-6 me-2">
            <i class="bi bi-twitter-x me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-6 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-6">
            <i class="bi bi-instagram me-1"></i>
          </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Send a Message</h5>
            <div class="mt-3 me-3 ms-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3 me-3 ms-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3 me-3 ms-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3 me-3 ms-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
        </form> 
      </div>
    </div>
  </div>
</div>


<?php require('Include/footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script type="text/javascript" src="javaScript/script.js"></script>
</body>
</html>