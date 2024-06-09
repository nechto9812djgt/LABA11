<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="font-family: 'Times New Roman', Times, serif;">
    <p align = "center" style="font-size: 14;">
        МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ <br>
        РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
        ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ<br>
        ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ<br>
        «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»<br>
    </p>
    <br><br><br><br><br><br>
    <body font-size = "12">
        <p align = "center"> 
            Институт естественных наук и техносферной безопасности<br>
            Кафедра информатики<br>
            Бахтина Елена Владимировна<br>
        </p>
        <br><br><br>
        <p align = "center">
            <strong>Лабораторная работа №11. «PHP».</strong><br>
            01.03.02 Прикладная математика и информатика
        </p>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <p align = "right"> 
            Научный руководитель<br>
            Соболев Евгений Игоревич
        </p>
        <br><br><br>
        <p align = "center">г. Южно-Сахалинск<br>2024 г.</p>
    </body>
    <body style="font-family: 'Times New Roman', Times, serif;">
        <h2 align = "center">Введение</h2>
        <p font-size = "12">
            <b>PHP</b> — C-подобный скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений.
        </p>
        <br>
        <h2 align = "center">Цель и задачи</h2>
        <p align = "left" font-size = "12"> 
            Цель: решить задачи при помощи JS.<br>
            Задачи:<br>
                1.	Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.<br>
                2.	Напишите скрипт, который считает количество секунд в часе.<br>
                3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:<br>
                <?php<br>
                    $var = 1;<br>
                    $var = $var + 12;<br>
                    $var = $var - 14;<br>
                    $var = $var * 5;<br>
                    $var = $var / 7;<br>
                    $var = $var + 1;<br>
                    $var = $var - 1;<br>
                    echo $var;<br>
                ?><br>
                4.	 Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.<br>
                5.	Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).<br>
                6.	Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.<br>
                7.	Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.<br>
                8.	 Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.<br>
                9.	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.<br>
                10.	 Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.<br>
                11.	 Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.<br>
                12.	 Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.<br>
                13.	Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.<br>
                14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.<br>
                15.	 Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.<br>
                16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.<br>
                17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.<br>
                18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.<br>
                19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.<br>
                $var = 47;<br>
                $var = $var + 7;<br>
                $var = $var - 18;<br>
                $var = $var * 10;<br>
                $var = $var / 20;<br>
                echo $var;<br>
                20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.<br>
                $text = 'Я';<br>
                $text = $text.' хочу';<br>
                $text = $text.' знать';<br>
                $text = $text.' PHP!';<br>
                echo $text;<br>
                21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.<br>
                $var = 10;<br>
                $var = $var + 1;<br>
                $var = $var + 1;<br>
                $var = $var - 1;<br>
                echo $var;<br>
                22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.<br>
                $var = 10;<br>
                $var = $var + 7;<br>
                $var = $var + 1;<br>
                $var = $var - 1;<br>
                $var = $var + 12;<br>
                $var = $var * 7;<br>
                $var = $var - 15;<br>
                echo $var;<br>
        </p>
        <h2 align = "center">Решение</h2>
        <p font-size = "12">Для выполнения этой лабораторной работы, я пользовалась:</p>
        <p> 1.  Материалом в сети интернет</p>
        </body>
<h3 align = "center">Файл lab11.php</h3>

```
"https://www.programiz.com/php/online-compiler/"
1.	Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
<?php
    $var = "hello";
    print("$var[0]$var[1]$var[4]");
?>
2.	Напишите скрипт, который считает количество секунд в часе.
<?php
    $second = 60*60;
    print("$second");
?>
3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
<?php
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
	$var /= 7;
	$var += 1;
	$var -= 1;
	echo $var;
?>
4.	 Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.
<?php
    $a = 3;
    print("$a");
?>
5.	Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
<?php
    $a = 10;
    $b = 2;
    $r1 = $a + $b;
    $r2 = $a - $b;
    $r3 = $a * $b;
    $r4 = $a / $b;
    print("$r1 $r2 $r3 $r4")
?>
6.	Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
<?php
    $c = 15;
    $d = 2;
    $result = $c + $d;
    print("$result");
?>
7.	Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
<?php
    $a = 10;
    $b = 2;
    $c = 5;
    print $a + $b + $c;
?>
8.	 Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c.
Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
<?php
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    print($result);
?>
9.	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
<?php
    $text = "Привет, Мир!"
    print($text);
?>
10.	 Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
<?php
    $text1 = "Привет, ";
    $text2 = "Мир!";
    print($text1 . $text2);
?>
11.	 Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
<?php
    $name = "Анатолий Цаль";
    print("Привет, $name!");
?>
12.	 Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.
<?php
    $age = 20;
    print("Мне $age лет!");
?>
13.	Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
<?php
    $text = "abcde";
    print("$text[0]$text[2]$text[4]");
?>
14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
<?php
    $a = "abcde";
    $a[0] = "!";
    print($a);
?>
15.	 Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
<?php
    $num = "12345"
    $sum = array_sum(str_split($num));
    print $sum;
?>
16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
<?php
    $hour = 60*60;
    $day = $hour*24;
    $month = $day*30;
    print ("$hour $day $month");
?>
17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
<?php
    $hour = date('H');
    $minute = date('i');
    $second = date('s');
    print($hour . ":" . $minute . ":" . $second);
?>
18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
<?php
    $num = 8;
    print $num*$num;
?>
19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
<?php
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo $var;
?>
20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
<?php
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo $text;
?>
21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.
<?php
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo $var;
?>
22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
<?php
    $var = 10;
    $var += 7;
    $var++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo $var;
?>
```
</html>
<br>
 <h2 align = "center">Вывод</h2>
 <p align = "left" font-size = "12">
    По итогу данной лабороторной работы, я научилась базовым вещам на языке PHP😊 
</p>
</body>
</html>
