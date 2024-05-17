<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Health Risks Name</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('iupdate_healthcategory') ?>

                     <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>  
                    <div class="grom-group">
                        <label for="Image">Image:</label>
                        <input type="file"  name="image" class="form-control mb-4">
                    </div>

                    

                    <button type="submit" class="btn btn-primary">Add</button>
               <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>