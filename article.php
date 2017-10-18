<?
require "includes/config.php";
global $config;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<div id="wrapper">

    <? include "includes/header.php"; ?>

    <?
    $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int)$_GET['id']);

    if (mysqli_num_rows($article) <= 0) {
        ?>
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-8">
                        <div class="block">
                            <h3>Статья не найдена!</h3>
                            <div class="block__content">
                                <div class="full-text">
                                    Запрашиваемая вами статья не существует!
                                </div>
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
    } else {
        $art = mysqli_fetch_assoc($article);
        mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id`= " . (int)$art['id']);
        ?>
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-8">
                        <div class="block">
                            <a><?= $art['views']; ?></a>
                            <h3><?= $art['title']; ?></h3>
                            <div class="block__content">
                                <img src="/static/images/<?= $art['image'] ?>"
                                     style="max-width: 100%; margin-bottom: 20px;">
                                <div class="full-text">
                                    <?= $art['text']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <a href="#comment-add-form">Добавить свой</a>
                            <h3>Коментарии</h3>
                            <div class="block__content">
                                <div class="articles articles__vertical">
                                    <?
                                    $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id` = " . (int)$art['id'] . " ORDER BY `id` DESC");
                                    if (mysqli_num_rows($comments) <= 0) {
                                        echo "Нет комментариев";
                                    }
                                    ?>
                                    <?
                                    while ($comment = mysqli_fetch_assoc($comments)) {
                                        ?>
                                        <article class="article">
                                            <? if ($comment['email']) { ?>
                                                <div class="article__image"
                                                     style="background-image: url(https://www.gravatar.com/avatar/<?= md5($comment['email']) ?>?s=125);"></div>
                                                <?
                                            } else {
                                                ?>
                                                <div class="article__image"
                                                     style="background-image: url(static/images/guest.jpg);"></div>
                                                <?
                                            } ?>
                                            <div class="article__info">
                                                <a href="/article.php?id=<?= $comment['articles_id'] ?>"><?= $comment['author'] ?></a>
                                                <div class="article__info__meta"></div>
                                                <div class="article__info__preview"><?= mb_substr(strip_tags($comment['text']), 0, 500, 'utf-8') . ' ...' ?>
                                                </div>
                                            </div>
                                        </article>
                                        <?
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="comment-add-form" class="block">
                            <h3>Добавить комментарий</h3>
                            <div class="block__content">
                                <form class="form" method="POST" action="/article.php?id=<?= $art['id'] ?>">
                                    <?
                                    if (isset($_POST['do_post'])) {
                                        $sql = "INSERT INTO `comments` (`author`, `nickname`, `email`, `text`, `pubdate`, `articles_id`) VALUES(
                                            ?, ?, ?, ?, ?, ?)";
                                        $pubdate = time();
                                        $article_id = $_GET['id'];
                                        if ($_POST['name']) {
                                            $author = $_POST['name'];
                                        } else {
                                            $author = 'Guest';
                                        }
                                        if ($_POST['nickname']) {
                                            $nickname = $_POST['nickname'];
                                        } else {
                                            $nickname = NULL;
                                        }
                                        if ($_POST['email']) {
                                            $email = $_POST['email'];
                                        } else {
                                            $email = NULL;
                                        }
                                        if ($_POST['text']) {
                                            $text = $_POST['text'];
                                        } else {
                                            echo "<span style='color:red;'>Заполните поле комментария</span>";
                                            echo "<hr>";
                                        }
                                        $stmt = mysqli_prepare($connection, $sql);
                                        mysqli_stmt_bind_param($stmt, "ssssii", mysqli_real_escape_string($connection, $author), mysqli_real_escape_string($connection, $nickname), mysqli_real_escape_string($connection, $email), $text, date("Y-m-d H:i:s",$pubdate), $article_id);
                                        if (mysqli_stmt_execute($stmt)) {
                                            echo "<span style='color:green;'>Комментарий успешно добавлен</span>";
                                            echo "<hr>";
                                        }
                                        mysqli_stmt_reset($stmt);
                                        mysqli_stmt_close($stmt);

                                    }
                                    ?>
                                    <div class="form__group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="name" class="form__control" placeholder="Имя">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="nickname" class="form__control"
                                                       placeholder="Никнейм">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="email" class="form__control"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__group">
                                        <textarea class="form__control" name="text"
                                                  placeholder="Текст комментария ..." maxlength="500"
                                                  style="max-width: 100%; min-width: 50%"></textarea>
                                    </div>
                                    <div class="form__group">
                                        <input type="submit" name="do_post" value="Добавить комментарий"
                                               class="form__control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="content__right col-md-4">
                        <? include "includes/sidebar.php"; ?>
                    </section>
                </div>
            </div>
        </div>


    <? } ?>
    <?
    include "../includes/footer.php";
    ?>

</div>

</body>
</html>