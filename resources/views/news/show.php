<div class="news">
            <h3>
                <?= $news['title']?>
            </h3>
        <img src="<?= $news['image']?>" alt="">
        <br>
        <p>Status :<em><?= $news['status']?></em></p>
        <p>Author :<em><?= $news['author']?></em></p>
        <a href="<?= route('news.category',[
            'category' => $news['category']
        ])?>">
            <p>Category :<em><?= $news['category']?></em></p>
        </a>
        <p><?= $news['description']?></p>
</div>
