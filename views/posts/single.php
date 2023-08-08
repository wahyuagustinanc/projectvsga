<?php

extract($_GET);

$single_post = get_one_data($table = "tb_cerpen", $where = "id_cerpen = '$id_cerpen'");
?>

<span class="fs-3 d-block mb-2 text-center"><?= $single_post['judul'] ?></span>
<center>
    <img src="images/<?= $single_post['cover'] ?>" class="img-fluid" alt="" width="180px">

    <span class="fw-bold d-block">
        Penulis : <?= $single_post['penulis']; ?>
        <?php
        $data_kategori = get_one_data($table = "tb_kategori", $where = "id_kategori = '" . $single_post['id_kategori'] .
            "'");
        echo is_array($data_kategori) ? " - " . $data_kategori['nama_kategori'] : '';
        ?>
    </span>
</center>
<article style="text-align: justify;" class="fs-5 mt-3">
    <?= $single_post['isi'] ?>
</article>