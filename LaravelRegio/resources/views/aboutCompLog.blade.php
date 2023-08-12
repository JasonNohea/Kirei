<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />

    <!-- File CSS-->

    <link rel="stylesheet" href="{{ url('css/main.css')}}" />
    <link rel="stylesheet" href="{{ url('css/newnav.css')}}" />
    <link rel="stylesheet" href="../bootstrap-css/footer.css" />
    <link rel="stylesheet" href="../bootstrap-css/aboutComp.css" />
    <link rel="stylesheet" href="../bootstrap-css/navloggedin.css" />

    <!-- Font & Javascript -->

    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <script src="https://kit.fontawesome.com/5109247c85.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ url('js/mainpage.js')}}"></script>
    <script src="../js/mainpage.js" defer></script>
    <!-- <script src="{{ asset('js/scroll.js') }}"></script> -->
    <title> Regio - Job Portal di Indonesia </title>
</head>

<body>
    <!-- Navbar + Header Login -->

    <nav>
        <div class="nav1">
            <img class="logo" src="../assets/logoCompany.png" alt="Logo Regio" />
            <a class="navi-button" href="{{ route('hpComplog') }}#talentsearch">Talent</a>
            <a class="navi-button" href="/compProject">My Project</a>
            <a class="navi-button" href="/aboutComp">About</a>
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
                        <a href="{{ route('hpComplog') }}#talentsearch">Talent</a>
                        <a href="/compProject">My Project</a>
                        <a href="/aboutComp">About</a>
                    </div>
                    <a type="button" class="login-button-canvas" href="/hpCompany">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content needs-validation" action="/hpCompanylog" method="post" name="login" novalidate>
                @csrf
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Welcome to Regio!</h1>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
                            <label for="email">Email<span class="required">*</span></label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                            <label for="password">Password<span class="required">*</span></label>
                        </div>
                    </div>
                    <a class="forgot-pass-anchor" href="#" data-bs-target="#forgot-pass" data-bs-toggle="modal">Forgot Password?</a>
                    <div class="button-con">
                        <button class="form-button login-submit" type="submit">
                            Login
                        </button>
                        <button type="button" class="form-button login-cancel" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                    <div class="opt-acc">
                        <hr class="hr-decor" />
                        <p>or</p>
                        <hr class="hr-decor" />
                    </div>
                    <div class="button-con-acc">
                        <button class="form-button login-google acc-animation">
                            <svg class="logo-text logo-login" width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.0116 8.98303C30.0005 7.98708 29.9969 6.98376 29.9932 5.98413H27.0158C27.0048 6.98007 26.9974 7.9797 26.99 8.98303C25.9877 8.98671 24.9928 8.99409 23.9979 9.00516V11.9893C24.9928 12.0004 25.9951 12.0077 26.99 12.0188C27.0011 13.0148 27.0011 14.0144 27.0084 15.0103H29.9895C29.9932 14.0144 30.0005 13.0148 30.0079 12.0114C31.0102 12.0004 32.0051 11.9967 33 11.9856V9.00147C32.0088 8.99409 31.0065 8.99409 30.0116 8.98303ZM10.4819 8.99778C10.4782 10.1892 10.4819 11.3844 10.4856 12.5758C12.4828 12.6422 14.4837 12.6127 16.4808 12.6422C15.6002 17.0797 9.57544 18.5183 6.38805 15.619C3.10854 13.0775 3.2633 7.50386 6.67178 5.14311C9.05588 3.23975 12.4422 3.70821 14.8263 5.35705C15.7623 4.49021 16.6393 3.56067 17.4831 2.60161C15.5007 1.01917 13.0687 -0.10957 10.4819 0.00846747C5.07993 -0.172278 0.116442 4.56399 0.0280057 9.97528C-0.31837 14.398 2.58529 18.7322 6.68284 20.2962C10.7656 21.8713 16.0018 20.7979 18.6107 17.1239C20.3315 14.8038 20.7037 11.8159 20.501 9.00885C17.1589 8.98303 13.8204 8.98671 10.4819 8.99778Z" fill="white" fill-opacity="0.35" />
                            </svg>
                            <p class="logo-text text-login">Google</p>
                        </button>
                        <button class="form-button login-linkedin acc-animation">
                            <svg class="logo-text logo-login" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.80045 7.31745H11.7001V9.25995C12.2619 8.14275 13.7025 7.13895 15.8665 7.13895C20.0151 7.13895 21 9.36285 21 13.4431V21H16.8V14.3724C16.8 12.0487 16.2383 10.7383 14.8082 10.7383C12.8247 10.7383 12.0004 12.1506 12.0004 14.3713V21H7.80045V7.31745ZM0.5985 20.8215H4.7985V7.13895H0.5985V20.8215ZM5.40015 2.6775C5.40031 3.02954 5.33049 3.3781 5.19476 3.70292C5.05902 4.02774 4.86008 4.32234 4.6095 4.5696C4.10172 5.07426 3.4144 5.35674 2.6985 5.355C1.98386 5.35452 1.29813 5.07276 0.7896 4.57065C0.539922 4.32255 0.341655 4.02762 0.206161 3.70275C0.0706665 3.37789 0.000608088 3.02949 0 2.6775C0 1.96665 0.2835 1.28625 0.79065 0.78435C1.29873 0.281566 1.98475 -0.000314171 2.69955 2.62778e-07C3.41565 2.62778e-07 4.10235 0.28245 4.6095 0.78435C5.1156 1.28625 5.40015 1.96665 5.40015 2.6775Z" fill="white" fill-opacity="0.35" />
                            </svg>
                            <p class="logo-text text-login">Linked In</p>
                        </button>
                    </div>
                    <p class="gray-text">
                        Don't have an account?&nbsp;<a href="/rgtcomp" class="regist">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal forgot password -->
    <div class="modal fade" id="forgot-pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content needs-validation" action="" method="post" name="forgot-pass" novalidate>
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" required></button>
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Forgot Password?</h1>
                    <span class="reset-inst">no worries, we'll send you reset instructions.</span>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email-reset" placeholder="name@example.com" required />
                            <label for="email-reset">Email<span class="required">*</span></label>
                        </div>
                    </div>
                    <div class="button-con">
                        <button class="form-button login-submit" id="send-otp" type="button" data-bs-target="#otp" data-bs-toggle="modal">
                            Send OTP Code
                        </button>
                        <button type="button" class="form-button login-cancel" data-bs-target="#login" data-bs-toggle="modal">
                            Back to Login
                        </button>
                    </div>
                    <div class="opt-acc">
                        <hr class="hr-decor" />
                        <p>or</p>
                        <hr class="hr-decor" />
                    </div>
                    <p class="gray-text">
                        Don't have an account?&nbsp;<a href="#" class="regist">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal OTP -->
    <div class="modal fade" id="otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content needs-validation digit-group" action="" method="post" data-group-name="digits" name="otp" data-autosubmit="false" autocomplete="off" novalidate>
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Enter Verification Code</h1>
                    <p class="gray-text">
                        Enter 4 digit verification code sent to JerWuu@Gmail.com
                    </p>
                </div>
                <div class="modal-body">
                    <div class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                        <input type="number" class="otp-digit form-control" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1" oninput="otpchecker(this, 2, 0)" required />
                        <input type="number" class="otp-digit form-control" id="digit-2" name="digit-2" data-next="digit-3" maxlength="1" oninput="otpchecker(this, 3, 1)" required data-previous="digit-1" />
                        <input type="number" class="otp-digit form-control" id="digit-3" name="digit-3" data-next="digit-4" maxlength="1" oninput="otpchecker(this, 4, 2)" required data-previous="digit-2" />
                        <input type="number" class="otp-digit form-control" id="digit-4" name="digit-4" data-previous="digit-3" maxlength="1" oninput="otpchecker(this, 0, 3)" required />
                    </div>
                    <p class="gray-text otp-resend">
                        Resent code in&nbsp;<a href="#" id="countdown">00:20</a>
                    </p>

                    <div class="button-con">
                        <button class="form-button login-submit" type="button" data-bs-target="#reset-pass" data-bs-toggle="modal">
                            Confirm
                        </button>
                        <button type="reset" class="form-button login-cancel" data-bs-target="#login" data-bs-toggle="modal" id="reset-otp">
                            Back to Login
                        </button>
                    </div>
                    <div class="opt-acc">
                        <hr class="hr-decor" />
                        <p>or</p>
                        <hr class="hr-decor" />
                    </div>
                    <p class="gray-text">
                        Don't have an account?&nbsp;<a href="#" class="regist">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal reset password -->
    <div class="modal fade" id="reset-pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content needs-validation" action="" method="post" name="reset-pass" novalidate>
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Reset Password</h1>
                    <p class="gray-text">
                        Your new password must be different from your previous passwords
                    </p>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="reset-password" name="reset-password" placeholder="Password" required />
                            <label for="email">Password<span class="required">*</span></label>
                            <p class="gray-text">Must be at least 8 characters.</p>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="confirm-password1" name="confirm-password1" placeholder="Password" required />
                            <label for="password">Confirm Password<span class="required">*</span></label>
                        </div>
                    </div>
                    <div class="button-con">
                        <button class="form-button login-submit" type="button" data-bs-target="#loading" data-bs-toggle="modal" onclick="resetpass();">
                            Reset Password
                        </button>
                        <button type="button" class="form-button login-cancel" data-bs-target="#login" data-bs-toggle="modal">
                            Back
                        </button>
                    </div>
                    <div class="opt-acc">
                        <hr class="hr-decor" />
                        <p>or</p>
                        <hr class="hr-decor" />
                    </div>
                    <p class="gray-text">
                        Don't have an account?&nbsp;<a href="#" class="regist">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="loading" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content reset-load">
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

    <!-- Modal reset success -->
    <div class="modal fade" id="reset-success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="../assets/logo.png" alt="Regio Logo" />
                    <h1 class="login-heading">Welcome Back!</h1>
                </div>
                <div class="modal-body reset-modal-content">
                    <img class="reset-img" src="../assets/pass-reset.png" alt="Welcome" />
                    <button type="button" class="b-login" data-bs-target="#login" data-bs-toggle="modal">
                        Back to Login
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Isi Konten About -->
    <main>
        <img class="img-about" src="../assets/aboutcomp.png" alt=" about" />
        <div class="about-title">
            <h1 class="main-text">
                FIND YOUR <br><span class="large">PERFECT TALENT</span>
            </h1>
        </div>
        <div class="section">
            <p class="section-title">ABOUT</p>
            <p class="footer-text about-text">
                <b>Regio</b> is a website that allows users to find workers in
                specific areas for projects they have posted on the platform. The
                website functions as a platform that connects individuals or
                businesses in need of specific services with skilled professionals
                who can meet those needs. Users can create project postings on
                Regio, outlining the details and specifications of the job they
                require.
            </p>
        </div>
        <div class="section">
            <p class="section-title">Why Regio?</p>
            <div class="regio">
                <div>
                    <img src="../assets/posting.png" alt="">
                    <p>Posting Project</p>
                    <p>You can post projects that will be done in places that are far and difficult to reach.</p>
                </div>
                <div>
                    <img src="../assets/matching.png" alt="">
                    <p>Matching Talent</p>
                    <p>You can find workers at the place where you will execute the project.</p>
                </div>
                <div>
                    <img src="../assets/doing.png" alt="">
                    <p>Doing Project</p>
                    <p>You can execute and monitor projects that are located far away with placed talents to work.</p>
                </div>
            </div>
        </div>

        <div>
            <p class="section-title">VISION & MISSION</p>
            <div class="visi-misi">
                <div>
                    <p>Our Vision</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer efficitur imperdiet mi hendrerit faucibus. Proin mollis nulla lorem. Duis risus magna, elementum at nulla ac, eleifend convallis enim. Quisque accumsan placerat elit, id sodales tortor venenatis a.</p>
                </div>
                <div>
                    <p>Our Mission</p>
                    <p>Lorem ipsum dolor sit amet:</p>
                    <ul>
                        <li>consectetur adipiscing elit.</li>
                        <li>Integer efficitur imperdiet mi hendrerit faucibus.</li>
                        <li>Proin mollis nulla lorem.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <p class="section-title">Meet Our Team</p>
            <div class="team-regio grab-scroll">

                <div class="team-member ">
                    <img class="team-translate img-team" src="../assets/1.png" alt="">
                    <p class="team-translate team-name">Alvin Mustafa</p>
                    <p class="team-translate team-position">Managing Director</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/2.png" alt="">
                    <p class="team-translate team-name">Alfian Azizi</p>
                    <p class="team-translate team-position">Software Product Manager</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/3.png" alt="">
                    <p class="team-translate team-name">Cynthia Geraldine</p>
                    <p class="team-translate team-position">System Analyst</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/4.png" alt="">
                    <p class="team-translate team-name">Christopher Hartono</p>
                    <p class="team-translate team-position">System Analyst</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/5.png" alt="">
                    <p class="team-translate team-name">Jeremy Wugouw</p>
                    <p class="team-translate team-position">UI/UX Designer</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/6.png" alt="">
                    <p class="team-translate team-name">Kevin</p>
                    <p class="team-translate team-position">UI/UX Designer</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/7.png" alt="">
                    <p class="team-translate team-name">Jason Nohea</p>
                    <p class="team-translate team-position">Frontend Developer</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/8.png" alt="">
                    <p class="team-translate team-name">Juhendi Chin</p>
                    <p class="team-translate team-position">Frontend Developer</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

                <div class="team-member">
                    <img class="team-translate" src="../assets/9.png" alt="">
                    <p class="team-translate team-name">Christian Fiestyawan</p>
                    <p class="team-translate team-position">Backend Developer</p>
                    <div class="team-sm team-translate">
                        <i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin-in fa-lg" style="color: #000000;"></i>
                    </div>
                </div>

            </div>
            <div>
                <p class="section-title">Contact Us</p>
                <div class="contact-us">
                    <div class="contact-con">
                        <div class="email">
                            <img class="contact-logo" src="../assets/mail.png" alt="">
                            <p class="contact-title">Email</p>
                            <a href="#">hi@Regio.co.id</a>
                        </div>
                        <div class="whatsapp">
                            <img class="contact-logo" src="../assets/whatsapp.png" alt="">
                            <p class="contact-title">WhatsApp</p>
                            <p>0823-2131-329</p>
                        </div>
                    </div>
                    <div class="qna-con">
                        <p>Question N Answer</p>
                        <div class="form-floating mb-3 question-con">
                            <textarea type="text" rows="4" cols="50" class="form-control" onkeyup="post();" id="in-pdesc " placeholder="Description"></textarea>
                            <label for="in-pdesc">Message...</label>
                        </div>
                        <button class="send-button">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

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