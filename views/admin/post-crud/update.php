<div class="row">

    <?php
    extract($_POST);
    extract($_GET);
    if (isset($id_cerpen)) {
        $sql = "SELECT * FROM tb_cerpen WHERE id_cerpen='$id_cerpen'";
        $q = query($sql);
        $cerpen = mysqli_fetch_array($q);
    }

    //jika data ditemukan
    if (is_array($cerpen)) {
        if (isset($simpan)) {

            $cover = $_FILES['cover'];
            $file = $cover['name'];
            $file_temp = $cover['tmp_name'];
            $folder = "images/";
            //Pilih gambar
            if ($file != "") {
                if (move_uploaded_file($file_temp, $folder . $file)) {
                    $data_post = [
                        'id_kategori' => $id_kategori,
                        'id_user' => $_SESSION['id_user'],
                        'penulis' => $penulis,
                        'judul' => $judul,
                        'excerpt' => $excerpt,
                        'isi' => $isi,
                        'tanggal' => $tanggal,
                        'gambar' => $file
                    ];
                    update($table = "tb_cerpen", $data_post, $where = "id_cerpen = '$id_cerpen'");
                    echo "<script>location='" . URL_ADMIN . "post-crud&file=index'</script>";
                } else {
                    echo "Gagal Upload File";
                }
            } else {
                $data_post = [
                    'id_kategori' => $id_kategori,
                    'id_user' => $_SESSION['id_user'],
                    'penulis' => $penulis,
                    'judul' => $judul,
                    'excerpt' => $excerpt,
                    'isi' => $isi,
                    'tanggal' => $tanggal,
                ];
                update($table = "tb_cerpen", $data_post, $where = "id_cerpen = '$id_cerpen'");
                echo "<script>location='" . URL_ADMIN . "post-crud&file=index'</script>";
            }
        }
    }

    ?>

    <div class="col-lg-6">
        <h3 class="mb-3 mt-3">Edit Cerpen</h3>

        <form action="" method="post" class="form-post" enctype="multipart/form-data" novalidate>


            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-type"></i></span>
                    <input type="text" class="form-control" name="penulis" value="<?= $cerpen['penulis']; ?>" required placeholder="Nama Penulis">
                    <div class="invalid-feedback">
                        Silahkan isi nama penulis
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-type"></i></span>
                    <input type="date" class="form-control" name="tanggal" value="<?= $cerpen['tanggal']; ?>" required placeholder="Tanggal">
                    <div class="invalid-feedback">
                        Silahkan isi tanggal
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-fonts"></i></span>
                    <input type="text" class="form-control" name="judul" value="<?= $cerpen['judul']; ?>" required placeholder="judul">
                    <div class="invalid-feedback">
                        Silahkan isi judul cerpen
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select class="form-select form-select-md" name="id_kategori" id="">
                    <?php
                    $list_kategori = get_all_data($table = "tb_kategori");
                    foreach ($list_kategori as $item) {
                    ?>
                        <option value="<?= $item['id_kategori'] ?>"><?= $item['nama_kategori'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Pilih Cover</label>
                <input type="file" class="form-control" name="cover" value="<?= $cerpen['cover']; ?>" accept="image/*" id="" placeholder="" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text text-danger">Format jpg, jpeg, png</div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Excerpt</label>
                <textarea class="form-control" required name="excerpt" id="" rows="3"><?= $cerpen['excerpt']; ?></textarea>
                <div class="invalid-feedback">
                    Silahkan isi excerpt
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi</label>
                <input type="text" id="x" class="form-control d-none" name="isi" value="<?= $cerpen['isi']; ?>" required placeholder="Isi cerpen">
                <div class="invalid-feedback">
                    Tuliskan isi cerpen
                </div>
                <trix-editor input="x"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary mb-3" name="simpan">Update</button>

        </form>


    </div>

</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.form-post')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>