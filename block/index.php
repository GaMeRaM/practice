<?php include 'templates/top.php';?>
<h1>Наш магазин уже 30 лет продаёт сканеры и завоевал мировое признание.</h1> 
<p>Мы продаём все виды сканеров. От планшетных до планарных. Приходите. Мы найдем то, что вы ищете!</p>

<ul id="slides">
    <li class="slide showing"><img src="images/plan.jpg" style="max-height:100%" class="center"></li>
    <li class="slide"><img src="images/plansh.jpg" style="max-height:100%" class="center"></li>
    <li class="slide"><img src="images/slide.jpg" style="max-height:100%" class="center"></li>
    <li class="slide"><img src="images/ruchnye-skanery.jpg" style="max-height:100%" class="center"></li>
    <li class="slide"><img src="images/shtrih.jpg" style="max-height:100%" class="center"></li>
</ul>


<label for="x">Ширина</label>
<input type="text" name="" id="x" style="width:100px" onkeypress='return validate(event)'><br>
<label for="y">Высота</label>
<input type="text" name="" id="y" style="width:100px" onkeypress='return validate(event)'><br>
<label for="colors">Битность</label>
<input type="text" name="" id="colors" style="width:100px" onkeypress='return validate(event)'><br>
<label for="result">Результат</label>
<input type="text" id="result" style="width:100px" readonly="readonly">
<button id="calc">Вычислить</button>
<script src="script/script.js"></script>

<?php include 'templates/bot.php';?>