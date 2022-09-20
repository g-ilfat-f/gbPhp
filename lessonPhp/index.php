<?php
$name = readline("Как Вас зовут? ");
$age = (int)readline("Введите Ваш возраст ");

echo "Вас зовут $name, вам $age лет\n";

$itemTask = "Какая задача стоит перед вами сегодня? ";
$itemTime = "Сколько примерно времени эта задача займет? ";

$task1 = readline($itemTask);
$timeTask1 = (int)readline($itemTime);
$task2 = readline($itemTask);
$timeTask2 = (int)readline($itemTime);
$task3 = readline($itemTask);
$timeTask3 = (int)readline($itemTime);

$sum = $timeTask1 + $timeTask2 + $timeTask3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
     - $task1 ({$timeTask1}ч)
     - $task2 ({$timeTask2}ч)
     - $task3 ({$timeTask3}ч)
     Примерное время выполнения плана = {$sum}ч";
