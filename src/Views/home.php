<div>
    <?php foreach ($products as $product): ?>
        <div>
            <img src="<?= htmlspecialchars($product['url_picture']) ?>" alt="Image <?= htmlspecialchars($product['name']) ?>">
            <h3><?= htmlspecialchars($product['name']) ?></h3>
            <p><?= htmlspecialchars($product['infos']) ?></p>
        </div>
    <?php endforeach; ?>
</div>