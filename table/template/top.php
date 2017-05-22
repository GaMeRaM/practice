<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="style.css" type="text/css" rel="stylesheet"></link>
</head>
<body>
	<table class="maintable">
		<tr><td colspan="2" class="main"><a href="index.php">Главная</a> | <a href="story.php">История</a> | <a href="feedback.php">Обратная связь</a> | <a href="creator.php">Автор</a><?php session_start(); if (isset($_SESSION[logged])) echo ' | <a href="admin.php">Админка</a> | <a href="logout.php">Выход</a>';?></td></tr>
		<tr>
			<td rowspan="2" class="left">
				<ul>
					<li><a href="types.php">Виды</a></li>
					<li><a href="howitworks.php">Устройство</a></li>
					<li><a href="shop.php">Цены</a></li>
				</ul>
			</td>
			<td class="header"><img src="images/scanner-shop-logo.png" alt=""></td>
			<tr ><td class="right content">