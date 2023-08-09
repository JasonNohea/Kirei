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
    <script src="../js/editfield.js"></script>
    <title>Setting</title>
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
                        <a href="{{ route('hpComplog') }}#talentsearch">Talent</a>
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
            <div class="content show personal-info" id="content1">
                <div>
                    <p class="info-title">Personal Information</p>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">First Name</p>
                            <button class="editButton" id="editButton" onclick="toggleEditMode('editable-paragraph1', 'editButton')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton" onclick="cancelEdit('editable-paragraph1', 'editButton')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton" onclick="saveEdit('editable-paragraph1', 'editButton')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph1" contenteditable="false">
                            Jeremy
                        </p>
                    </div>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">Last Name</p>
                            <button class="editButton" id="editButton2" onclick="toggleEditMode('editable-paragraph2', 'editButton2')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton2" onclick="cancelEdit('editable-paragraph2', 'editButton2')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton2" onclick="saveEdit('editable-paragraph2', 'editButton2')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph2" contenteditable="false">
                            Wugouw
                        </p>
                    </div>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">Position</p>
                            <button class="editButton" id="editButton3" onclick="toggleEditMode('editable-paragraph3', 'editButton3')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton3" onclick="cancelEdit('editable-paragraph3', 'editButton3')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton3" onclick="saveEdit('editable-paragraph3', 'editButton3')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph3" contenteditable="false">
                            Human Resource
                        </p>
                    </div>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">Contact Number</p>
                            <button class="editButton" id="editButton4" onclick="toggleEditMode('editable-paragraph4', 'editButton4')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton4" onclick="cancelEdit('editable-paragraph4', 'editButton4')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton4" onclick="saveEdit('editable-paragraph4', 'editButton4')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph4" contenteditable="false">
                            082383929463
                        </p>
                    </div>
                </div>
                <div>
                    <p class="info-title">Company Information</p>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">Company Name</p>
                            <button class="editButton" id="editButton5" onclick="toggleEditMode('editable-paragraph5', 'editButton5')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton5" onclick="cancelEdit('editable-paragraph5', 'editButton5')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton5" onclick="saveEdit('editable-paragraph5', 'editButton5')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph5" contenteditable="false">
                            PT. Efrata Mintra Sejahtera
                        </p>
                    </div>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">Number of Employee</p>
                            <button class="editButton" id="editButton6" onclick="toggleEditMode('editable-paragraph6', 'editButton6')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton6" onclick="cancelEdit('editable-paragraph6', 'editButton6')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton6" onclick="saveEdit('editable-paragraph6', 'editButton6')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph6" contenteditable="false">
                            21 to 50
                        </p>
                    </div>
                    <div class="account-info-container">
                        <div class="account-info">
                            <p class="info-type">Company Location Name</p>
                            <button class="editButton" id="editButton7" onclick="toggleEditMode('editable-paragraph7', 'editButton7')">
                                <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                            </button>
                            <button class="cancelButton" id="cancelButton7" onclick="cancelEdit('editable-paragraph7', 'editButton7')" style="display: none">
                                <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                            </button>
                            <button class="saveButton" id="saveButton7" onclick="saveEdit('editable-paragraph7', 'editButton7')" style="display: none">
                                <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                            </button>
                        </div>
                        <p class="account-info-text" id="editable-paragraph7" contenteditable="false">
                            Jl. Pilang Sari Endah Blok A No.41, Cirebon, Indonesia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="content website-setting" id="content2">
                <p class="info-title">Website Setting</p>
                <p class="account-info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor nec ligula nec sodales. Nulla bibendum massa eget dolor ultrices, ac sagittis enim vehicula. Quisque quis cursus leo. Fusce sit amet malesuada quam. Aenean convallis, metus eget sollicitudin molestie, ex felis egestas libero, sed porta lacus quam eget dolor. Vivamus fermentum semper auctor. Phasellus feugiat scelerisque dui. Ut id dui efficitur, euismod sapien eget, scelerisque dolor. Maecenas nec justo egestas, finibus metus eget, molestie leo. Integer nisl nunc, venenatis quis ligula ac, congue egestas nulla. Sed vestibulum rutrum ipsum, id consectetur nulla viverra sed. Etiam justo metus, egestas eu nibh faucibus, tempor rutrum mauris. Nam ornare tristique velit, a aliquam magna aliquam ut. Nullam vel sem vel urna convallis cursus a vel lorem. Vestibulum pretium ut orci semper sagittis. Morbi eget convallis tortor.</p>
            </div>
            <div class="content account-setting" id="content3">

                <img class="change-pass-img" src="../assets/logo.png" alt="">
                <p class="title no-margin">Change Password</p>
                <p class="change-pass-text">Your new password must be different
                    from previous used passwords
                </p>
                <div class="input-container">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Current Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">New Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm New Password</label>
                    </div>
                </div>
                <button class="change-pass" onclick="window.location.href='/hpCompany'">Change Password</button>
            </div>
            <div class="content help-centre" id="content4">
                <p class="info-title">Help Centre</p>
                <p class="account-info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor nec ligula nec sodales. Nulla bibendum massa eget dolor ultrices, ac sagittis enim vehicula. Quisque quis cursus leo. Fusce sit amet malesuada quam. Aenean convallis, metus eget sollicitudin molestie, ex felis egestas libero, sed porta lacus quam eget dolor. Vivamus fermentum semper auctor. Phasellus feugiat scelerisque dui. Ut id dui efficitur, euismod sapien eget, scelerisque dolor. Maecenas nec justo egestas, finibus metus eget, molestie leo. Integer nisl nunc, venenatis quis ligula ac, congue egestas nulla. Sed vestibulum rutrum ipsum, id consectetur nulla viverra sed. Etiam justo metus, egestas eu nibh faucibus, tempor rutrum mauris. Nam ornare tristique velit, a aliquam magna aliquam ut. Nullam vel sem vel urna convallis cursus a vel lorem. Vestibulum pretium ut orci semper sagittis. Morbi eget convallis tortor.</p>
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