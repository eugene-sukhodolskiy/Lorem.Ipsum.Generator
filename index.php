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
		?>
	</pre>

	<div class="words">
		<?= $words ?>
	</div>

	<div class="sentence_list">
		<ul>
			<?php foreach ($slist as $key => $item): ?>
				<li><?= $item ?></li>
			<?php endforeach ?>
		</ul>
	</div>

	<div class="parphys">
		<?php foreach ($p as $key => $item): ?>
			<p><?= $item ?></p>
		<?php endforeach ?>
	</div>
	
</body>
</html>