<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About Me</title>
	<?php
	include_once 'src/libs/loader.php';
	?>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" href="src/css/custom.css">
</head>

<body class="bg-black text-white font-mono min-h-screen flex flex-col">
	<?php
	load_template('header');
	load_template('hero');
	load_template('about');
	load_template('experience');
	load_template('projects');
	load_template('blogs');
	load_template('contact');
	load_template('back-to-top-btn');
	?>
</body>
<script src="src/js/custom.js"></script>

</html>