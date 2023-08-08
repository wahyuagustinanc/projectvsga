<?php

if (isset($_POST)) {
    session_destroy();
    //cara hapus session//
    unset($_SESSION['isLogin']);
}

echo "<script>location='index.php'</script>";