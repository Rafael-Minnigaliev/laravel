<h1>Список новостей</h1>
<?php foreach ($newsList as $key => $news): ?>
    <div>
        <p><a href="/news/<?= $key ?>">Заголовок <?= $news['title'] ?></a></p>
        <p>категория <?= $news['category'] ?></p>
        <p>Автор <?= $news['author'] ?></p>
        <p>Статус <?= $news['status'] ?></p>
        <p>Дата создания <?= $news['crated_at'] ?></p>
        <p>Описание <?= $news['description'] ?></p>
    </div>
    <hr>
<?php
endforeach;
