<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="../bootstrap-css/navloggedin.css" />
  <link rel="stylesheet" href="../css/newnav.css" />
  <link rel="stylesheet" href="../bootstrap-css/footer.css" />
  <link rel="stylesheet" href="../bootstrap-css/projectdetail.css" />
  <link rel="stylesheet" href="../bootstrap-css/component.css" />
  <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/5109247c85.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="../js/mainpage.js"></script>
  <script src="../js/navigationswitch.js"></script>
  <script src="../js/EditProject.js"></script>
  <script src="../js/editfield.js"></script>
  <script src="../js/loadingtalent.js"></script>
  <title>Project Detail</title>
</head>

<body>
  <nav>
    <div class="nav1">
      <a href="homepage.html"><img class="logo" src="../assets/logoCompany.png" alt="Logo Regio" /></a>
      <a class="navi-button" href="{{ route('hpCompany') }}#talentsearch">Talent</a>
      <a class="navi-button" href="../company/companyproject.html">My Project</a>
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
      <i class="fa-solid fa-user" style="color: #2c5395"></i>
      <div class="logged-in">
        <p class="user-nav nav-acc">Jeremy</p>
        <hr class="navline" />
        <p class="company-nav nav-acc">Company</p>
      </div>
    </div>
  </nav>

  <main>
    <div class="first-container">
      <div class="navigation-tab">
        <div class="tab-project">
          <a class="tab" id="tab1" onclick="showContent('content1', 'tab1', event);" href="#">Detail</a>
          <a class="tab" id="tab2" onclick="showContent('content2', 'tab2', event);" href="#">Progress</a>
        </div>
        <div class="line-container">
          <div class="underline"></div>
        </div>
      </div>

      <div class="content" id="content1">
        <div class="detail-project">
          <div class="project-information">
            <p class="">Project Information</p>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Project Name</p>
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
              <p class="project-info-text" id="editable-paragraph1" contenteditable="false">
                Pemasangan Plumbing
              </p>
            </div>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Location</p>
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
              <p class="project-info-text" id="editable-paragraph2" contenteditable="false">
                Jl. Abdul Muthalib, Samarinda, Kalimantan Timur, Indonesia.
              </p>
            </div>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Project Date</p>
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
              <p class="project-info-text" id="editable-paragraph3" contenteditable="false">
                26 Agustus 2023 - 07 Oktober 2023.
              </p>
            </div>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Description</p>
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
              <p class="project-info-text" id="editable-paragraph4" contenteditable="false">
                Memasang plumbing untuk pembangunan Apartement baru.
              </p>
            </div>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Requirement</p>
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
              <p class="project-info-text" id="editable-paragraph5" contenteditable="false">
                Orang yang sudah ahli pada bidang pembangunan dan
                arsitektur:<br />
                - Design alur pipa. <br />
                -Perencanaan pembangunan. <br />
                -Bisa menyesuaikan dengan waktu kerja yang telah ditetapkan.
              </p>
            </div>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Photo</p>
                <button class="editButton edit-button" onclick="showButtonImg()">
                  <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                </button>
                <button class="cancelButton cancel-button" style="display: none">
                  <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                </button>
                <button class="saveButton save-button" style="display: none">
                  <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                </button>
              </div>
              <div class="project-img">
                <input type="file" size="60" id="fileInput" accept="image/png, image/gif, image/jpeg" multiple="multiple" />
                <button type="button" class="custom-button" style="display: none">
                  <img class="b-upload" src="../assets/b-upload.jpeg" alt="button upload" />
                </button>
                <div class="image-preview grab-scroll">
                  <img src="../assets/Foto Project2.png" alt="project-img" />
                </div>
                <!-- <span class="file-name">No file chosen</span> -->
              </div>
            </div>
          </div>
          <div class="additional-info">
            <p>Additional Information</p>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Talent Quantity</p>
                <button id="editBtnQ" class="editquantity" onclick="toggleEditQ()">
                  <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                </button>
                <button class="cancelButton" id="cancelBtnQ" onclick="cancelEditQ()" style="display: none">
                  <i class="fa-solid fa-x fa-2xs" style="color: #ff0000"></i>
                </button>
                <button class="saveButton" id="saveBtnQ" onclick="saveEditQ()" style="display: none">
                  <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                </button>
              </div>
              <div class="quantity">
                <p id="number">1</p>
                <div id="inputWrapper" style="display: none;" class="btn-group" role="group" aria-label="Basic outlined example">
                  <button type="button" class="btn btn-outline-primary border-color b-hover" data-quantity="minus" data-field="quantity">
                    -
                  </button>
                  <input id="numberInput" type="number" class="form-control middle-color" name="quantity" value="0" />
                  <button type="button" class="btn btn-outline-primary border-color b-hover" data-quantity="plus" data-field="quantity">
                    +
                  </button>
                </div>
                <p class="project-info-text">orang.</p>
              </div>
            </div>

            <div class="project-info-container">
              <div class="project-info-title">
                <p>Requirement Skill</p>
                <button id="B-addskill1" class="editquantity" onclick="toggleElement()">
                  <i class="fa-regular fa-pen-to-square" style="color: #2c5395"></i>
                </button>
                <button class="saveButton" id="B-addskill2" onclick="toggleElement()" style="display: none">
                  <i class="fa-solid fa-check fa-2xs" style="color: #00ff11"></i>
                </button>
              </div>
              <div class="skill-con">
                <button class="add-skill" id="addskill" type="button" data-bs-toggle="modal" data-bs-target="#add-skill" style="display: none;">
                  &#43;
                </button>
                <div id="saved-skill">
                  <div class="added-skill">
                    <span>UI/UX Designer</span>
                  </div>
                </div>
                <!-- modal add skill -->
                <div class="modal" id="add-skill" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add Skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="search-container">
                          <div class="form-floating mb-3">
                            <input type="text" class="search-input form-control" id="searchInput" placeholder="Add Skill..." />
                            <label for="searchInput">Add Skill...</label>
                          </div>
                          <div id="recommendationsContainer" class="recommendations-container"></div>
                        </div>
                        <div class="selected-skills" id="selectedSkills"></div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                          Cancel
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="saveSkill();">
                          Add
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="project-info-container">
              <div class="project-info-title">
                <p>Salary Range</p>
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
              <p class="project-info-text" id="editable-paragraph6" contenteditable="false">
                -
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="content" id="content2">
        <div class="progress-content">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Memulai Pekerjaan
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Sampai di lokasi
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Membangun pondasi VSAT
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  Memulai MODEM COMMISSIONING
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  Memulai SQF CHECK
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                  Memulai CPI & C/N LEVEL CHECK
                </button>
              </h2>
              <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                  Memulai MODEM CONFIGURATION
                </button>
              </h2>
              <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                  Memulai INTERNET TEST
                </button>
              </h2>
              <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                  Memulai ON AIR
                </button>
              </h2>
              <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                  Dokumen berita acara selesai dibuat
                </button>
              </h2>
              <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                  Pekerjaan selesai
                </button>
              </h2>
              <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><img class="progress-img" src="/assets/Foto Project2.png" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div class="second-container">
      <!-- Loading div -->
      <div id="loading" class="loading">
        <!-- Loading content here -->
        <div class="loading-container">
          <p>Talent</p>
          <img src="../assets/searching.png" alt="">
          <div class="loading-text"></div>
          <p>deadline: <span>-</span></p>
        </div>
      </div>

      <!-- Content div -->
      <!-- Content goes here -->
      <div class="talent-container content-talent" id="content-talent">
        <p>Talent</p>
        <div class="talent-con unselectable ">
          <div>
            <div class="talent-info">
              <div class="talent-header">
                <div class="photo-profile"></div>
                <div class="talent-header-info">
                  <p class="talent-name">James Welton</p>
                  <p class="talent-skill">UI/UX Designer</p>
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
        <div class="project-sum" style="cursor: pointer" onclick="window.location.href='ProjectDetail.html'">
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
        <a href="#">See all project</a>
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