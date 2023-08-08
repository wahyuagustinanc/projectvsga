<div class="row mt-2">
    <h3 class="text-center">Daftar Users</h3>

    <div class="col-lg-8 col-md-4 col-sm-4 col-4">
        <a href="<?= URL_ADMIN . 'users-crud&file=create' ?>" class="btn btn-primary"><span data-feather="plus-circle"></span>
            Tambah</a>
    </div>

    <div class="col-lg-4 col-md-8 col-sm-8 col-8">
        <form action="" method="get">
            <div class="input-group flex-nowrap">
                <input type="hidden" name="folder_admin" value="post-crud">
                <input type="hidden" name="file" value="index">
                <input type="text" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" class="form-control" placeholder="Masukkan nama">
                <button class=" input-group-text btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>

            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive-lg">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    extract($_GET);
                    $where = "";
                    if (isset($search)) {
                        $where = " WHERE nama like'%$search%'";
                    }
                    $list_posts = get_all_data($table = "tb_user", $where, $order = "ORDER BY id_user DESC");
                    //print_r($list_posts);
                    $no_post = 0;
                    foreach ($list_posts as $item) {
                        $no_post++;
                    ?>
                        <tr class="">
                            <td scope="row"><?= $no_post ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['password'] ?></td>
                            <td>
                                <?php if ($item['level'] == 1) {
                                    echo 'Editor';
                                } else {
                                    echo 'Administrator';
                                } ?>
                            </td>
                            <td>
                                <?php
                                if ($item['gambar'] != null) {
                                    $gambar = $item['gambar'];
                                } else {
                                    $gambar = "default.png";
                                }
                                ?>
                                <img src="images/<?= $gambar ?>" alt="" class="img-fluid rounded" style="max-width: 100px;">
                            </td>
                            <td>
                                <a href="<?= URL_ADMIN . "users-crud&file=update&id_user= " . $item['id_user']
                                            ?>"><button type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                                <form action="<?= URL_ADMIN . 'users-crud&file=delete' ?>" method="post" style="display: inline;">
                                    <input type="hidden" name="id_user" value="<?= $item['id_user']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                                        <i class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>