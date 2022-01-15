    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Upload Avatar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div>
                                            <label for="avatar" class="form-label">Upload Avatar</label>
                                            <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg, image/jpg, image/gif" class="form-control" multiple>
                                        </div>
                                        <?php if (isset($error)) : ?>
                                            <div class="invalid-feedback"><?= $error ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="save" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>