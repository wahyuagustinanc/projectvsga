<div class="row">

    <?php
    extract($_POST);
    extract($_GET);
    if (isset($id_kategori)) {
        $sql = "SELECT * FROM tb_kategori WHERE id_kategori='$id_kategori'";
        $q = query($sql);
        $kat = mysqli_fetch_array($q);
    }

    //jika data ditemukan
    if (is_array($kat)) {
        if (isset($simpan)) {
            $data_post = [
                'nama_kategori' => $nama_kategori
            ];
            update($table = "tb_kategori", $data_post, $where = "id_kategori = '$id_kategori'");
            echo "<script>location='" . URL_ADMIN . "kategori-crud&file=index'</script>";
        }
    }

    ?>

    <div class="col-lg-6">
        <h3 class="mb-3 mt-3">Edit Kategori</h3>

        <form action="" method="post" class="form-post" enctype="multipart/form-data" novalidate>


            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-type"></i></span>
                    <input type="text" class="form-control" name="nama_kategori" value="<?= $kat['nama_kategori']; ?>" required placeholder="Nama Kategori">
                    <div class="invalid-feedback">
                        Silahkan isi nama kategori
                    </div>
                </div>
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