<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Create Item</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="store" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <input type="file" class="form-control mt-5" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
