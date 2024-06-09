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
