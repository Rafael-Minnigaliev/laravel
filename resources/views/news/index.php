<?php
foreach ($newsList as $key => $news):?>
    <div>
        <h3><a href="/news/<?= $key?>">Title <?= $news['title']?></a></h3><br>
        <h3>Author <?= $news['author']?></h3><br>
        <h3>Status <?= $news['status']?></h3><br>
        <h3>Crated at <?= $news['crated_at']?></h3><br>
        <p><?= $news['description']?></p>
    </div>
<?php
endforeach;
