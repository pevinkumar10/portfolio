<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Pevinkumar A</title>
	<?php
	include_once 'src/libs/loader.php';
	?>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" href="src/css/custom.css">
</head>

<body class="bg-black text-white font-mono min-h-[100dvh] flex flex-col">
	<?php
	load_template('pages_contents/header');
	load_template('pages_contents/hero');
	load_template('pages_contents/about');
	load_template('pages_contents/experience');
	load_template('pages_contents/projects');
	load_template('pages_contents/blogs');
	load_template('pages_contents/contact');
	load_template('components/back-to-top-btn');
	?>
</body>
<script src="src/js/custom.js"></script>

</html>