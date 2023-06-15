<?php
$database = file_get_contents("http://localhost/KIREI/Kirei/json/account.json");
$database = json_decode($database, TRUE);
if (isset($_POST['email']) && isset($_POST['password'])) {
    for ($i = 0; $i < count($database); $i++) {
        if ($database[$i]['email'] == $_POST['email']) {
            if ($database[$i]['password'] == $_POST['password']) {
                $success = TRUE;
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }
} else {
    echo "Harap isi semua kolom yang tersedia";
}
if ($success == TRUE) {
    echo "Selamat Datang " . $_POST['email'];
    //membuat metode redirect dengan kode 301
    header("location: ../company/loggedin nav.html", true, 301);
    //membuat kode di bawah header tidak diproses oleh website sehingga lebih aman
    exit();
} else {
    echo "Username/Password Salah";
    header("location: ../company/modaltest.html", true, 301);
    exit();
}
