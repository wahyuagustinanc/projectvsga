<?php

if (isset($_POST)) {
    extract($_POST);
    hapus($table = "tb_user", $where = "id_user = '$id_user'");
    echo "<script>location='" . URL_ADMIN . "users-crud&file=index'</script>";
}
