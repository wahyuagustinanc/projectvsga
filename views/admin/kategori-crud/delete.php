<?php

if (isset($_POST)) {
    extract($_POST);
    hapus($table = "tb_kategori", $where = "id_kategori = '$id_kategori'");
    echo "<script>location='" . URL_ADMIN . "kategori-crud&file=index'</script>";
}
