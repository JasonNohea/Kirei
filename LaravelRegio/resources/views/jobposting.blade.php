<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="../bootstrap-css/main.css" /> -->
    <link rel="stylesheet" href="../css/newnav.css" />
    <link rel="stylesheet" href="../bootstrap-css/footer.css" />
    <link rel="stylesheet" href="../bootstrap-css/jobposting.css" />
    <link rel="stylesheet" href="../bootstrap-css/navloggedin.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Cabin&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/5109247c85.js"
      crossorigin="anonymous"
    ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../js/postingjob.js"></script>
    <script src="../js/mainpage.js"></script>
    <title>Regio</title>
  </head>
  <body>
    <!-- navigation -->
    <nav>
      <div class="nav1">
        <img class="logo" src="../assets/logoCompany.png" alt="Logo Regio" />
        <a class="navi-button" href="/hpCompany">Talent</a>
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
        <i class="fa-solid fa-user" style="color: #2c5395"></i>
        <div class="logged-in">
          <p class="user-nav nav-acc">Jeremy</p>
          <hr class="navline" />
          <p class="company-nav nav-acc">Company</p>
        </div>
      </div>
    </nav>

    <main>
      <div class="posting-job">
        <p class="title">Posting Job</p>
        <p class="gray-text posting-instruction">
          Fill in the required fields to post the project
        </p>
        <form action="">
          <div class="posting-form" action="">
            <div class="first-form">
              <div class="form-floating mb-3 posting-input">
                <input
                  type="text"
                  class="form-control"
                  onkeyup="post();"
                  id="in-pname"
                  placeholder="ProjectName"
                />
                <label for="in-pname"
                  >Project Name <span class="required">*</span></label>
              </div>
              <div class="form-floating mb-3 posting-input">
                <input
                  type="date"
                  class="form-control"
                  onkeyup="post();"
                  id="in-sdate"
                  placeholder="dd/mm/yyyy"
                />
                <label for="in-sdate"
                  >Start Date<span class="required">*</span></label>
              </div>
              <div class="form-floating mb-3 posting-input">
                <input
                  type="date"
                  class="form-control"
                  onkeyup="post();"
                  id="in-edate"
                  placeholder="dd/mm/yyyy"
                />
                <label for="in-edate"
                  >End Date<span class="required">*</span>
                  </label>
              </div>
              <div class="form-floating mb-3 posting-input">
                <input
                  type="text"
                  class="form-control"
                  onkeyup="post();"
                  id="in-rposition"
                  placeholder="dd/mm/yyyy"
                />
                <label for="in-rposition"
                  >Required Position<span class="required">*</span></label
                >
              </div>
              <div class="form-floating mb-3 posting-input">
                <textarea
                  type="text"
                  class="form-control"
                  onkeyup="post();"
                  id="in-pdesc"
                  placeholder="Description"
                ></textarea>
                <label for="in-pdesc"
                  >Project Description<span class="required">*</span></label
                >
              </div>
              <div class="form-floating mb-3 posting-input">
                <textarea
                  type="text"
                  class="form-control"
                  onkeyup="post();"
                  id="in-ploc"
                  placeholder="Location"
                ></textarea>
                <label for="in-ploc"
                  >Project Location<span class="required">*</span></label
                >
              </div>
              <div class="form-floating mb-3 posting-input">
                <textarea
                  type="text"
                  class="form-control"
                  onkeyup="post();"
                  id="in-treq"
                  placeholder="Requirement"
                ></textarea>
                <label for="in-treq"
                  >Talent Requirement<span class="required">*</span></label
                >
              </div>
            </div>
            <div class="second-form">
              <p class="title-section">Project Picture</p>
              <div class="project-img">
                <input
                  type="file"
                  size="60"
                  id="fileInput"
                  accept="image/png, image/gif, image/jpeg"
                  multiple="multiple"
                />
                <button type="button" class="custom-button">
                  <img
                    class="b-upload"
                    src="../assets/b-upload.jpeg"
                    alt="button upload"
                  />
                </button>
                <div class="image-preview grab-scroll"></div>
                <!-- <span class="file-name">No file chosen</span> -->
              </div>
              <p class="title-section">Additional Request</p>
              <p class="second-title">Talent Quantity</p>
              <div
                class="btn-group"
                role="group"
                aria-label="Basic outlined example"
              >
                <button
                  type="button"
                  class="btn btn-outline-primary border-color b-hover"
                  data-quantity="minus"
                  data-field="quantity"
                >
                  -
                </button>
                <input
                  type="number"
                  class="form-control middle-color"
                  name="quantity"
                  value="0"
                />
                <button
                  type="button"
                  class="btn btn-outline-primary border-color b-hover"
                  data-quantity="plus"
                  data-field="quantity"
                >
                  +
                </button>
              </div>

              <p class="second-title">Matching Deadline</p>
              <div class="form-floating mb-3 posting-input">
                <input
                  type="date"
                  class="form-control"
                  onkeyup="post();"
                  id="in-mdate"
                  placeholder="dd/mm/yyyy"
                />
                <label for="in-mdate"
                  >Matching Deadline<span class="required">*</span></label
                >
              </div>
              <p class="second-title">Salary Range</p>
              <div class="input-group mb-3">
                <input
                  type="number"
                  class="form-control border-color"
                  placeholder="Rp1.000.000,00"
                  aria-label="lower-limit"
                />
                <span class="input-group-text middle-color">-</span>
                <input
                  type="number"
                  class="form-control border-color"
                  placeholder="Rp5.000.000,00"
                  aria-label="upper-limit"
                />
              </div>
              <p class="second-title">Skills</p>
              <div class="skill-con">
                <button
                  class="add-skill"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#add-skill"
                >
                  &#43;
                </button>
                <div id="saved-skill"></div>
              </div>
              <!-- modal add skill -->
              <div class="modal" id="add-skill" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Skill</h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div class="search-container">
                        <div class="form-floating mb-3">
                          <input
                            type="text"
                            class="search-input form-control"
                            id="searchInput"
                            placeholder="Add Skill..."
                          />
                          <label for="searchInput">Add Skill...</label>
                        </div>
                        <div
                          id="recommendationsContainer"
                          class="recommendations-container"
                        ></div>
                      </div>
                      <div class="selected-skills" id="selectedSkills"></div>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Cancel
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-dismiss="modal"
                        onclick="saveSkill();"
                      >
                        Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="selected-skills2" id="selectedSkills2"></div> -->
            </div>
          </div>
          <button type="button" class="post-project" id="post-project" disabled>
            Post Job
          </button>
        </form>
      </div>

      <div class="project-company">
        <p class="title">My Project</p>
        <div class="project-sum">
          <div class="project-img">
            <img src="../assets/Foto Project.png" alt="Project Image" />
          </div>
          <div class="project-detail">
            <div class="project-status">
              <p>Done</p>
            </div>
            <p>Pemasangan Pipa Gas Alam</p>
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
            <div class="project-status project-wip">
              <p>In Progress</p>
            </div>
            <p>Pemasangan Listrik</p>
            <div class="project-second">
              <p>
                Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
              </p>
            </div>
          </div>
        </div>
        <div class="project-sum">
          <div class="project-img">
            <img src="../assets/Foto Project2.png" alt="Project Image" />
          </div>
          <div class="project-detail">
            <div class="project-status project-pending">
              <p>Pending</p>
            </div>
            <p>Pemasangan Plumbing</p>
            <div class="project-second">
              <p>Jl. Abdul Muthalib, Samarinda, Kalimantan Timur, Indonesia.</p>
            </div>
          </div>
        </div>
        <a href="#">See all project</a>
      </div>
    </main>

    <!-- <div style="width: auto; height: 2000px"></div> -->

    <footer>
      <div class="footer-regio">
        <div class="main-footer">
          <img
            class="footer-img"
            src="../assets/footer-logo.png"
            alt="footer-regio"
          />
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
