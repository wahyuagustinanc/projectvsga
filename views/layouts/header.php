<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>CerpenKu</title>

    <!-- CSS Bootstrap -->
    <link href="bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS Login -->
    <link rel="stylesheet" href="css/signin.css">

    <!-- CSS Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">

                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="">CerpenKu</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <?php
                    if (isset($_SESSION['isLogin'])) {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, <i class="bi bi-person-circle"></i> <?= $_SESSION['nama'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= URL_ADMIN . 'dashboard&file=index' ?>"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?folder=user&file=logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a href="index.php?folder=user&file=login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis active" href="/vsga/cerpenku">Home</a>
                <?php
                $list_kategori = get_all_data($table = "tb_kategori");
                foreach ($list_kategori as $item) {
                ?>
                    <a class="nav-item nav-link link-body-emphasis" href="index.php?folder=posts&file=kategori&id=<?= $item['id_kategori'] ?>"><?= $item['nama_kategori'] ?></a>
                <?php
                }
                ?>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-image" style="background-image: url('images/maincover.png');">
            <div class="col-lg-6 px-0">
                <h3>Cerpen Terbaru</h3>
                <?php
                $data_last_post = get_last_data($table = "tb_cerpen", $order = "ORDER BY id_cerpen desc");
                if (is_array($data_last_post)) {
                ?>
                    <h1 class="display-4 fst-italic"><?= $data_last_post['judul'] ?></h1>
                    <p class="lead my-3"><?= $data_last_post['excerpt'] ?></p>
                    <p class="lead mb-0"><a href="index.php?folder=posts&file=single&id_cerpen=<?= $data_last_post['id_cerpen'] ?>" class="text-body-emphasis fw-bold">Lanjutkan membaca...</a></p>
                <?php } ?>
            </div>
        </div>

        <div class="row mb-2">
            <?php
            $list_posts = get_all_data($table = "tb_cerpen", $order = "ORDER BY id_cerpen"); ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">
                            <?php
                            $data_kategori = get_one_data($table = "tb_kategori", $where = "id_kategori = '" . $list_posts[0]['id_kategori'] . "'");
                            echo is_array($data_kategori) ? $data_kategori['nama_kategori'] : '';
                            ?>
                        </strong>
                        <h3 class="mb-0"><?= $list_posts[0]['judul']; ?></h3>
                        <div class="mb-1 text-body-secondary"><?= $list_posts[0]['tanggal']; ?></div>
                        <p class="card-text mb-auto"><?= $list_posts[0]['excerpt']; ?></p>
                        <a href="index.php?folder=posts&file=single&id_cerpen=<?= $list_posts[0]['id_cerpen'] ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                            Lanjutkan membaca
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/<?= $list_posts[0]['cover']; ?>" width="100%" height="300">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">
                            <?php
                            $data_kategori = get_one_data($table = "tb_kategori", $where = "id_kategori = '" . $list_posts[1]['id_kategori'] . "'");
                            echo is_array($data_kategori) ? $data_kategori['nama_kategori'] : '';
                            ?>
                        </strong>
                        <h3 class="mb-0"><?= $list_posts[1]['judul']; ?></h3>
                        <div class="mb-1 text-body-secondary"><?= $list_posts[1]['tanggal']; ?></div>
                        <p class="card-text mb-auto"><?= $list_posts[1]['excerpt']; ?></p>
                        <a href="index.php?folder=posts&file=single&id_cerpen=<?= $list_posts[1]['id_cerpen'] ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                            Lanjutkan membaca
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/<?= $list_posts[1]['cover']; ?>" width="100%" height="300">
                    </div>
                </div>
            </div>


            <div class="row g-5">
                <div class="col-md-8">
                    <hr>