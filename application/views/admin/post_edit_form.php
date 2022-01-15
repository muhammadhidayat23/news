<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <main class="main">
        <div class="content">
            <h1>Edit Article</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control <?= form_error('title') ? 'invalid' : '' ?>" value="<?= form_error('title') ? set_value('title') : $article->title ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('title') ?>
                    </div>
                </div>

                <div class="form-floating">
                    <label for="content">Konten</label>
                    <?= $content = form_error('content') ? set_value('content') : $article->content ?>
                    <input type="hidden" name="content" value="<?= html_escape($content) ?>">
                    <div id="editor" style="min-height: 160px;"><?= $content ?></div>
                </div>

                <div>
                    <button type="submit" name="draft" class="btn btn-warning mt-3" value="true">Save to Draft</button>
                    <button type="submit" name="draft" class="btn btn-primary mt-3" value="false">Publish & Update</button>
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
        </div>
    </main>
</body>
<!-- <script>
    CKEDITOR.replace('content');
</script> -->

</html>