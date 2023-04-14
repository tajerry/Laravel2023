<?php foreach ($newsList as $news):?>

    <div class="news">
        <a href="<?= route('news.show',[
            'id' => $news['id']
        ])?>">
            <h3>
                <?= $news['title']?>
            </h3>
        </a>
        <img src="<?= $news['image']?>" alt="">
        <br>
        <p>Status :<em><?= $news['status']?></em></p>
        <p>Author :<em><?= $news['author']?></em></p>
        <p><?= $news['description']?></p>
    </div>
<?php endforeach;?>
