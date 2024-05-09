<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <!-- <div class="section-header-back">
                <a href="<?= base_url(); ?>sliders" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div> -->
        <h1>Tests</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
            <!-- <div class="breadcrumb-item"><a href="<?= base_url(); ?>">Sliders</a></div> -->
            <div class="breadcrumb-item">Service Tests</div>
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
                <h4>Test
                    <a href="<?= base_url() ?>add-servicetest/<?= $id ?>" class="btn btn-primary float-end">Add</a>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Si No</th>
                                <th class="text-center">Test Code</th>
                                <th class="text-center">Test Name</th>
                                <th class="text-center">Department</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="Staffdata">
                            <?php if (isset($test) && !empty($test)) : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($test as $ts) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i; ?></td>
                                        <td class="text-center"><?= $ts['test_name']; ?></td>
                                        <td class="text-center">
                                            <!-- <a href="<?= base_url() ?>view/staff/" class="btn btn-info">VIEW</a> -->
                                            <a href="<?= base_url() ?>edit/test/<?= $ts['id'] ?>" class="btn btn-primary">EDIT</a>
                                            <a href="<?= base_url() ?>delete/test/<?= $ts['id'] ?>/<?= $id ?>" class="btn btn-danger">DELETE</a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7" class="text-center">No Tests found</td>
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