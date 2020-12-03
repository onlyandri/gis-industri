<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('user/editprofile'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <!-- jika kosong tidak muncul pesan error -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="image-preview col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <h2 class="image-panah">>></h2>
                        <div class="image-preview col-sm-3" id="imagePreview">
                            <img src="" alt="Image Preview" class="image-preview__image img-thumbnail">
                            <span class="image-preview__default-text">
                                Image Preview
                            </span>
                        </div>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="hidden" id="img" name="img" value="<?= $user['image']; ?>">
                                <input type="file" class="custom-file-input" id="image" name="image" onchange="profile()">
                                <label class=" custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>

            </form>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    const inpFile = document.getElementById('image');
    const previewContainer = document.getElementById('imagePreview');
    const previewImage = previewContainer.querySelector('.image-preview__image');
    const previewDefaultText = previewContainer.querySelector('.image-preview__default-text');

    inpFile.addEventListener("change", function() {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";

            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        } else {
            previewDefaultText.style.display = null;
            previewImage.style.display = null;
            previewImage.setAttribute("src", "");
        }
    });
</script>