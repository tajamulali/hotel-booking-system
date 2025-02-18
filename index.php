<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaibyHotel-Home</title>
    <?php require('Include/links.php')?>
</head>
    
<body class="bg-light">

<?php require('Include/header.php')?>

<!-- Carousal -->

<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <?php
        $res = selectAll('carousel');
        while($row = mysqli_fetch_assoc($res))
        {
            $path = CAROUSEL_IMG_PATH;
            echo <<<data
              <div class="swiper-slide">
                <img src="$path$row[image]" class="w-100 d-block"/>
              </div>
            data;
        }
      ?>
      
      <div class="swiper-slide">
        <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
      </div>
    </div>
  </div>
</div>

<!-- check availability form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Adult</label>
            <select class="form-select shadow-none">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Children</label>
            <select class="form-select shadow-none">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-3 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Our Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">₹2000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-2">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa     
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-2">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television    
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Service     
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-2">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Childrens    
            </span>
          </div>
          <div class="mb-4">
            <h6 class="mb-2">Rating</h6>
            <span class="badge rounded-pill bg-light ">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">₹2000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-2">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa     
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-2">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television    
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Service     
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-2">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Childrens    
            </span>
          </div>
          <div class="mb-4">
            <h6 class="mb-2">Rating</h6>
            <span class="badge rounded-pill bg-light ">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">₹2000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-2">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa     
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-2">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television    
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Service     
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-2">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Childrens    
            </span>
          </div>
          <div class="mb-4">
            <h6 class="mb-2">Rating</h6>
            <span class="badge rounded-pill bg-light ">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>

<!-- Our Facilities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_43553.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_49949.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_41622.svg" width="80px">
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_27079.svg" width="80px">
      <h5 class="mt-3">Service</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_96423.svg" width="80px">
      <h5 class="mt-3">Room Heater</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
</div>

<!-- Testimonials -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

<div class="container mt-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/IMG_96423.svg" width="30px">
          <h2 class="m-0 ms-2">Random User1</h2>
        </div>
        <p>testimonials testimonials testimonials testimonials testimonials testimonials testimonials testimonials testimonials</p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/IMG_96423.svg" width="30px">
          <h2 class="m-0 ms-2">Random User1</h2>
        </div>
        <p>testimonials testimonials testimonials testimonials testimonials testimonials testimonials testimonials testimonials</p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/IMG_96423.svg" width="30px">
          <h2 class="m-0 ms-2">Random User1</h2>
        </div>
        <p>testimonials testimonials testimonials testimonials testimonials testimonials testimonials testimonials testimonials</p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">Know More >>></a>
</div>

<!-- Reach Us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg--1x mb-3 bg-white rounded">
     <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-outbound-fill"></i> +<?php echo $contact_r['pn1'] ?>
        </a>
          <br>
        <?php
          if($contact_r['pn2']!=''){
            echo<<<data
              <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-telephone-outbound-fill"></i> +$contact_r[pn2]
              </a>
            data;
          } 
        ?>
          
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow Us</h5>

        <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light rounded-pill shadow text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light rounded-pill shadow text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>
        <br>
        <?php 
          if($contact_r['tw']!=''){
            echo<<<data
              <a href="$contact_r[tw]" class="d-inline-block">
                <span class="badge bg-light rounded-pill shadow text-dark fs-6 p-2">
                  <i class="bi bi-twitter-x me-1"></i> Twitter-X
                </span>
              </a>
              data;
          }
        ?>
      
      </div>
    </div>
  </div>
</div>

<?php require('Include/footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script type="text/javascript" src="javaScript/script.js"></script>
</body>
</html>