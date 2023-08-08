<?php

extract($_POST);
if (isset($login)) {

    $user_login = get_one_data($table = "tb_user", $where = "email = '$email' AND password = '$password'");

    //print_r($user_login);
    //Berhasil login
    if (is_array($user_login)) {
        //Menambahkan session 
        $_SESSION['isLogin'] = true;
        $_SESSION['nama'] = $user_login['nama'];
        $_SESSION['level'] = $user_login['level'];
        $_SESSION['id_user'] = $user_login['id_user'];

        echo "<script>location='" . URL_ADMIN . "dashboard&file=index'</script>";
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Info Login!</strong> Username atau Password anda Salah, Silahkan Login Kembali!
            </div>';
    }
}
?>


<form class="form-signin" action="" method="post">
    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

    <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
    <p class="mt-4 mb-3 text-muted text-end">&copy; 2023</p>
</form>