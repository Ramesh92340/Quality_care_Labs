<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Items List</h1>
    </div>
    <div class="section-body">
        <ul>
            <?php if (!empty($items) && is_array($items)): ?>
                <?php foreach ($items as $item): ?>
                    <li>
                        <?= esc($item['name']) ?>  
                        <a href="/items/show/<?= esc($item['id']) ?>">View</a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>No items found.</li>
            <?php endif; ?>
        </ul>
        <a href="/items/create">Create New Item</a>
    </div>
</section>
<?= $this->endSection() ?>
