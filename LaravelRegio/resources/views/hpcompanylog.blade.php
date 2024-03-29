<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../bootstrap-css/main.css" />
    <link rel="stylesheet" href="../css/newnav.css" />
    <link rel="stylesheet" href="../bootstrap-css/footer.css" />
    <link rel="stylesheet" href="../bootstrap-css/homepage.css" />
    <link rel="stylesheet" href="../bootstrap-css/navloggedin.css" />
    <link rel="stylesheet" href="../bootstrap-css/component.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5109247c85.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../js/mainpage.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#loading").modal("show");

            var duration = 2000; // 2 seconds
            setTimeout(function() {
                // Close the modal
                $("#loading").modal("hide");
                $("#welcome").modal("show");
            }, duration);
        });
    </script> -->
    <title>Homepage</title>
</head>

<body>
    <nav>
        <div class="nav1">
            <img class="logo" src="../assets/logoCompany.png" alt="Logo Regio" />
            <a class="navi-button" href="{{ route('hpComplog') }}#talentsearch">Talent</a>
            <a class="navi-button" href="/compProject">My Project</a>
            <a class="navi-button" href="/aboutCompLog">About</a>
        </div>
        <div class="nav2">
            <!-- <button type="button" class="position-relative notif-button">
          <i class="fa-solid fa-bell" style="color: #2c5395"></i>
          <span
            class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle notif"
          >
            <span class="visually-hidden">New alerts</span>
          </span>
        </button> -->
            <button type="button" class="position-relative notif-button">
                <i class="fa-solid fa-bell" style="color: #2c5395"></i>
            </button>

            <i class="fa-solid fa-globe" style="color: #2c5395"></i>
            <select>
                <option>EN</option>
                <option>ID</option>
            </select>

            <div class="logged-in">
                <button class="collapse-acc dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user" style="color: #2c5395"></i>
                    <p class="user-nav nav-acc">Jeremy</p>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/companyprofile">Profile</a></li>
                    <li><a class="dropdown-item" href="/hpCompany">Log out</a></li>
                </ul>

                <hr class="navline" />
                <p class="company-nav nav-acc">Company</p>
            </div>


            <button class="burger-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fa-solid fa-bars fa-2xl" style="color: #2c5395"></i>
            </button>

            <div class="offcanvas offcanvas-end menu-navigation" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <img class="white-regio" src="../assets/white-regio.png" alt="White Regio">
                </div>
                <div class="offcanvas-body">
                    <div>
                        <a href="{{ route('hpCompanylog') }}#talentsearch">Talent</a>
                        <a href="/compProject">My Project</a>
                        <a href="/aboutCompLog">About</a>
                    </div>
                    <a type="button" class="login-button-canvas" href="/hpCompany">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal loading -->
    <div class="modal fade" id="loading" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Loading</h1>
                    <span class="reset-inst">We'll be right with you.</span>
                </div>
                <div class="modal-body">
                    <div class="spinner-border justify-content-center spinner" style="width: 5rem; height: 5rem" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal logged-in -->
    <div class="modal fade" id="welcome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Welcome Back!</h1>
                </div>
                <div class="modal-body">
                    <img class="welcome-img" src="../assets/greeting.png" alt="Welcome" />
                    <span class="greeting-text">Hi, Jeremy Wugouw. Glad to see u again!!</span>
                    <button type="button" class="b-homepage" data-bs-dismiss="modal">
                        Back to Homepage
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="main-content">
        <div>
            <!-- <img class="img-landing" src="../assets/Landing.png" alt="Landing" /> -->
            <div class="img-landing"></div>
            <div class="landing-component">
                <h1 class="main-text">
                    Find Your <span style="color: yellow">Perfect Talent</span> Here
                    Simple, Easy, & Fast
                </h1>
                <button class="to-post-job" type="button" onclick="window.location.href='/jobpost'">
                    Posting Job
                </button>

            </div>
        </div>
    </div>

    <!-- Talent Section -->
    <div>
        <div class="form-floating search-bar" id="talent">
            <input type="text" class="form-control search-input" id="talentsearch" placeholder="Search" />
            <label class="search-label" for="search">Search...</label>
            <button class="search-button" type="button">
                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff"></i>
            </button>
        </div>

        <div class="main">
            <div class="first-con grab-scroll">
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status">
                                        <p>Open Hiring</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status talent-status-red">
                                        <p>Not Available</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status talent-status-red">
                                        <p>Not Available</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status">
                                        <p>Open Hiring</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status talent-status-red">
                                        <p>Not Available</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status">
                                        <p>Open Hiring</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status">
                                        <p>Open Hiring</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
                <div class="box-shadow">
                    <div class="talent-con unselectable" onclick="window.location.href='/companylogtalentprofile'">
                        <div>
                            <div class="talent-info">
                                <div class="talent-header">
                                    <div class="photo-profile"></div>
                                    <div class="talent-header-info">
                                        <p class="talent-name">James Welton</p>
                                        <p class="talent-skill">UI/UX Designer</p>
                                    </div>
                                    <div class="talent-status">
                                        <p>Open Hiring</p>
                                    </div>
                                </div>
                                <div class="talent-main">
                                    <p class="talent-desc">
                                        A career in Information System, specifically in the areas of
                                        UI/UX Designer, that will optimally utilizeanalytical,
                                        time...
                                    </p>
                                    <div class="talent-request">
                                        <div class="talent-request-logo">
                                            <div>
                                                <i class="fa-solid fa-location-dot" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-money-bill" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-business-time" style="color: rgb(126, 126, 126)"></i>
                                            </div>
                                        </div>
                                        <div class="talent-request-text">
                                            <p>Wirosari, Indonesia</p>
                                            <p>IDR 7,000,000 - 12,000,000</p>
                                            <p>8.00 AM - 5.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="talent-button">
                            <button class="b-view-profile">View Profile</button>
                            <button class="b-view-cv">View CV</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-con">
                <div class="my-project">
                    <p>My Project</p>
                    <div class="project-sum">
                        <div class="project-img">
                            <img src="../assets/Foto Project.png" alt="Project Image" />
                        </div>
                        <div class="project-detail">
                            <div class="project-first">
                                <p>Pemasangan Pipa Gas Alam</p>
                                <div>
                                    <p>Done</p>
                                </div>
                            </div>
                            <div class="project-second">
                                <p>Jl. Evakuasi no.14, Cirebon, Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-sum">
                        <div class="project-img">
                            <img src="../assets/Foto Project1.png" alt="Project Image" />
                        </div>
                        <div class="project-detail">
                            <div class="project-first">
                                <p>Pemasangan Listrik</p>
                                <div class="project-wip">
                                    <p>In Progress</p>
                                </div>
                            </div>
                            <div class="project-second">
                                <p>
                                    Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="project-sum" onclick="window.location.href='/cpdetailproject'">
                        <div class="project-img">
                            <img src="../assets/Foto Project2.png" alt="Project Image" />
                        </div>
                        <div class="project-detail">
                            <div class="project-first">
                                <p>Pemasangan Plumbing</p>
                                <div class="project-pending">
                                    <p>Pending</p>
                                </div>
                            </div>
                            <div class="project-second">
                                <p>
                                    Jl. Abdul Muthalib, Samarinda, Kalimantan Timur, Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="/compProject">See all project</a>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer>
        <div class="footer-regio">
            <div class="main-footer">
                <img class="footer-img" src="../assets/footer-logo.png" alt="footer-regio" />
                <p class="footer-text">
                    <b>Regio</b> is a website that allows users to find workers in
                    specific areas for projects they have posted on the platform. The
                    website functions as a platform that connects individuals or
                    businesses in need of specific services with skilled professionals
                    who can meet those needs. Users can create project postings on
                    Regio, outlining the details and specifications of the job they
                    require.
                </p>
            </div>
            <div class="footer-contact">
                <div>
                    <p>Follow Us</p>
                    <div class="contact-icon">
                        <i class="fa-brands fa-facebook-f fa-lg"></i>
                        <i class="fa-solid fa-envelope fa-lg"></i>
                        <i class="fa-brands fa-twitter fa-lg"></i>
                        <i class="fa-brands fa-instagram fa-lg"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg"></i>
                    </div>
                </div>
                <div class="contact-regio">
                    <p>Contact Us</p>
                    <div class="contact-text">
                        <p>E-mail Address: <a href="#">hi@Regio.co.id</a></p>
                        <p>WhatsApp Contact: 0823-2131-329</p>
                        <p>QnA: <a href="#">Feedback</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">Copyright © 2023 Regio.</div>
    </footer>
</body>

</html>