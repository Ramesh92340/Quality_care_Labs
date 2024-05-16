<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <!-- <div class="section-header-back">
                <a href="<?= base_url(); ?>sliders" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div> -->
        <h1>Pacakges</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
            <!-- <div class="breadcrumb-item"><a href="<?= base_url(); ?>">Sliders</a></div> -->
            <div class="breadcrumb-item">Add Package</div>
        </div>
    </div>
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
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Package
                    <a href="<?= base_url() ?>add_package" class="btn btn-primary float-end">Add</a>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">S.No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Price</th>
                                <!-- <th class="text-center">No of Items</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Status</th> -->
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="Staffdata">
                            <?php if (isset($pack) && !empty($pack)) : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($pack as $pk) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i; ?></td>
                                        <td class="text-center"><?= $pk['package_name']; ?></td>
                                        <td class="text-center"><?= $pk['package_price'] ?></td>
                                        <td class="text-center">
                                            <!-- <a href="<?= base_url() ?>view/staff/" class="btn btn-info">VIEW</a> -->
                                            <a href="<?= base_url() ?>edit/package/<?= $pk['id'] ?>" class="btn btn-primary">EDIT</a>
                                            <a href="<?= base_url() ?>delete/package/<?= $pk['id'] ?>" class="btn btn-danger">DELETE</a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7" class="text-center">No Packages found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>