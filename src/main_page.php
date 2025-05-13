<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SocieTREE-Page</title>
  <link rel="icon" href="../img/Icon-CRCL.png"/>

  <link rel="stylesheet" href="main.css" >
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <style>
    body { background: #f8f9fa; }
    .navbar-top { font-size: 0.95rem; }
    .navbar-top .nav-link { padding: 0 0.5rem; }
    .floating-btn {
      position: fixed;
      bottom: 1.5rem;
      right: 1.5rem;
      z-index: 1050;
    }
    @media (max-width: 767.98px) {
      .navbar-top .d-flex.flex-wrap { flex-direction: column; }
      .navbar-top .ms-auto { margin-left: 0 !important; }
    }
    .fullscreen-video-wrapper {
      position: relative;
      width:  100%;
      height: 30%;
      overflow: hidden;
      margin: 30px;
      padding: 0;
      margin-right: 30px;
    }
    .fullscreen-video-wrapper video {
      width: 100vw;
      height: 30vh;
      object-fit: cover;
      display: block;
    }
    .con{
        border: 1px solid black;
        border-radius: 100px;
    }
    .conHead{
        background: linear-gradient(to right, #02cd11, #02cd44, #02cd77);
    }
    .footer-card:hover {
      transform: scale(1.08);
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
      z-index: 2;
    }
    @media (max-width: 767.98px) {
      .footer-quicklinks .container {
        gap: 1rem !important;
      }
      .footer-card {
        width: 90px !important;
        padding: 0.5rem !important;
      }
      .footer-card img {
        height: 32px !important;
      }
    }
    /* Sidebar hover effects */
    .list-group-item {
      transition: all 0.3s ease;
      border: none;
      border-radius: 8px !important;
      background-color: #f8f9fa;
      color: #333;
    }
    .list-group-item:hover {
      transform: translateX(10px);
      background: linear-gradient(to right, #714074, #574074, #4a4074);
      color: white !important;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .list-group-item img {
      transition: all 0.3s ease;
    }
    .list-group-item:hover img {
      transform: scale(1.1);
    }
  </style>

</head>
<body>

<!-- Main Header -->
<header class="bg-white py-3 border-bottom" style="box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
  <div class="d-flex flex-wrap align-items-center px-3">
    <!-- Sidebar Toggle Button -->
    <button class="btn btn-link text-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <i class="fas fa-bars fa-lg"></i>
    </button>
    
    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold" id="sidebarLabel">SocieTREE</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="list-group">
          <a href="ST-ELECOM-System/src/login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/ELECOM.png" alt="ELECOM" height="30" class="me-3">
            ELECOM
          </a>
          <a href="ST-USG-System/src/USG-Login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/USG.png" alt="USG" height="30" class="me-3">
            USG
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/SITE.png" alt="SITE" height="30" class="me-3">
            SITE
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/PAFE.png" alt="PAFE" height="30" class="me-3">
            PAFE
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/AFPROTECH.png" alt="AFPROTECH" height="30" class="me-3">
            AFPROTECH
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/ACCESS.png" alt="ACCESS" height="30" class="me-3">
            ACCESS
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/ARCU.png" alt="ARCU" height="30" class="me-3">
            ARCU
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
            <img src="../img/REDCROSS.png" alt="REDCROSS" height="30" class="me-3">
            REDCROSS
          </a>
        </div>
      </div>
    </div>

    <img src="../img/Icon-NoBG.png" alt="Use data to see photos" height="60" class="con me-3">
    <div>
      <h2 class="mb-0 fw-bold">SocieTREE</h2>
    </div>
    <div class="ms-auto">
      <a href="index.php" class="fw-bold btn btn-danger"> <!-- ------------- -->
        <i class="fas fa-sign-out-alt me-2"></i>Logout
      </a>
    </div>
  </div>
</header>

<!-- Main Banner/Video Section -->
<div class="container-fluid my-4">
  <video class="w-100 rounded-4 shadow" style="height:clamp(200px,40vw,500px);object-fit:cover;" autoplay muted loop playsinline>
    <source src="https://ustpstratcomm.github.io/banner_embed/banner.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<!-- About Section -->
<div class="container-fluid my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-11">
      <div class="conHead rounded-4 px-4 py-3 mb-3 d-flex align-items-center text-end" style="min-height:64px;">
        <h3 class="text-white fw-bold mb-0 ms-auto">ABOUT SocieTREE</h3>
      </div>
      <div class="bg-white rounded-4 p-4 shadow-sm" style="font-size:1.3rem; text-align: justify;">
        <p>The University of Science and Technology of Southern Philippines (USTP) is a state university established on August 16, 2016, by virtue of Republic Act 10919 through the amalgamation of the Mindanao University of Science and Technology (MUST) in Cagayan de Oro City, Misamis Oriental and the Misamis Oriental State College of Agriculture and Technology (MOSCAT) in Claveria, Misamis Oriental. It is located in Northern Mindanao, the Gateway to Mindanao, which offers a strategic locational advantage for the institution to train and develop students from all the other regions.</p>
        <p>Adhering to its general mandate to primarily provide advanced education; higher technological, professional, and advanced instruction; and advanced research and extension work, required for global competitiveness, the University envisions becoming a nationally recognized S&T University providing the vital link between education and the economy. As the university fulfills this mandate, it moves from within its immediate context and toward its larger international environment, as the first and only national university of science and technology in the country. It will operate as such that it will have seamless knowledge and collaboration with its stakeholders in the private and public sectors, the labor market, business, and industry.</p>
      </div>
    </div>
  </div>
</div>

<!-- Footer with Hoverable Cards -->
<div class="footer-quicklinks py-5" style="background: linear-gradient(to right, #644b37, #643739, #643744);">
  <div class="container-fluid d-flex flex-wrap justify-content-center gap-4">
    <!-- Card 1 -->
    <a target="_blank" href="ST-ELECOM-System/src/login.php" class="text-decoration-none">
      <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
        <img src="../img/ELECOM.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
        <div class="fw-bold">ELECOM</div>
      </div>
    </a>
    <!-- Card 2 -->
    <a target="_blank" href="ST-USG-System/src/USG-Login.php" class="text-decoration-none">
      <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
        <img src="../img/USG.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
        <div class="fw-bold">USG</div>
      </div>
    </a>
    <!-- Card 3 -->
    <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
      <img src="../img/SITE.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
      <div class="fw-bold">SITE</div>
    </div>
    <!-- Card 4 -->
    <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
      <img src="../img/PAFE.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
      <div class="fw-bold">PAFE</div>
    </div>
    <!-- Card 5 -->
    <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
      <img src="../img/AFPROTECH.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
      <div class="fw-bold">AFPROTECH</div>
    </div>
    <!-- Card 6 -->
    <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
      <img src="../img/ACCESS.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
      <div class="fw-bold">ACCESS</div>
    </div>
    <!-- Card 7 -->
    <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
      <img src="../img/ARCU.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
      <div class="fw-bold">ARCU</div>
    </div>
    <!-- Card 8 -->
    <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 11rem; transition: transform 0.2s, box-shadow 0.2s;">
      <img src="../img/REDCROSS.png" alt="Use data to see photos" class="img-fluid mb-2" style="height:48px;">
      <div class="fw-bold">REDCROSS</div>
    </div>
    
  </div>
</div>

</body>
</html> 