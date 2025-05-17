<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SocieTREE</title>
    <link rel="icon" href="img/Icon-CRCL.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
<style>
    body {
        background: #f8f9fa;
    }
    .navbar-top {
        font-size: 0.95rem;
    }
    .navbar-top .nav-link {
        padding: 0 0.5rem;
    }
    .floating-btn {
        position: fixed;
        bottom: 1.5rem;
        right: 1.5rem;
        z-index: 1050;
    }
    @media (max-width: 767.98px) {
      .navbar-top .d-flex.flex-wrap {
            flex-direction: column;
        }
      .navbar-top .ms-auto {
            margin-left: 0 !important;
        }
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
    <!-- Skip to main content link -->
    <a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>
    
    <!-- Main Header -->
    <header class="bg-white border-bottom" style="box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <div class="d-flex flex-wrap align-items-center px-3">

    <!-- Sidebar Toggle Button -->
    <button class="btn btn-link text-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar" aria-label="Toggle navigation menu">
        <h3 class="fw-bold  my-3"><i class="bi bi-list"></i></h3>
    </button>

    <!-- Sidebar -->
    <nav class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel" role="navigation">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold" id="sidebarLabel"><i class="bi bi-people-fill me-2" style="color: #714074;"></i>STUDENT ORGANIZATIONS</h5>
        <button type="button" class="btn btn-link text-dark p-0 ms-5" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="bi bi-chevron-left fs-4"></i>
        </button>
      </div>

      <div class="offcanvas-body d-flex flex-column">
        <div class="list-group flex-grow-1">
            <a href="ST-ELECOM-System/login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/ELECOM.png" alt="ELECOM" height="30" class="me-3">
                ELECOM
            </a>

            <a href="ST-USG-System/USG-Login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/USG.png" alt="USG" height="30" class="me-3">
                USG
            </a>

            <a href="ST-SITE-System/login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/SITE.png" alt="SITE" height="30" class="me-3">
                SITE
            </a>

            <a href="ST-PAFE-System/Login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/PAFE.png" alt="PAFE" height="30" class="me-3">
                PAFE
            </a>

            <a href="ST-AFFROTECH-System/Login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/AFPROTECH.png" alt="AFPROTECH" height="30" class="me-3">
                AFPROTECH
            </a>

            <a href="ST-ACCESS-System/mae-admin-part/login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/ACCESS.png" alt="ACCESS" height="30" class="me-3">
                ACCESS
            </a>

            <a href="ST-ARCU-System/ARCU-Login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/ARCU.png" alt="ARCU" height="30" class="me-3">
                ARCU
            </a>

            <a href="ST-REDCROSS-System/REDPRJ/login.php" class="list-group-item list-group-item-action d-flex align-items-center mb-2 fs-5 fw-bold">
                <img src="img/REDCROSS.png" alt="REDCROSS" height="30" class="me-3">
                REDCROSS
            </a>
        </div>
      </div>
    </nav>

    <img src="img/Icon-NOBG.png" alt="SocieTREE Logo" height="40" class="con me-3">
    <div>
        <h4 class="mb-0 fw-bold">SocieTREE</h4>
    </div>
    </div>
    </header>

    <!-- Main Banner/Video Section -->

    <div id="main-content" class="container-fluid my-4">
        <video class="w-100 rounded-4 shadow" style="height:clamp(200px,40vw,500px);object-fit:cover;" 
               autoplay muted loop playsinline
               loading="lazy"
               title="USTP Campus Video">
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

                <div class="bg-white rounded-4 p-4 shadow-sm" style="font-size:1.2rem; text-align: justify;">
                    <p class="mb-4"><span class="fw-bold">SocieTREE</span> is an innovative digital ecosystem at the University of Science and Technology of Southern Philippines (USTP) that unites and empowers the diverse student organizations across campus. Acting as both a technological platform and community hub, SocieTREE facilitates seamless collaboration, enhances student engagement, and nurtures the next generation of leaders through integrated digital solutions.</p>

                    <p class="mb-4">As the central nexus for USTP's vibrant organizational landscape, <span class="fw-bold">SocieTREE</span> cultivates a culture of excellence, innovation, and civic responsibility. The platform supports a thriving network of student groups, including:</p>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p class="mb-3"><span class="fw-bold">ELECOM (Electronics Committee)</span> – Fosters innovation in electronics and engineering through hands-on projects, technical workshops, and industry partnerships that prepare students for technological careers.</p>

                            <p class="mb-3"><span class="fw-bold">USG (University Student Government)</span> – Serves as the voice of the student body, advocating for student rights, implementing welfare programs, and organizing campus-wide initiatives that enhance university life.</p>

                            <p class="mb-3"><span class="fw-bold">SITE (Society of Information Technology Enthusiasts)</span> – Creates a dynamic community for tech innovators, offering coding bootcamps, hackathons, and tech forums that bridge classroom learning with real-world applications.</p>

                            <p class="mb-3"><span class="fw-bold">PAFE (Professional Association of Future Educators)</span> – Shapes tomorrow's teachers through educational outreach, teaching methodology workshops, and community-based learning activities.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-3"><span class="fw-bold">AFPROTECH (Association of Food Processing and Technology)</span> – Drives innovation in food science through research initiatives, industry immersions, and sustainable food technology projects.</p>

                            <p class="mb-3"><span class="fw-bold">ACCESS (Active Certified Computer-Enhanced Student Society)</span> – Advances digital literacy across campus through certification programs, software training, and technology assistance services.</p>

                            <p class="mb-3"><span class="fw-bold">ARCU (Arts and Culture Union)</span> – Celebrates creative expression through performing arts showcases, cultural festivals, and artistic collaborations that enrich campus diversity.</p>

                            <p class="mb-3"><span class="fw-bold">RED CROSS Youth – USTP Chapter</span> – Builds a community of humanitarian volunteers dedicated to health advocacy, disaster preparedness, and emergency response training.</p>
                        </div>
                    </div>

                    <p class="mb-0">Through <span class="fw-bold">SocieTREE</span>, these organizations access integrated management tools, collaborative spaces, and resource-sharing platforms that streamline operations and amplify their impact. By bringing together diverse student talents and interests under one digital canopy, SocieTREE transforms the USTP student experience while preparing graduates who are not only academically proficient but also socially conscious, digitally literate, and leadership-ready for an increasingly interconnected world.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer with Hoverable Cards -->

    <div class="footer-quicklinks py-5" style="background: linear-gradient(to right, #644b37, #643739, #643744);">
        <div class="container-fluid d-flex flex-wrap justify-content-center gap-4">

        <!-- Card 1 -->
        <a target="_blank" href="ST-ELECOM-System/login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/ELECOM.png" alt="ELECOM Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">ELECOM</div>
            </div>
        </a>
    <!-- Card 2 -->
        <a target="_blank" href="ST-USG-System/USG-Login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/USG.png" alt="USG Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">USG</div>
            </div>
        </a>
    <!-- Card 3 -->
        <a target="_blank" href="ST-SITE-System/login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/SITE.png" alt="SITE Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">SITE</div>
            </div>
        </a>
    <!-- Card 4 -->
        <a target="_blank" href="ST-PAFE-System/Login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/PAFE.png" alt="PAFE Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">PAFE</div>
            </div>
        </a>
    <!-- Card 5 -->
        <a target="_blank" href="ST-AFFROTECH-System/Login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/AFPROTECH.png" alt="AFPROTECH Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">AFPROTECH</div>
            </div>
        </a>
    <!-- Card 6 -->
        <a target="_blank" href="ST-ACCESS-System/mae-admin-part/login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/ACCESS.png" alt="ACCESS Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">ACCESS</div>
            </div>
        </a>
    <!-- Card 7 -->
        <a target="_blank" href="ST-ARCU-System/ARCU-Login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/ARCU.png" alt="ARCU Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">ARCU</div>
            </div>
        </a>
    <!-- Card 8 -->
        <a target="_blank" href="ST-REDCROSS-System/REDPRJ/login.php" class="text-decoration-none" rel="noopener">
            <div class="footer-card text-center bg-white rounded-3 shadow-sm p-3" style="width: 8rem; transition: transform 0.2s, box-shadow 0.2s;">
                <img src="img/REDCROSS.png" alt="REDCROSS Organization Logo" class="img-fluid mb-2" style="height:48px;">
                <div class="fw-bold">REDCROSS</div>
        </div>
        </a>
    
    </div>
    </div>

</body>
</html>