<?php

if (isset($_POST)) {
    extract($_POST);
    hapus($table = "tb_cerpen", $where = "id_cerpen = '$id_cerpen'");
    echo "<script>location='" . URL_ADMIN . "post-crud&file=index'</script>";
}
