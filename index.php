<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-5 sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand me-5 fw=bold fs-3 h-font" href="index.php">SMA Hotel</a>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2" href="#">Rooms</a>
              </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Facilities</a>
              </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Contact Us</a>
              </li>
                 <li class="nav-item">
                <a class="nav-link me-2" href="#">About</a>
            </ul>
            <div class="d-flex">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                LogIn
              </button>
              <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
              </button>
            </div>
          </div>
        </div>
      </nav>

<!-- Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
          
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person fs-3 me-2"></i>User Login
            </h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          </div>
          <div class="mb-3 me-3 ms-3">
            <labelclass="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-5 me-3 ms-3">
            <labelclass="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <button type="submit" class="btn btn-dark shadow-none me-3 ms-3">LogIn</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none me-2">Forget Password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- Register Modal -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="">
          
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-fill-add fs-3 me-2"></i>User Registration
            </h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
              Note: Your details must match with ID(Aadhar card, passpart, driving license, etc.) that will be required during check-in.     
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <labelclass="form-label">Name</label>
                    <input type="text" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <labelclass="form-label">Email</label>
                    <input type="email" class="form-control shadow-none">
                  </div>  
                  <div class="col-md-6 ps-0 mb-3">
                    <labelclass="form-label">Phone Number</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <labelclass="form-label">picture</label>
                    <input type="File" class="form-control shadow-none">
                  </div> 
                  <div class="col-md-12 p-0 mb-3">
                    <labelclass="form-label">Address</label>
                    <textarea class="form-control shadow-none" rows="1"></textarea>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <labelclass="form-label">Pin Code</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <labelclass="form-label">Date of Birth</label>
                    <input type="date" class="form-control shadow-none">
                  </div> 
                  <div class="col-md-6 ps-0 mb-3">
                    <labelclass="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <labelclass="form-label">Confirm Password</label>
                    <input type="password" class="form-control shadow-none">
                  </div>   
                </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none me-3 ms-3">Register</button>
            </div>
          </div>  
        </form>
      </div>
    </div>
  </div>

<div class="container-fluid px-lg-4 mt-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/IMG_55677.png" class="w-100 d-block"/>
      </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
</script>
</body>
</html>

