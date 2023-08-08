<?php
extract($_GET);
$list_post_kategori = get_all_data($table = "tb_cerpen", $where = " WHERE id_kategori = '$id'");

?>
<h3 class="text-center">
    <?php
    $data_kategori = get_one_data($table = "tb_kategori", $where = "id_kategori = '" . $list_post_kategori[0]['id_kategori'] . "'");
    echo is_array($data_kategori) ? $data_kategori['nama_kategori'] : '';
    ?>
</h3>
<?php
foreach ($list_post_kategori as $item) {
?>
<article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1"><a style="text-decoration: none; color: black;"
            href="index.php?folder=posts&file=single&id_cerpen=<?= $item['id_cerpen'] ?>"><?= $item['judul']; ?></a>
    </h2>
    <p class="blog-post-meta"><?= $item['tanggal']; ?> by <u><?= $item['penulis']; ?></u>
    </p>

    <p><?= $item['isi']; ?></p>
    <hr>
</article>
<?php
}
?>