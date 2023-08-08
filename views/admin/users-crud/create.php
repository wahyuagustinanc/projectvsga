<div class="row">

    <?php
    extract($_POST);
    if (isset($simpan)) {

        $gambar = $_FILES['gambar'];
        $file = $gambar['name'];
        $file_temp = $gambar['tmp_name'];
        $folder = "images/";
        //Pilih gambar
        if ($file != "") {
            if (move_uploaded_file($file_temp, $folder . $file)) {
                $data_post = [
                    'nama' => $nama,
                    'email' => $email,
                    'password' => $password,
                    'level' => $level,
                    'gambar' => $file
                ];
                insert($table = "tb_user", $data_post);
                echo "<script>location='" . URL_ADMIN . "users-crud&file=index'</script>";
            } else {
                echo "Gagal Upload File";
            }
        } else {
            $data_post = [
                'nama' => $nama,
                'email' => $email,
                'password' => $password,
                'level' => $level
            ];
            insert($table = "tb_user", $data_post);
            echo "<script>location='" . URL_ADMIN . "users-crud&file=index'</script>";
        }
    }
    ?>

    <div class="col-lg-6">
        <h3 class="mb-3 mt-3">Tambah User</h3>

        <form action="" method="post" class="form-post" enctype="multipart/form-data" novalidate>


            <div class="mb-3">
                <label class="form-label">Nama</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-type"></i></span>
                    <input type="text" class="form-control" name="nama" required placeholder="Nama">
                    <div class="invalid-feedback">
                        Silahkan isi nama
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="text" class="form-control" name="email" required placeholder="Alamat email">
                    <div class="invalid-feedback">
                        Silahkan isi e-mail
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                    <input type="text" class="form-control" name="password" required placeholder="Password">
                    <div class="invalid-feedback">
                        Silahkan isi password
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Level</label>
                <select class="form-select form-select-md" name="id_kategori" id="">
                    <option selected disabled hidden> </option>
                    <option value="1">1. Editor</option>
                    <option value="2">2. Administrator</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Pilih Gambar</label>
                <input type="file" class="form-control" name="gambar" accept="image/*" id="" placeholder="" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text text-danger">Format jpg, jpeg, png</div>
            </div>

            <button type="submit" class="btn btn-primary mb-3" name="simpan">Simpan</button>

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