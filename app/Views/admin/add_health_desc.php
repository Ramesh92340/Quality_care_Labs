<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Add Health Risks Name</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('insert_healthdesc') ?>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <textarea name="description" class="summernote form-control" placeholder="Type a reply ..."></textarea>
                        <input type="hidden" class="form-control" name="health_id" value="<?= $helath_id; ?>">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Add</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>