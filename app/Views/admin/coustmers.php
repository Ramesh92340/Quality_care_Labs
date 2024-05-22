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
                                <th class="text-center">Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total Price</th>
                                <th class="text-center">Time</th>
                                <th class="text-center">Info</th>
                            </tr>
                        </thead>

                        
                        <tbody>
                            <tr>


                                <td class="text-center">1</td>
                                <td>rahul</td>
                                <td class="text-center">9988989999</td>
                                <td class="text-center">6</td>
                                <td class="text-center">6000</td>
                                <td class="text-center">22/05/2024</td>
                                <td class="text-center"><a href="<?= base_url() ?>admin/info"><i class="fas fa-eye"></i></a> </td>


                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</section>



<?= $this->endSection() ?>