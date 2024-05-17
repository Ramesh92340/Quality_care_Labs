<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Add Health Pack</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('insert_healthpacks') ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name">
                        <input type="hidden" class="form-control" name="health_id" value="<?= $health_id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="parameters">Parameters</label>
                        <input type="number" class="form-control" name="parameters">  
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <input type="text" class="form-control" name="about">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>