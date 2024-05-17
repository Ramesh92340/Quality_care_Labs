<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Health Risks Name</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('update_healthcategory') ?>

                     <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name"  class="form-control" value="<?= $health2['name'] ?>">
                        <input type="hidden" name="id" class="form-control" value="<?= $health2['id'] ?>">
                    </div>  
                    <div class="grom-group">
                        <label for="Image">Select New Image:</label>
                         <img src="<?= base_url('uploads/' . $health2['image']) ?>" alt="" height="50%" width="20%">
                        <input type="file"  name="newimage" class="form-control mb-4">
                        <input type="hidden"  name="oldimage" class="form-control mb-4" value="<?= $health2['image'] ?>">
                    </div>

                    

                    <button type="submit" class="btn btn-primary">Add</button>
               <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>