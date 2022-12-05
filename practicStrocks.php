<pre>

<?php //задача 1.1. Дана строка «php». Сделайте из нее строку «PHP». 
echo '<br>1.1<br>';
$a = 'php';
$a = strtoupper($a); //Преобразует строку в верхний регистр
echo $a;
?>


<?php //задача 1.2.  Дана строка «PHP». Сделайте из нее строку «php».
echo '<br>1.2<br>';
$b = 'PHP';
$b = strtolower($b); //Преобразует строку в нижний регистр
echo $b;
?>


<?php //задача 1.3. Дана строка «london». Сделайте из нее строку «London». 
echo '<br>1.3<br>';
$c = 'london';
$c = ucfirst($c); //Преобразует первый символ строки в верхний регистр
echo $c;
?>


<?php //задача 1.4. Дана строка «London». Сделайте из нее строку «london».
echo '<br>1.4<br>';
$d = 'London';
$d = lcfirst($d); //Преобразует первый символ строки в нижний регистр
echo $d;
?>


<?php //задача 1.5. Дана строка «london is the capital of great britain». Сделайте из нее строку «London Is The Capital Of Great Britain».
echo '<br>1.5<br>';
$e = 'london is the capital of great britain';
$e = ucwords($e); //Преобразует в верхний регистр первый символ каждого слова в строке
echo $e;
?>


<?php //задача 1.6. Дана строка «LONDON». Сделайте из нее строку «London».
echo '<br>1.6<br>';
$f = 'LONDON';
$f = strtolower($f); //Переводит все символы в нижний регистр
echo ucfirst ($f); //Первый регистр становится верхним
?>


<?php //задача 2.1. Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
echo '<br>2.1<br>';
$password = 'jkhdjhndj';
echo (strlen($password) > 5 and strlen($password) < 10) ? 'подходит' : 'не подходит';
?>


<?php //задача 3.1. Дана строка «html css php». Вырежьте из нее и выведите на экран слово «html', слово «css» и слово «php».
echo '<br>3.1<br>';
$word = 'html css php'; 
echo substr($word, 0, 4) //Возвращает подстроку. Считает от заданного значения столько, сколько нам необходимо
.'<br>'
. substr($word, 5, 3) //Возвращает подстроку. Считает от заданного значения столько, сколько нам необходимо
. '<br>'
. substr($word, -3,3); //Возвращает подстроку. Считает от заданного значения столько, сколько нам необходимо. В данном случае отсчет идет наоборот, сзади
?>


<?php //задача 3.2. Дана строка. Вырежьте и выведите на экран последние 3 символа этой строки.
echo '<br>3.2<br>';
$word = 'html css php'; 
echo substr($word, -3,3); //Возвращает подстроку. Считает от заданного значения столько, сколько нам необходимо. В данном случае отсчет идет наоборот, сзади
?>


<?php //задача 3.3. Дана строка. Проверьте, что она начинается на «http://». Если это так, выведите «да', если не так - «нет».
echo '<br>3.3<br>';
$site = 'http://rtk.ru';
if (substr($site, 0, 6) == 'http://') //Получает часть строки и возращает ее
    echo 'да';
    else 
    echo 'нет';
    ?>


<?php //задача 3.4. Дана строка. Проверьте, что она начинается на «http://» или на «https://». Если это так, выведите «да', если не так - «нет».
echo '<br>3.4<br>';
$site = 'https://rtk.ru';
if (substr($site, 0, 7) == 'http://' or substr($site, 0, 8) == 'https://') { //Получает часть строки и возращает ее. Проверяет от 0
    echo 'да'; //Получает часть строки и возращает ее. Проверяет от 0
} else {
    echo 'нет';
}
?>


<?php //задача 3.5. Дана строка. Проверьте, что она заканчивается на «.png». Если это так, выведите «да', если не так - «нет».
echo '<br>3.5<br>';
$img = 'rtk.png';
if (substr($img, -4) == '.png') { //Получает часть строки и возращает ее. Проверяет от -4
    echo 'да';
} else {
    echo 'нет';
}
?>


<?php //задача 3.6. Дана строка. Проверьте, что она заканчивается на «.png» или на «.jpg». Если это так, выведите «да', если не так - «нет».
echo '<br>3.6<br>';
$jpg = 'rtk.jpg';
if (substr($jpg, -4) == '.png') { //Получает часть строки и возращает ее. Проверяет от -4
    echo 'да';
} elseif (substr($jpg, -4) == '.jpg') { //Получает часть строки и возращает ее. Проверяет от -4
    echo 'да';
} else {
    echo 'нет';
}
?>


<?php //задача 3.7. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
echo '<br>3.7<br>';
$n = 'gfjgjkdgd';
$d = strlen($n); //Возвращает длину строки
if ($d > 5) {
    echo substr($n, 0, 5) . '...'; //Получает часть строки и возращает ее. Проверяет от 0 до 5. Если <= символов, то выведет ...
} else {
    echo $n;
}
?>


<?php //задача 4.1. Дана строка «31.12.2022». Замените все точки на дефисы.
echo '<br>4.1<br>';
$date = '31.12.2022';
echo str_replace('.', '-', $date); //Заменяет все вхождения строки поиска на строку замены. Здесь заменяются точки на дефисы
?>


<?php //задача 4.2. Дана строка «She looked again at the calendar». Замените в ней все буквы «a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3.
echo '<br>4.2<br>';
$phrase = 'She looked again at the calendar';
echo str_replace(['a', 'e', 'n'], ['1', '2', '3'], $phrase); //Заменяет все вхождения строки поиска на строку замены. Здесь заменяются буквы на числа, которые находятся в массивах
?>


<?php //задача 4.3. Дана строка с буквами и цифрами, например, «1a2b3c4b5d6e7f8g9h0». Удалите из нее все цифры. То есть в нашем случае должна получится строка «abcbdefgh».
echo '<br>4.3<br>';
$fg = '1a12b3c4b5d6e7f8g9h0';
echo str_replace(["1", "2", "3"], '', $fg);
?>


<?php //задача 5.1. Дана строка «She looked again at the calendar». Замените в ней все буквы «a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3.
echo '<br>5.1<br>';
$phrase = 'She looked again at the calendar';
$phrase_1 = strtr ($phrase, 'aen', '123'); //Преобразует заданные символы или заменяет подстроки. Тут мы задаем значения, которые нам нужно заменить
echo $phrase_1;
$phrase_2 = strtr ($phrase, //Здесь мы их меняем на нужные символы
[
    'a' => 1, 
    'e' => 2, 
    'n' => 3
    ]
);
echo $phrase_2;
?>


<?php //задача 6.1. Дана строка «the password cannot be empty». Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте «!!!».
echo '<br>6.1<br>';
$stroka = 'the pasword cannot be empty';
echo substr_replace($stroka, '!!!', 2, 5); //Заменяет часть строки. Тут мы ввожим то что нам нужно заменить и диапозон, где надо заменить
?>


<?php //задача 7.1. Дана строка «abc abc abc». Определите позицию первой буквы «b».
echo '<br>7.1<br>';
$abc = 'abc abc abc';
echo strpos($abc, 'b'); //Возвращает позицию первого вхождения подстроки. Тут определяем позицию первой b
?> 


<?php //задача 7.2. Дана строка «abc abc abc». Определите позицию последней буквы «b».
echo '<br>7.2<br>';
$abc = 'abc abc abc';
echo strrpos($abc, 'b'); // Возвращает позицию последнего вхождения подстроки в строке. Тут определяем позицию последней b
?>


<?php //задача 7.3. Дана строка «abc abc abc». Определите позицию первой найденной буквы «b', если начать поиск не с начала строки, а с позиции 3.
echo '<br>7.3<br>';
$abc = 'abc abc abc';
echo strpos($abc, 'b', 3); // Возвращает позицию последнего вхождения подстроки в строке. Ищем b начиная с 3 позиции
?>


<?php //задача 7.4. Дана строка «aaa aaa aaa aaa aaa». Определите позицию второго пробела. 
echo '<br>7.4<br>';
$aaa = 'aaa aaa aaa aaa aaa';
$str = strpos($aaa, ' '); //Возвращает позицию последнего вхождения подстроки в строке. Тут мы определяем первый пробел
echo strpos($aaa, ' ', $str + 1);
?>


<?php //задача 7.5. Проверьте, что в строке есть две точки подряд. Если это так - выведите «есть', если не так - «нет».
echo '<br>7.5<br>';
$a = '..kvdmgdksdkmg';
if (strpos($a, '..') !== false) {
//if ((strpos($a, '..', 0) >= 0) and strpos($a, '..', 0) !== false) {
    echo 'Есть';
} else echo 'Нет';
?>


<?php //задача 7.6. Проверьте, что строка начинается на «http://». Если это так - выведите «да', если не так - «нет».
echo '<br>7.6<br>';
$b = 'http://rtk.ru';
if (strpos($b, 'http://', 0) === 0) { //Возвращает позицию первого вхождения подстроки. Начинаем с http://
    echo 'да';
} else echo 'нет';
//var_dump( strpos ($b, 'http://'));
?>


<?php //задача 8.1. Дана строка. Очистите ее от концевых пробелов.
echo '<br>8.1<br>';
$stroka = 'snnsdjkfn  ';
echo trim($stroka); //Удаляет пробелы (или другие символы) из начала и конца строки. Удаляем пробел в конце
?>


<?php //задача 8.2. Дана строка «/php/». Сделайте из нее строку «php', удалив концевые слеши.
echo '<br>8.2<br>';
$php = '/php/';
echo trim($php, '/'); //Удаляет пробелы (или другие символы) из начала и конца строки. Удаляем слеши
?>


<?php //задача 8.3. Дана строка «слова слова слова.». В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.
echo '<br>8.3<br>';
$g = 'слова слова слова.';
echo rtrim($g, '.') . '.'; // Удаляет пробелы (или другие символы) из конца строки. Удаляем точку
?>


<?php //задача 9.1. Дана строка «12345». Сделайте из нее строку «54321».
echo '<br>9.1<br>';
$numbers = '12345';
echo strrev($numbers); //Переворачивает строку задом наперёд
?>


<?php //задача 9.2. Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).
echo '<br>9.2<br>';
$word = 'kayakk;lmk;lm';
if (strrev ($word) == $word) {
    echo $word;
} else $word;
?>


<?php //задача 10.1. Дана строка «the password cannot be empty». Перемешайте символы этой строки в случайном порядке.
echo '<br>10.1<br>';
$stroka = 'the password cannot be empty';
echo str_shuffle($stroka); //Переставляет символы в строке случайным образом
?>


<?php //задача 11.1. Дана строка «12345678». Сделайте из нее строку «12 345 678».
echo '<br>11.1<br>';
$numbers = '12345678';
echo number_format($numbers,  0, ',', ' '); //Форматирует число с разделением групп
?>


<?php //задача 12.1. Дана строка «html, <b>php</b>, js». Удалите теги из этой строки. 
echo '<br>12.1<br>';
$prog = 'html, <b>php</b>, js';
echo strip_tags($prog, 1); //Удаляет теги HTML и PHP из строки. Удаляем тег у php
?>


<?php //задача 12.2. Дана строка «<div><span>the <a>password</a></span> cannot <b><i>be</i></b> <strong>empty</strong></div>». Удалите все теги из этой строки, кроме тегов <b> и <i>.
echo '<br>12.2<br>';
$strokProg = '<div><span>the <a>password</a></span> cannot <b><i>be</i></b> <strong>empty</strong></div>';
echo strip_tags($strokProg, '<b><i>'); //Удаляет теги HTML и PHP из строки. Удаляем теги <b> и <i>
?>


<?php //задача 12.3. Дана строка «html, <b>php</b>, js». Выведите ее на экран «как есть': то есть браузер не должен преобразовать <b> в жирный.
echo '<br>12.3<br>';
$prog = 'html, <b>php</b>, js';
echo htmlspecialchars($prog); // Преобразует специальные символы в HTML-сущности. Делаем так чтобы <b> не работал
?>


<?php //задача 13.1. Узнайте код символов «a', «b', «c', пробела.
echo '<br>13.1<br>';
echo ord ('a') . '<br>';
echo ord ('b') . '<br>';
echo ord ('c') . '<br>';
echo ord  (' ') . '<br>';
?>


<?php // задача 13.2. Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.
echo '<br>13.2<br>';
echo 65 - 90, 97 - 122;
?>

<?php //задача 13.3. Выведите на экран символ с кодом 33.
echo '<br>13.3<br>';
echo chr (33); //Генерирует односимвольную строку по заданному числу. Тут мы работаем с таблицей ASCII
?>


<?php //задача 13.4. Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.
echo '<br>13.4<br>';
$letter = 'H';
echo ord($letter); //Конвертирует первый байт строки в число от 0 до 255. Работаем с таблицей ASCII
?>


<?php 
//задача 13.6. Дана буква английского алфавита «f». Узнайте, она маленькая или большая. Выведите букву и результат на экран.
//проверить и вывести результат регистра данной буквы
echo '<br>13.6<br>';
$a = 'm';
if ((ord ($a) >= 65 and ord ($a) <= 90) or (ord ($a) >= 97 and ord ($a) <= 122)) { //Конвертирует первый байт строки в число от 0 до 255. Вводим номер символа f (маленькой) из таблицы
 echo $a, ' ', ord ($a);  //Конвертирует первый байт строки в число от 0 до 255. Вводим номер символа f (большой) из таблицы
}
?>


<?php //задача 14.1. Дана строка «ab-cd-ef». С помощью функции strchr выведите на экран строку «-cd-ef».
echo '<br>14.1<br>';
$stroka = 'ab-cd-ef';
echo strchr($stroka, '-'); //Находит первое вхождение подстроки. Удаляем ab
?>


<?php //задача 14.2. Дана строка «ab-cd-ef». С помощью функции strrchr выведите на экран строку «-ef». Показать решение.
echo '<br>14.2<br>';
$stroka = 'ab-cd-ef';
echo strrchr($stroka, '-ef'); // Находит последнее вхождение символа в строке. Выодим нужный элемент
?>


<?php //задача 15.1. Дана строка «ab--cd--ef». С помощью функции strstr выведите на экран строку «--cd--ef».
echo '<br>15.1<br>';
$stroka = 'ab--cd--ef';
echo strstr($stroka, '--cd--ef'); //Находит первое вхождение подстроки. Выодим --cd--ef
?>


<?php //Дополнительная задача: Преобразуйте строку «var_test_text» в «varTestText». Скрипт, конечно же, должен работать с любыми аналогичными строками.
echo '<br>Доп.задача<br>';
$words = 'var_test_text';
echo str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $words)))); //Заменяет все вхождения строки поиска на строку замены. Заменяем на значения из $x3
?>