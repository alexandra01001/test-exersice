<?php

    include 'calc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="fonts/Europe-Normal_16264.ttf">
<link rel="stylesheet" href="fonts/ARIALMT.ttf">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src='main.js'></script>
<title>Document</title>

</head>
<body>
<div class="container">
  <header class='header'>
    <p class="header_logo"><img src="images/logo.png" alt="logo"></p>
    <p class="header_contacts">8-800-100-5005<br>+7 (3452) 522-000</p>
            
    <menu class='menu'>
      <div class='menu__item'>Кредитные карты</div>
      <div class='menu__item'>Вклады</div>
      <div class='menu__item'>Дебетовая карта</div>
      <div class='menu__item'>Страхование</div>
      <div class='menu__item'>Друзья</div>
      <div class='menu__item'>Интернет-банк</div>
    </menu>
  </header>
        
        
  <p class='breadcrumbs'>Главная/Вклады/Калькулятор</p>
    <div class="calc">
        <p class="calc_name">Калькулятор</p>
        <form action="" class='form' method='post'>
          <div class="form__labels__wrapper">
              <div class="form__labels">
                  <label class='label'for="">Дата оформления вклада</label>
                  <label class='label'for="">Сумма вклада</label>
                  <label class='label'for="">Срок вклада</label>
                  <label class='label'for="">Пополнение вклада</label>
                  <label class='label'for="">Сумма пополнения вклада</label>
              </div>
          </div>
                
          <div class="form__cont">
              <input type="text"  class='form_date' id="datepicker" placeholder="дд.мм.гггг">
              <input class="form_summ" placeholder="10 000" type="number" min="10000" max="3000000" name="summ">
              <select class="form_interval" name="interval" id="">
                  <option value="12">1 год</option>
                  <option value="36">3 года</option>
                  <option value="48">4 года</option>
                  <option value="60">5 лет</option>
              </select>
                    
              <div class='radio'> 
                  <input type="radio" value='0' name='radio'onclick='fun1()'>Нет
                  <input type="radio" value='1' name='radio' checked='checked' onclick='fun2()'>Да
              </div>
                    
              <input class='form_summ-add'  id='add' name='summ-add' placeholder='10 000' min='10000' max='3000000'type="number">
          </div>
                
          <div class="form__ratio__cont">
            <div>
              <div id="slider-summ"></div>
                <span class='slider-text-left'>10 тыс. руб.</span> <span class='slider-text-right'>3 000 000</span>
              </div>
              <div>
                <div id="slider-summ-add"></div>
                  <span class='slider-text-left'>10 тыс. руб.</span> <span class='slider-text-right'>3 000 000</span>
              </div>
          </div>
                <input class='submit' value='Рассчитать' type="submit"> 
                <p class = calc__result> Результат: <?php echo $summn; ?> руб </p>    
        </form>  
      </div>
      <footer class="footer">
        <div class="footer__cont">
            <a href="#" class="footer_item">Кредитные карты</a>
            <a href="#" class="footer_item">Вклады</a>
            <a href="#" class="footer_item">Дебетовая карта</a>
            <a href="#" class="footer_item">Страхование</a>
            <a href="#" class="footer_item">Друзья</a>
            <a href="#" class="footer_item">Интернет-банк</a>
        </div>
      </footer> 
</div>
   
</body>
</html>