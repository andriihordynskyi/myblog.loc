<?php
require_once "session.inc.php";
require_once "secure.inc.php";
require "../../includes/config.php";
global $config;
include "../../includes/doc.php";
?>

<?
$path = '../../static/images/';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Загрузка файла и вывод сообщения
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
        echo 'Что-то пошло не так';
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $img = $_FILES['picture']['name'];
    $category_title = trim($_POST['selectedCategory']);
    $pubdate = date("Y-m-d", time());
    $views = 0;

    $string = "\"";
    $selected_id = mysqli_query($connection,"SELECT `id` FROM `articles_categories` WHERE `title` = \"".$category_title."\"");
    $array_id = mysqli_fetch_assoc($selected_id);
    $id = $array_id['id'];

    $sql = "INSERT INTO `articles` (`title`, `text`, `categories_id`, `pubdate`, `views`, `image`) 
            VALUES (?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "ssiiis", $title, $text, $id, $pubdate, $views, $img);
    if (mysqli_stmt_execute($stmt)) {
        echo "<span style='color:green;'>Пост успешно добавлен</span>";
        echo "<hr>";
    }else{
        echo "Ошибка при добавление поста";
    }
    mysqli_stmt_reset($stmt);
    mysqli_stmt_close($stmt);
}
?>

<div id="wrapper">
    <? include "../../includes/header.php"; ?>
    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div id="comment-add-form" class="block">
                        <h3>Добавить пост</h3>
                        <div class="block__content">
                            <form enctype="multipart/form-data" class="form" method="POST"
                                  action="<?= $_SERVER['PHP_SELF'] ?>">
                                <?

                                ?>
                                <div class="form__group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="title" class="form__control" placeholder="Title">
                                        </div>
                                        <?
                                        $categories = mysqli_query($connection, "SELECT `title` FROM `articles_categories` WHERE 1");
                                        ?>
                                        <div class="col-md-4">
                                            <select size="1" name="selectedCategory">
                                                <? while ($cat = mysqli_fetch_assoc($categories)) {
                                                    ?>
                                                    <? foreach ($cat as $name) { ?>
                                                        <option value="<?= $name ?>"><?= $name ?></option>
                                                    <? }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__group">
                                        <textarea class="form__control" name="text"
                                                  placeholder="Текст комментария ..." maxlength="500"
                                                  style="max-width: 100%; min-width: 50%"></textarea>
                                </div>
                                <div class="form__group">
                                    <input type="file" name="picture">
                                </div>
                                <div class="form__group">
                                    <input type="submit" name="do_post" value="Добавить пост"
                                           class="form__control">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section class="content__right col-md-4">
                    <? include "../../includes/sidebar.php"; ?>
                </section>
            </div>
        </div>
    </div>

    </section>
</div>
</div>
</div>
</div>