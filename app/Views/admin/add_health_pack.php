<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Add Health Risks Name</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="insert_healthcategory" method="post">
                    
                    <div class="form-group">
                        <label  for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control mb-3" required>

                        <label for="name">Price</label>
                        <input type="text" name="price" id="price" class="form-control mb-3" required>

                        <label for="name">Parameter:</label>
                        <input type="text" name="parameter" id="parameter" class="form-control  mb-4" required>

                        <label for="name">About:</label>
                        <textarea id="about" name="about" style="resize: both;"></textarea>


                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
