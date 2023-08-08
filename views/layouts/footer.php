<nav class="blog-pagination" aria-label="Pagination">
    <p class="mb-0">
        <a href="#">Back to top</a>
    </p>
</nav>

</div>

<div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0" style="text-align: justify;">CerpenKu merupakan suatu <i>website</i> yang
                digunakan untuk mewadahi para
                penulis cerita pendek untuk berkarya lebih banyak lagi dengan berbagai kategori. Kirimkan cerita kalian
                melalui email kami!</p>
        </div>

        <div>
            <h4 class="fst-italic">Rekomendasi</h4>
            <ul class="list-unstyled">
                <?php
                $list_posts = get_all_data($table = "tb_cerpen", $order = "ORDER BY id_cerpen"); ?>
                <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                        href="index.php?folder=posts&file=single&id_cerpen=<?= $list_posts[4]['id_cerpen'] ?>">
                        <img src="images/<?= $list_posts[4]['cover']; ?>" alt="" width="100%" height="96">
                        <div class="col-lg-8">
                            <h6 class="mb-0"><?= $list_posts[4]['judul']; ?></h6>
                            <small class="text-body-secondary">By <?= $list_posts[4]['penulis']; ?></small>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                        href="index.php?folder=posts&file=single&id_cerpen=<?= $list_posts[6]['id_cerpen'] ?>">
                        <img src="images/<?= $list_posts[6]['cover']; ?>" alt="" width="100%" height="96">
                        <div class="col-lg-8">
                            <h6 class="mb-0"><?= $list_posts[6]['judul']; ?></h6>
                            <small class="text-body-secondary">By <?= $list_posts[6]['penulis']; ?></small>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                        href="index.php?folder=posts&file=single&id_cerpen=<?= $list_posts[8]['id_cerpen'] ?>">
                        <img src="images/<?= $list_posts[8]['cover']; ?>" alt="" width="100%" height="96">
                        <div class="col-lg-8">
                            <h6 class="mb-0"><?= $list_posts[8]['judul']; ?></h6>
                            <small class="text-body-secondary">By <?= $list_posts[8]['penulis']; ?></small>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
    <!-- Start Footer -->
    <div class="row m-0 p-2 bg-dark text-white">
        <div class="col-lg-4">
            CP
        </div>
        <div class="col-lg-4">
            Media Sosial
        </div>
        <div class="col-lg-4">
            Map
        </div>
    </div>
    <!-- End Footer -->
</footer>
<script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>