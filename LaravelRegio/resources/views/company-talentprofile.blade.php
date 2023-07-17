<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/newnav.css" />
    <link rel="stylesheet" href="../bootstrap-css/footer.css" />
    <link rel="stylesheet" href="../bootstrap-css/navloggedin.css" />
    <link rel="stylesheet" href="../bootstrap-css/companyTalentProfile.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5109247c85.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../js/companyTalentProfile.js"></script>
    <title>Talent Profile</title>
</head>

<body>
    <nav>
        <div class="nav1">
            <a href="homepage.html"><img class="logo" src="../assets/logoCompany.png" alt="Logo Regio" /></a>
            <a class="navi-button" href="{{ route('hpCompany') }}#talentsearch">Talent</a>
            <a class="navi-button" href="#">My Project</a>
            <a class="navi-button" href="#">About</a>
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
            <i class="fa-solid fa-user" style="color: #2c5395"></i>
            <div class="logged-in">
                <p class="user-nav nav-acc">Jeremy</p>
                <hr class="navline" />
                <p class="company-nav nav-acc">Company</p>
            </div>
        </div>
    </nav>

    <main>
        <div class="main-info">
            <img class="talent-img" src="../assets/fototalent.png" alt="">
            <div class="primary-info-con">
                <p class="talent-name">Tony Stank</p>
                <div class="primary-info">
                    <div class="info">
                        <div>
                            <p>Email</p>
                            <p>tonysaja@gmail.com</p>
                        </div>
                        <div>
                            <p>Location</p>
                            <p>Samarinda</p>
                        </div>
                    </div>
                    <div class="info">
                        <div>
                            <p>Specialty</p>
                            <p>Plumbing installation Expert</p>
                        </div>
                        <div>
                            <p>Phone</p>
                            <p class="phone-num" id="phone-num">0837462864382 <button class="b-copy" onclick="myFunction()"><i class="fa-solid fa-copy" style="color: #31348d;"></i></button></p>
                        </div>
                    </div>
                    <div class="info">
                        <div>
                            <p>Status</p>
                            <p>Available/No</p>
                        </div>
                        <div>
                            <p>Birth Date</p>
                            <p>09 Oktober 1999</p>
                        </div>
                    </div>

                    <div class="info">
                        <div>
                            <p>Available Working Hours</p>
                            <p>8.00 AM - 5.00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-info">
            <div class="detail-info">
                <div>
                    <p class="title">About Talent</p>
                    <p class="text">
                        A talented Plumbing Installation Expert possesses a unique combination of technical knowledge, problem-solving abilities, and attention to detail. Have an in-depth understanding of plumbing systems, regulations, and best practices, allowing them to excel in installing and connecting pipes, fixtures, and appliances accurately. With a keen eye for detail, and ensure that all installations meet industry standards and comply with local codes.
                    </p>
                </div>
                <div>
                    <p class="title">Job Experience</p>
                    <p class="sub-title">PT XQC</p>
                    <p class="big-text-black">Plumbing Installation, Part Time</p>
                    <p class="big-text-gray">January 2021 - October 2021</p>
                    <p class="sub-title">PT CBT</p>
                    <p class="big-text-black">Plumbing construction, Full Time</p>
                    <p class="big-text-gray">May 2020 - July 2020</p>
                </div>
                <div>
                    <p class="title">Skills</p>
                    <div class="skill-con">
                        <ul>
                            <li class="big-text-gray">Teamwork</li>
                            <li class="big-text-gray">Honesty</li>
                            <li class="big-text-gray">Plumbing Tools</li>
                            <li class="big-text-gray">Accurate Measuring</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p class="title">Preferences</p>
                    <div class="preferences">
                        <p class="big-text-black">Interest</p>
                        <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                        <p class="big-text-black">Plumbing Installation</p>
                    </div>
                    <div class="preferences">
                        <p class="big-text-black">Job Type</p>
                        <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                        <p class="big-text-black">Full Time</p>
                    </div>
                </div>
                <div>
                    <p class="title">Portofolio</p>
                    <div class="file-snippet">
                        <div class="img-file">
                            <img src="../assets/portfolio.png" alt="">
                        </div>
                        <div class="text-file">
                            <p class="big-text-black">Dribbble</p>
                            <p class="text">https://Dribbble.com/tony</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="title">Certificate</p>
                    <div class="file-snippet">
                        <div class="img-file">
                            <img src="../assets/certificate.png" alt="">
                        </div>
                        <div class="text-file">
                            <p class="big-text-black">Sertifikat Mengiku..</p>
                            <p class="text">PDF</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="title">Social Media</p>
                    <div class="social-med">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                        <i class="fa-brands fa-facebook fa-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="resume">
                <p class="sub-title"> Resume</p>
                <div class="img-resume">
                    <img src="../assets/resume.png" alt="">
                </div>
                <button class="contact-button"><i class="fa-regular fa-comment " style="color: #ffffff;"></i> Contact</button>
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