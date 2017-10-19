<?php
require "../includes/config.php";
global $config;
include "../includes/doc.php";
include "../includes/header.php";
?>
<?
$arr1 = ['name1', 'name2', 'name3', 'name4', 'name5', 'name6'];
shuffle($arr1);
$arr2 = $arr1;
$arr2[] = $arr1[0];
$final = [];
shuffle($arr1);
for ($i = 0; $i <= count($arr1); $i++) {
        for($j=count($arr1); $j>=0; $j--){
            $final[$arr1[$i]] = $final[$arr1[$j+1]];
        }
}

print_r($final);
?>
    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <div class="current_task">
                            <h1>Завдання:</h1>
                            <p><span style="font-size: 20px">Створити сайт «Таємний Санта». Суть в тому, що є форма із textarea. В кожний рядок вводиться електронна адреса, далі через пробіл Прізвище Ім’я По батькові користувача. При натисненні кнопки відбувається наступне:
                                Потрібно для кожного користувача визначити іншого користувача, якому він має підготувати подарунок.
                                Дані сформувати у текстових файлах. Кожен текстовий файл має назву Прізвище_Ім’я_По-батькові.txt. У кожному файлі у єдиному рядку повинне бути Прізвище Ім’я По батькові іншої особи. Таким чином мають бути файли із назвою-ім’ям кожного і у цих файлах мають бути використані всі імена по одному разу. Дарувати подарунок собі не можна, тобто назва не співпадає зі змістом.
                                Додатково: При встановленні галочки «Розіслати» відбувається розсилка файлів по одному кожній людині (для інформування кому він має підготувати подарунок). Після цього текстові файли видаляються з сервера.
                                    Самостійно розібратися як працює відправлення електронних листів засобами php</span>
                            </p>
                        </div>
                    </div>
                    <!--                    Форма для заповнення-->
                    <div class="block">
                        <div id="comment-add-form" class="block">
                            <h3>Добавить участников</h3>
                            <div class="block__content">
                                <form class="form" method="POST" action="<?= $_SERVER["PHP_SELF"]; ?>">
                                    <!--                                    <div class="form__group">-->
                                    <!--                                        <div class="row">-->
                                    <!--                                            <div class="col-md-4">-->
                                    <!--                                                <input type="text" name="email" class="form__control"-->
                                    <!--                                                       placeholder="Email">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-md-4">-->
                                    <!--                                                <input type="text" name="name" class="form__control" placeholder="Имя">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="form__group">
                                        <textarea class="form__control" name="text"
                                                  placeholder="andriihordynskyi@gmail.com Andrii Hordynskyi Olexandrovich ..."
                                                  style="max-width: 100%; min-width: 50%"></textarea>
                                    </div>
                                    <div class="form__group">
                                        <input type="submit" name="do_post" value="Добавить участников"
                                               class="form__control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php
include "../includes/footer.php";