<div class="block">
    <h3><span style="cursor: pointer;"
              onclick="javascript:window.open('includes/popup.php',
'popup', 'toolbar=0, width=640, height=480')" alt="this is a little secret">
        GET MOTIVATION
        </span></h3>
    <div class="block__content">
        <a href=""><img src="../static/images/just_do_it.jpg" width="100%"/></a>
    </div>
</div>

<div class="block">
    <h3>Топ читаемых статей</h3>
    <div class="block__content">
        <div class="articles articles__vertical">

            <?
            $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 5");
            ?>

            <?
            while ($art = mysqli_fetch_assoc($articles)) {
                ?>
                <article class="article">
                    <div class="article__image"
                         style="background-image: url(/static/images/<?= $art['image'] ?>);"></div>
                    <div class="article__info">
                        <a href="/article.php?id=<?= $art['id'] ?>"><?= $art['title'] ?></a>
                        <div class="article__info__meta">
                            <?
                            $art_cat = false;
                            foreach ($categories as $cat) {
                                if ($cat['id'] == $art['categories_id']) {
                                    $art_cat = $cat;
                                    break;
                                }
                            }
                            ?>
                            <small>Категория: <a
                                        href="/articles.php?categories=<?= $art_cat['id']; ?>"><?= $art_cat['title'] ?></a>
                            </small>
                        </div>
                        <div class="article__info__preview"><?= mb_substr(strip_tags($art['text']), 0, 100, 'utf-8') . ' ...' ?>
                        </div>
                    </div>
                </article>
                <?
            }
            ?>

        </div>
    </div>
</div>


<div class="block">
    <h3>Коментарии</h3>
    <div class="block__content">
        <div class="articles articles__vertical">

            <?
            $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 5");
            ?>

            <?
            while ($comment = mysqli_fetch_assoc($comments)) {
                ?>
                <article class="article">
                    <div class="article__image"
                         style="background-image: url(https://www.gravatar.com/avatar/<?= md5($comment['email']) ?>?s=125);"></div>
                    <div class="article__info">
                        <a href="/article.php?id=<?= $comment['articles_id'] ?>"><?= $comment['author'] ?></a>
                        <div class="article__info__meta"></div>
                        <div class="article__info__preview"><?= mb_substr(strip_tags($comment['text']), 0, 100, 'utf-8') . ' ...' ?>
                        </div>
                    </div>
                </article>
                <?
            }
            ?>

        </div>
    </div>
</div>