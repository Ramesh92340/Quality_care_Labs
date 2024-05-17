<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Add Health Risks Name</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('update_healthdesc') ?>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <textarea name="description" class="summernote form-control" placeholder="Type a reply ..."><?= $healthdesc['description'] ?></textarea>
                        <input type="hidden" class="form-control" name="id" value="<?= $healthdesc['id'] ?>">
                        <input type="hidden" class="form-control" name="health_id" value="<?= $healthdesc['health_id'] ?>">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Update</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>