<header id="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top__logo">
                <h1><?= $config['title'] ?></h1>
            </div>
            <nav class="header__top__menu">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/pages/about_me.php">Обо мне</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?
    $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories` WHERE 1");
    $categories = [];
    while($cat = mysqli_fetch_array($categories_q)){
        $categories[] = $cat;
    }
    ?>
    <div class="header__bottom">
        <div class="container">
            <nav>
                <ul>
                    <?
                    foreach($categories as $cat) {
                        ?>
                        <li><a href="/articles.php?categories=<?=$cat['id']?>"><?= $cat['title'] ?></a></li>
                        <?
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>