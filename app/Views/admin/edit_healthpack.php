<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Health Pack</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('update_healthpacks') ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?= $healthpack['name'] ?>">
                        <input type="hidden" class="form-control" name="health_id" value="<?= $healthpack['health_id'] ?>">
                        <input type="hidden" class="form-control" name="id" value="<?= $healthpack['id'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" class="form-control" name="price" value="<?= $healthpack['price'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="parameters">Parameters</label>
                        <input type="text" class="form-control" name="parameters" value="<?= $healthpack['parameters'] ?>" >  
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <input type="text" class="form-control" name="about" value="<?= $healthpack['about'] ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>