<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lorem ipsum</title>
</head>
<body>
	<pre>
		<?php
			include 'LoremIpsum.php';
			$lorem = new LoremIpsum();
			$p = $lorem -> gen_paragraphs(4);
			$slist = $lorem -> gen_list(6);
			$words = $lorem -> gen_words(10);
			$name = $lorem -> get_name();
			$name_man = $lorem -> get_man_name();
			$name_woman = $lorem -> get_woman_name();
			$surname = $lorem -> get_surname();
			$full_name = $lorem -> get_full_name_to_str();
			$phone_number = $lorem -> get_phone_number();
			$email = $lorem -> get_email();
			$user = $lorem -> get_user_card();
		?>
	</pre>

	<div class="words">
		<h2>Words</h2>
		<?= $words ?>
	</div>

	<div class="sentence_list">
		<h2>List</h2>
		<ul>
			<?php foreach ($slist as $key => $item): ?>
				<li><?= $item ?></li>
			<?php endforeach ?>
		</ul>
	</div>

	<div class="parphys">
		<h2>Paragraphs</h2>
		<?php foreach ($p as $key => $item): ?>
			<p><?= $item ?></p>
		<?php endforeach ?>
	</div>

	<div class="names">
		<h2>Names</h2>
		<b>Random sex: </b> <?= $name ?><br>
		<b>Random name of man: </b> <?= $name_man ?><br>
		<b>Random name of woman: </b> <?= $name_woman ?>
	</div>

	<div class="sur_names">
		<h2>Surnames</h2>
		<b>Random surname: </b> <?= $surname ?><br>
	</div>

	<div class="full_names">
		<h2>Full names</h2>
		<b>Random full name: </b> <?= $full_name ?><br>
	</div>

	<div class="phone_number">
		<h2>Phone Number</h2>
		<?= $phone_number ?>
	</div>

	<div class="email">
		<h2>Email</h2>
		<?= $email ?>
	</div>

	<div class="user_card">
		<h2>User card</h2>
		<pre>
			<? var_dump($user) ?>
		</pre>
	</div>
	
</body>
</html>