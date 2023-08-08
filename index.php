<?php
session_start();
define('URL_ADMIN', 'index.php?folder_admin=');

//Menambahkan koneksi ke databases;
require_once 'config/fungsi-crud.php';

//Library - Pre existing Composer//
require_once 'vendor/autoload.php';

extract($_GET);

//Halaman Front End
if (isset($folder) && isset($file)) {

    $folder_front_end = "views/$folder";

    if (is_dir($folder_front_end)) {
        $file_front_end = "$folder_front_end/$file.php";
        if (is_file($file_front_end)) {
            require_once 'views/layouts/header.php';
            require_once $file_front_end;
            require_once 'views/layouts/footer.php';
        } else {
            require_once 'views/layouts/header.php';
            echo "Halaman tidak ditemukan";
            require_once 'views/layouts/footer.php';
        }
    } else {
        require_once 'views/layouts/header.php';
        echo "Halaman tidak ditemukan";
        require_once 'views/layouts/footer.php';
    }
}

//Halaman Back End//
if (isset($folder_admin) && isset($file)) {
    //Berikut folder admin atau backend/
    $folder_admin = "views/admin/$folder_admin";

    //Jika Sudah Login -> Check Session isLogin
    if (isset($_SESSION['isLogin'])) {
        //folder ada
        if (is_dir($folder_admin)) {
            $file_admin = "$folder_admin/$file.php";
            if (is_file($file_admin)) {
                require_once 'views/admin/layouts/header.php';
                require_once $file_admin;
                require_once 'views/admin/layouts/footer.php';
            } else {
                require_once 'views/admin/layouts/header.php';
                require_once 'views/404.php';
                require_once 'views/admin/layouts/footer.php';
            }
        } else {
            require_once 'views/admin/layouts/header.php';
            require_once 'views/404.php';
            require_once 'views/admin/layouts/footer.php';
        }
    } else {
        //Jika Belum Login
        require_once 'views/layouts/header.php';
        require_once 'views/user/login.php';
        require_once 'views/layouts/footer.php';
    }
}

//Halaman home page
if ((isset($folder) == "") && (isset($file_admin) == "")) {
    require_once 'views/layouts/header.php';
    require_once 'views/home.php';
    require_once 'views/layouts/footer.php';
}
