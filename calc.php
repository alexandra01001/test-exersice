<?php

$summadd=$_POST['summ-add']; // получение суммы ежемесячного пополнения
$adate = date_create_from_format('Y-m-d', $_POST['date']); //получение даты
$summn_1=$_POST['summ'];
for ($i=0; $i<$_POST['interval']; $i++){//считаем каждый месяц

    $daysn= date("t", strtotime($_POST['date']));   //получение количества дней в месяце
    $daysy = date('L',strtotime($_POST['date']))?366:365; //получение количества дней в году
    $summn=$summn_1+($summn_1+$summadd)*$daysn*(0.1/$daysy); //проценты по вкладу
    $summn_1=$summn+$summadd;//сумма вклада

   //тут надо создать новую дату
   $_POST['date']=add_month(strtotime($_POST['date']));
};

$summn=round ($summn);


function add_month($time) {
    $d=date('j',$time);  // день
    $m=date('n',$time);  // месяц
    $y=date('Y',$time);  // год
 
    // Прибавить месяц
    $m++;
    if ($m>12) { $y++; $m=1; }
 
    // Это последний день месяца?
    if ($d==date('t',$time)) {
        $d=31;
    }
    // Открутить дату до последнего дня месяца
    if (!checkdate($m,$d,$y)){
        $d=date('t',mktime(0,0,0,$m,1,$y));
    }
    // Вернуть новую дату в TIMESTAMP
    return date('Y-m-d', mktime(0,0,0,$m,$d,$y));   
}

?>