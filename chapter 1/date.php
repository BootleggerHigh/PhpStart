<?php
$now = new DateTime();
$date = DateTime::createFromFormat("Y-m-d H:i:s","2020-11-12 00:00:00");
$interval = $now->diff($date);
echo 'День рождения ^_^' . "<br/>";
echo "Осталось месяцев:".$interval->m,"\n";
echo "Осталось дней:".$interval->d,"\n";
echo "Осталось часов:".$interval->h,"\n";
echo "Осталось минут:".$interval->i,"\n";
echo "Осталось секунд:".$interval->s,"\n";
$dataTask = new DateTime();
echo "<br/>". $dataTask->format('d.m.Y H:i');