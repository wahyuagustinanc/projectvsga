<?php
$list_posts = get_all_data($table = "tb_cerpen", $order = "ORDER BY id_cerpen DESC");

$no_list_ = 1;
for ($i = 0; $i < count($list_posts); $i++) {
    if ($i == 0) {
        continue;
    }
?>
<article class="blog-post">
    <h4 class="link-body-emphasis mb-1"><a
            href="index.php?folder=posts&file=single&id_cerpen=<?= $list_posts[$i]['id_cerpen'] ?>"
            style="color: black; text-decoration: none;" onMouseOver="this.style.color='#00F'"
            onMouseOut="this.style.color='#000'"><?= $list_posts[$i]['judul']; ?></a>
    </h4>
    <p class="blog-post-meta"><?= $list_posts[$i]['tanggal']; ?> by <u><?= $list_posts[$i]['penulis']; ?></u>
    </p>

    <p><?= $list_posts[$i]['excerpt']; ?></p>
    <hr>
</article>
<?php
    $no_list_++;
}
?>