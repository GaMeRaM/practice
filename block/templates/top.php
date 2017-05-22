<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Страничка</title>
	<link href="style.css" type="text/css" rel="stylesheet"></link>
</head>
<body>
	<div class="container">
	<div class="main">
		<a href="index.php">Главная</a> | <a href="story.php">История</a> | <a href="feedback.php">Обратная связь</a> | <a href="creator.php">Автор</a><?php session_start(); if (isset($_SESSION[logged])) echo ' | <a href="admin.php">Админка</a> | <a href="logout.php">Выход</a>';?>
	</div>
		<div class="left">
			<ul>
				<li><a href="types.php">Виды</a></li>
				<li><a href="howitworks.php">Устройство</a></li>
				<li><a href="shop.php">Цены</a></li>
			</ul>
		</div>
		<div class="right">
			<div class="header">
				<img src="images/scanner-shop-logo.png" alt="">
			</div>