<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/newnav.css" />
    <link rel="stylesheet" href="../bootstrap-css/footer.css" />
    <link rel="stylesheet" href="../bootstrap-css/companyproject.css" />
    <link rel="stylesheet" href="../bootstrap-css/component.css" />
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
    <!-- <script src="../js/mainpage.js"></script> -->
    <script src="../js/navigationswitch.js"></script>
    <title>Project List</title>
  </head>
  <body>
    <nav>
      <div class="nav1">
        <a href="homepage.html"
          ><img class="logo" src="../assets/logoCompany.png" alt="Logo Regio"
        /></a>

        <a class="navi-button" href="#">Talent</a>
        <a class="navi-button" href="/compProject">My Project</a>
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
          <i class="fa-solid fa-bell"></i>
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
      <div class="navigation-tab">
        <div class="tab-project">
          <a
            class="tab"
            id="tab1"
            onclick="showContent('content1', 'tab1', event);"
            href="#"
            >Pending</a
          >
          <a
            class="tab"
            id="tab2"
            onclick="showContent('content2', 'tab2', event);"
            href="#"
            >In Progress</a
          >
          <a
            class="tab"
            id="tab3"
            onclick="showContent('content3', 'tab3', event);"
            href="#"
            >Done</a
          >
        </div>
        <div class="line-container">
          <div class="underline"></div>
        </div>
      </div>

      <div class="content" id="content1">
        <div class="delete-project">
          <i class="fa-solid fa-trash" style="color: #ff0000"></i>
          <p>Delete Project</p>
        </div>
        <div class="project-list">
          <!-- empty -->
          <!-- <div class="empty-project">
            <p>No Project Available</p>
          </div> -->
          <!-- not empty -->
          <div
            class="project-sum"
            style="cursor: pointer"
            onclick="window.location.href='ProjectDetail.html'"
          >
            <div class="project-img">
              <img src="../assets/Foto Project1.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status project-pending">
                <p>Pending</p>
              </div>
              <p class="project-title">Pemasangan Listrik</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Abdul Muthalib, Samarinda, Kalimantan Timur, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>23 Maret 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content" id="content2">
        <div class="project-list">
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project1.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status project-wip">
                <p>In Progress</p>
              </div>
              <p class="project-title">Pemasangan Listrik</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>23 Maret 2023</p>
                </div>
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
              <p class="project-title">Pemasangan Listrik</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
                </p>
              </div>
              <div class="project-date">
                <i class="fa-solid fa-calendar-days" style="color: #d3d624"></i>
                <p>23 Maret 2023</p>
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
              <p class="project-title">Pemasangan Listrik</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
                </p>
              </div>
              <div class="project-date">
                <i class="fa-solid fa-calendar-days" style="color: #d3d624"></i>
                <p>23 Maret 2023</p>
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
              <p class="project-title">Pemasangan Listrik</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
                </p>
              </div>
              <div class="project-date">
                <i class="fa-solid fa-calendar-days" style="color: #d3d624"></i>
                <p>23 Maret 2023</p>
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
              <p class="project-title">Pemasangan Listrik</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Raden Saleh 3, Palangkaraya, Kalimantan Tengah, Indonesia.
                </p>
              </div>
              <div class="project-date">
                <i class="fa-solid fa-calendar-days" style="color: #d3d624"></i>
                <p>23 Maret 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content" id="content3">
        <div class="project-list">
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="project-sum">
            <div class="project-img">
              <img src="../assets/Foto Project.png" alt="Project Image" />
            </div>
            <div class="project-detail">
              <div class="project-status">
                <p>Done</p>
              </div>
              <p class="project-title">Pemasangan Pipa Gas Alam</p>
              <div class="project-second">
                <p class="project-address">
                  Jl. Evakuasi no.14, Cirebon, Indonesia.
                </p>
                <div class="project-date">
                  <i
                    class="fa-solid fa-calendar-days"
                    style="color: #d3d624"
                  ></i>
                  <p>1 Januari 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="b-jobposting" href="../company/jobposting.html">
        <i class="fa-solid fa-plus" style="color: #ffffff"></i>
        <p>Posting Project</p>
      </a>
    </main>

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
