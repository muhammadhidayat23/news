<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <!-- <main class="main">
        <div class="content">
            <h1>List Artikel</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 15%;" class="text-center">Status</th>
                        <th style="width: 25%;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) : ?>
                        <tr>
                            <td>
                                <div><?= $article->title ?></div>
                                <div class="text-gray"><small><?= $article->created_at ?><small></div>
                            </td>
                            <?php if ($article->draft === 'true') : ?>
                                <td class="text-center text-gray">Draft</td>
                            <?php else : ?>
                                <td class="text-center text-green">Published</td>
                            <?php endif ?>
                            <td>
                                <div class="action">
                                    <a href="<?= site_url('article/' . $article->slug) ?>" class="button button-small" target="_blank" role="button">Preview</a>
                                    <a href="<?= site_url('admin/post/edit/' . $article->id) ?>" class="button button-small" role="button">Edit</a>
                                    <a href="#" data-delete-url="<?= site_url('admin/post/delete/' . $article->id) ?>" class="button button-small button-danger" role="button" onclick="deleteConfirm(this)">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main> -->

    <section class="content">
        <div class="toolbar my-3">
            <a href="<?= site_url('admin/post/new') ?>" class="btn btn-primary" role="button" data-bs-toggle="button">+ Tulis Artikel</a>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Artikel</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 20%">
                                Judul
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 10%" class="text-center">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="text-center">
                    <h1>Tidak ada artikel</h1>
                </div>
            </div>
        </div>
    </section>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteConfirm(event) {
            Swal.fire({
                title: 'Hapus Artikel !',
                text: 'Anda yakin ingin menghapus?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'No',
                confirmButtonText: 'Yes Delete',
                confirmButtonColor: 'red'
            }).then(dialog => {
                if (dialog.isConfirmed) {
                    window.location.assign(event.dataset.deleteUrl);
                }
            });
        }
    </script>

    <?php if ($this->session->flashdata('message')) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '<?= $this->session->flashdata('message') ?>'
            })
        </script>
    <?php endif ?>
</body>

</html>