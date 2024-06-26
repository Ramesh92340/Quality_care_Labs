<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>


<div class="container">
    <section class="section">
        <div class="section-header">
            <h1>Department</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Department</div>
                <div class="breadcrumb-item active"><a href="<?= base_url(); ?>add/stocks">edit Department</a></div>
                <!-- <div class="breadcrumb-item">Add new Supplier</div> -->
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $error = session('blog-error');
                                $success = session('success');
                                ?>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger">
                                        <?php
                                        // Check if $error is an array
                                        if (is_array($error)) {
                                            foreach ($error as $value) {
                                                echo $value . '<br>';
                                            }
                                        } else {
                                            echo $error;
                                        }
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($success)) : ?>
                                    <div class="alert alert-success">
                                        <?= $success ?>
                                    </div>
                                <?php endif; ?>

                                <?= form_open_multipart('update/department'); ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Department Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="cat_name" value="<?= $dept['name'] ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?= $dept['id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7 text-center">
                                        <button type="submit" class="btn btn-primary">Update Department</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<?= $this->endSection() ?>