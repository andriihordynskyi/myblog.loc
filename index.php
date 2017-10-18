<?php
require "includes/config.php";
global $config;
include "includes/doc.php";
?>

<div id="wrapper">

    <? include "includes/header.php"; ?>
    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <a href="/articles.php">Все записи</a>
                        <h3>Новейшее_в_блоге</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">
                                <?
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 10");
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
                        <a href="/articles.php?categories=2">Все записи</a>
                        <h3>JavaScript</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">
                                <?
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id` = 2 ORDER BY `id` DESC LIMIT 10");
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
                        <a href="/articles.php?categories=1">Все записи</a>
                        <h3>PHP</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">
                                <?
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id` = 1 ORDER BY `id` DESC LIMIT 10");
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

                </section>
                <section class="content__right col-md-4">
                   <?include "includes/sidebar.php"?>
                </section>
            </div>
        </div>
    </div>

    <?
    include "includes/footer.php";
    ?>

</div>

</body>
</html>