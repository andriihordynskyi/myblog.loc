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
            mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id`= ".(int)$art['id']);  
        ?>
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-8">
                        <div class="block">
                            <a><?=$art['views'];?></a>
                            <h3><?=$art['title'];?></h3>
                            <div class="block__content">
                                <img src="/static/images/<?=$art['image']?>" style="max-width: 100%;">
                                <div class="full-text">
                                    <?=$art['text'];?>
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
    <? } ?>
    <?
    include "../includes/footer.php";
    ?>

</div>

</body>
</html>