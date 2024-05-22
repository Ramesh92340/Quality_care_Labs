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
                                 <th class="text-center"> <a style="text-decoration: none;" href="<?= base_url() ?>admin/cust_services"><span style="color: black;">Services <i class="fas fa-eye"></i></a></th>
                                <th class="text-center"> <a style="text-decoration: none;" href="<?= base_url() ?>admin/cust_packages"><span style="color: black;">Packages <i class="fas fa-eye"></i></a></th>
                                <th class="text-center"> <a style="text-decoration: none;" href="<?= base_url() ?>admin/cust_healthrisks"><span style="color: black;">Health Risks <i class="fas fa-eye"></i></a></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>


                                <td class="text-center">1</td>
                                <td  class="text-center"> 5</td>
                                <td class="text-center">8</td>
                                <td class="text-center">3</td>
                            
 

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>



<?= $this->endSection() ?>