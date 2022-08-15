<h1>Категории</h1>
<ul>
    <?php foreach ($categories as $category): ?>
        <li><a href="/news/category/<?= $category?>"><?= $category?></a></li>
    <?php endforeach; ?>
</ul>
