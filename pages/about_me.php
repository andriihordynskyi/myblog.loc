<?
require "../includes/config.php";
global $config;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About me</title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<div id="wrapper">

    <? include "../includes/header.php"; ?>

    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <h3>Обо мне</h3>
                        <div class="block__content">
                            <img src="../static/images/about_me.jpg" style="width: 100%">

                            <div class="full-text">
                                <h1>You</h1>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem odit qui reprehenderit, sed soluta veniam. Ab accusantium blanditiis commodi dicta distinctio dolorem dolores eaque earum
                                    error esse est explicabo impedit incidunt molestias mollitia, natus nisi odio pariatur provident quam quis reiciendis repellat tempore ullam unde velit voluptas voluptate. Facere, non!</p>

                                <h2>Goals</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem odit qui reprehenderit, sed soluta veniam. Ab accusantium blanditiis commodi dicta distinctio dolorem dolores eaque earum
                                    error esse est ex</p>

                                <h2>About project</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid autptas! Aliquid aspernatur corporis cumque deleniti dolorem doloremque et eveniet hic iure, maiores maxime natus, optio provident quas quibusdam totam veniam! Ab accusantium adipisci alias aspernatur consequuntur delectus dolorem, est eum ex illum impedit ipsa laboriosam minus molestias natus nemo nostrum provident quae quam qui rem repellat rerum sapiente sint tempore tenetur ullam unde voluptas voluptatibus voluptatum. Animi aspernatur culpa delectus deleniti deserunt dignissimos dolore doloribus dolorum ducimus earum eos eum ex hic illo, ipsa minima molestias necessitatibus nisi optio placeat quod reiciendis repellat similique tenetur veniam. Animi asperiores consequatur deleniti earum facilis harum iure, molestiae possimus quam quia reiciendis, similique totam, unde vero voluptatibus? Accusantium aliquid animi asperiores cum debitis distinctio eaque earum eligendi enim eos esse eum ex exercitationem fugiat inventore nihil officiis perspiciatis, quas quibusdam quis quos rem, repellat reprehenderit sed suscipit tempora temporibus totam veritatis vitae voluptates! At debitis facilis nemo odit placeat quia, quos reiciendis? Distinctio dolor est et impedit inventore laborum nemo, possimus praesentium, quis quod, suscipit voluptate. Accusamus ad aliquid architecto assumenda
                                    corporis distinctio dolore dolores,uos rerum sapiente sunt voluptate. Aperiam asperiores aspernatur aut ipsa Aspernatur, veniam!</p>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="content__right col-md-4">
                    <? include "../includes/sidebar.php" ?>
                </section>
            </div>
        </div>
    </div>

    <?
    include "../includes/footer.php";
    ?>

</div>

</body>
</html>