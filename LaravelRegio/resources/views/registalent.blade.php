<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/registalent.css" />
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title> Register </title>
</head>

<body>
    <div class="container">
        <!-- Floating Content -->
        <div class="kanan">
            <h2> Let Us Find Your Job </h2>
            <h2 class="alter"> Vacancy </h2>
            <img src="../assets/logoHD.png" width="200px">
        </div>
        <form action="../php/registalent.php" method="POST">
            <h1> Register </h1>
            <hr>
            <input type="text" placeholder=" First Name" name="fname" id="fname" required>
            <hr>
            <input type="text" placeholder=" Last Name" name="lname" id="lname" required>
            <hr>
            <input type="email" placeholder=" Email" name="email" id="email" required>        
            <hr>
            <input type="password" placeholder=" Password" name="pass" id="pass" required>
            <hr>
            <input type="text" placeholder=" Phone Number" name="phone" id="phone" required>
            <hr>
            <input type="date" name="tgl" id="tgl">
            <hr>
            <select class="provinsi">
                <option> Province* </option>
                <option> Kalimantan Timur </option>
                <option> Kalimantan Tengah </option>
                <option> Kalimantan Barat </option>
                <option> Kalimantan Selatan </option>
            </select>
            <hr><hr>
            <select class="kota">
                <option> City* </option>
                <option> Kab. Bandung Barat </option>
                <option> Kab. Bandung Selatan </option>
            </select>  
            <hr><hr>
        <!-- Upload Content -->
        <div class="upload">    
            <label class="cv"> Upload CV &nbsp;</label>
            <input type="file" name="cv" id="cv">
            <hr>
            <label class="porto"> Upload Portofolio &nbsp;</label>
            <input type="file" name="porto" id="porto">
        </div>
        <hr>
            <input type= "submit" value="Register" class="register"></input>
        </hr>
        <p class="mid account"> Already Have Account? &nbsp; <span class="login"> <a href="#" class="regist"> Login </a></span></p>
        </form>
</div>
</body>
</html>