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
                        <h3>Все статьи</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">
                                <?
                                $per_page = 4;
                                $page = 1;

                                if (isset($_GET['page'])) {
                                    $page = (int)$_GET['page'];
                                }

                                if ($_GET['categories']) {
                                    $total_count_q = mysqli_query($connection, "SELECT count(`id`) AS `total_count` FROM `articles` WHERE `categories_id`=". (int)$_GET['categories']);

                                } else {
                                    $total_count_q = mysqli_query($connection, "SELECT count(`id`) AS `total_count` FROM `articles`");
                                }
                                $total_count = mysqli_fetch_assoc($total_count_q);
                                $total_count = $total_count['total_count'];

                                $total_pages = ceil($total_count / $per_page);

                                if ($page < 1 || $page > $total_pages) {
                                    $page = 1;
                                }

                                $offset = 0;
                                if ($page != 0) {
                                    $offset = ($per_page * $page) - $per_page;
                                }
                                if ($_GET['categories']) {
                                    $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id`=" . (int)$_GET['categories'] . " ORDER BY `id` DESC LIMIT $offset,$per_page");
                                } else {
                                    $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $offset,$per_page");
                                }
                                $articles_exist = true;
                                if (mysqli_num_rows($articles) <= 0) {
                                    echo 'Статтьи не существуют';
                                    $articles_exist = false;
                                }
                                //                                if ($_GET['categories']) {
                                //                                    $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id`=" . (int)$_GET['categories'] . " ORDER BY `id`");
                                //                                } else {
                                //                                    $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id`");
                                //                                }
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
                            <?
                            if ($articles_exist == "true") {
                                echo '<div class="paginator">';
                                if ($page > 1) {
                                    echo '<a href="/articles.php?categories=' . (int)$_GET['categories'] . '&page=' . ($page - 1) . '" style="float:left;">Предыдущая страница</a>';
                                }
                                if ($page < $total_pages) {
                                    echo '<a href="/articles.php?categories=' . (int)$_GET['categories'] . '&page=' . ($page + 1) . '" style="float:right;">Следующая страница</a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
                <section class="content__right col-md-4">
                    <? include "includes/sidebar.php" ?>
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