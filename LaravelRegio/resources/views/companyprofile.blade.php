<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/newnav.css" />
    <link rel="stylesheet" href="../bootstrap-css/footer.css" />
    <link rel="stylesheet" href="../bootstrap-css/navloggedin.css" />
    <link rel="stylesheet" href="../bootstrap-css/companyprofile.css">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5109247c85.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../js/companyProfile.js"></script>
    <title>Document</title>
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
        <div class="profile-menu">
            <p class="title">Profile Menu</p>
            <button class="profile-option pressed" id="button1" onclick="showContent('button1','content1')">
                <i class="fa-regular fa-user fa-xl" style="color: #0f316a;"></i>
                <div class="opt-text">
                    <p>Your Information</p>
                    <p>Manage your & company information.</p>
                </div>
            </button>
            <button class="profile-option" id="button2" onclick="showContent('button2','content2')">
                <i class="fa-solid fa-gear fa-xl" style="color: #0f316a;"></i>
                <div class="opt-text">
                    <p>Website Setting</p>
                    <p>Manage language, display, etc.</p>
                </div>
            </button>
            <button class="profile-option" id="button3" onclick="showContent('button3','content3')">
                <i class="fa-solid fa-lock fa-xl" style="color: #0f316a;"></i>
                <div class="opt-text">
                    <p>Account Setting</p>
                    <p>Change password.</p>
                </div>
            </button>
            <button class="profile-option" id="button4" onclick="showContent('button4','content4')">
                <i class="fa-regular fa-circle-question fa-xl" style="color: #0f316a;"></i>
                <div class="opt-text">
                    <p>Help Centre</p>
                    <p>Help & support.</p>
                </div>
            </button>
            <button class="log-out">Logout</button>
        </div>

        </div>
        <div class="profile-container" id="container">
            <div class="content show" id="content1">
                <h2>Content 1</h2>
                <p>This is the content for Tab 1.</p>
            </div>
            <div class="content" id="content2">
                <h2>Content 2</h2>
                <p>This is the content for Tab 2.</p>
                <p>It can have multiple paragraphs.</p>
            </div>
            <div class="content" id="content3">
                <h2>Content 3</h2>
                <p>This is the content for Tab 3.</p>
                <p>It can have different lengths of content.</p>
                <p>It can dynamically adjust the container height.</p>
            </div>
            <div class="content" id="content4">
                <h2>Content 4</h2>
                <p>This is the content for Tab 4.</p>
                <p>It can have different lengths of content.</p>
                <p>It can dynamically adjust the container height.</p>
                <p>Are you satisfied with the way the world is?</p>
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