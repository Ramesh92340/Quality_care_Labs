<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>


<div class="container">
    <section class="section">
        <div class="section-header">
            <h1>Package</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Package</div>
                <div class="breadcrumb-item active"><a href="<?= base_url(); ?>add/stocks">Add Packages</a></div>
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

                                <?= form_open_multipart('insert/package'); ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Package Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="pack_name" value="<?= set_value('pack_name') ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Package Price</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="pack_price" value="<?= set_value('pack_price') ?>">
                                       
                                    </div>
                                </div>
                                <!-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quantity</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input class="form-control" type="number" name="quantity" value="<?= set_value('quantity') ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MRP ₹</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="mrp" type="text" class="form-control" value="<?= set_value('mrp') ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Available or Not</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="status" id="" class="form-control" >
                                            <option value="0" class="form-control">Available</option>
                                            <option value="1" class="form-control">Not Available</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MRP</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" name="mrp" value="<?= set_value('mrp') ?>">
                                    </div>
                                </div> -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7 text-center">
                                        <button type="submit" class="btn btn-primary">Add Package</button>
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