<div class="row mt-2">
    <h3 class="text-center">Data Kategori</h3>

    <div class="col-lg-8 col-md-4 col-sm-4 col-4">
        <a href="<?= URL_ADMIN . 'kategori-crud&file=create' ?>" class="btn btn-primary"><span data-feather="plus-circle"></span>
            Tambah</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive-lg">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    extract($_GET);
                    $list_posts = get_all_data($table = "tb_kategori", $order = "ORDER BY id_kategori");
                    $no_post = 0;
                    foreach ($list_posts as $item) {
                        $no_post++;
                    ?>
                        <tr class="">
                            <td scope="row"><?= $no_post ?></td>
                            <td><?= $item['nama_kategori'] ?></td>
                            <td>
                                <a href="<?= URL_ADMIN . "kategori-crud&file=update&id_kategori= " . $item['id_kategori']
                                            ?>"><button type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                                <form action="<?= URL_ADMIN . 'kategori-crud&file=delete' ?>" method="post" style="display: inline;">
                                    <input type="hidden" name="id_kategori" value="<?= $item['id_kategori']; ?>">
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