<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        
        <h1>Coustmers</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active" >Coustmers Services </div>
            
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
                                <th class="text-center">Test Code</th>
                                <th class="text-center">Test Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total Price</th>
                               
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

 


