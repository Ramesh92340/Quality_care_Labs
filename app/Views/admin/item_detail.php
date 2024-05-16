<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Item Detail</h1>
    </div>
    <div class="section-body">
        <p>Name: <?= esc($item['name']) ?></p>
         
        <a href="/items">Back to List</a>
    </div>
</section>
<?= $this->endSection() ?>
