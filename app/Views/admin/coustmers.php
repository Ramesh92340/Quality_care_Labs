<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <h1>Coustmers</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Coustmers </div>

        </div>
    </div>



    <div class="section-body">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">S.No</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Info</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php if (isset($customers) && !empty($customers)): ?>
                                <?php $i = 1; ?>
                                <?php foreach ($customers as $customer): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td><?php echo $customer['userData']['first_name'] ?? '' ?></td>
                                        <td><?php echo $customer['userData']['last_name'] ?? '' ?></td>
                                        <td class="text-center"><?php echo $customer['userData']['phone'] ?? '' ?></td>
                                        <td class="text-center">
                                            <?php if ($customer['userData']['id']): ?>
                                                <a href="<?= base_url() ?>admin/coustmers/<?= $customer['userData']['id'] ?>"><i
                                                        class="fas fa-eye"></i>
                                                </a>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</section>



<?= $this->endSection() ?>