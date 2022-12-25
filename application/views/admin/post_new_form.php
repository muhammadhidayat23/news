<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <main class="main">
        <div class="content">
            <h1>Write new Article</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title">Title*</label>
                    <input type="text" name="title" class="<?= form_error('title') ? 'invalid' : '' ?>" placeholder="Judul artikel" value="<?= set_value('title') ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('title') ?>
                    </div>
                </div>
                <div>
                    <label for="content">Konten</label>
                    <input type="hidden" name="content" value="<?= set_value('content') ?>">
                    <div id="editor" style="min-height: 160px;"><?= set_value('content') ?></div>
                </div>

                <div>
                    <button type="submit" name="draft" class="btn btn-warning mt-3" value="true">Save to Draft</button>
                    <button type="submit" name="draft" class="btn btn-primary mt-3" value="false">Publish Update</button>
                    <div class="invalid-feedback">
                        <?= form_error('draft') ?>
                    </div>
                </div>
            </form>

            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            <script>
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });
                quill.on('text-change', function(delta, oldDelta, source) {
                    document.querySelector("input[name='content']").value = quill.root.innerHTML;
                });
            </script>
            <!-- <script>
                CKEDITOR.replace('content');
            </script> -->
        </div>
    </main>
</body>

</html>