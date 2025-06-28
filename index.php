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
	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<style>
		:root {
			--neon: #b600ff;
		}

		.neon-text {
			color: var(--neon);
			text-shadow: 0 0 1px var(--neon), 0 0 10px var(--neon), 0 0 20px var(--neon);
		}

		.neon-box {
			border: 1px solid var(--neon);
			box-shadow: 0 0 10px var(--neon), 0 0 20px var(--neon);
		}

		.neon-button {
			background: transparent;
			border: 2px solid var(--neon);
			color: var(--neon);
			padding: 0.5rem 1.5rem;
			text-shadow: 0 0 5px var(--neon);
			box-shadow: 0 0 10px var(--neon);
			transition: all 0.3s ease;
		}

		.neon-button:hover {
			background: var(--neon);
			color: black;
			box-shadow: 0 0 20px var(--neon), 0 0 30px var(--neon);
		}

		@keyframes zoom-in {
			from {
				opacity: 0;
				transform: scale(0.9);
			}

			to {
				opacity: 1;
				transform: scale(1);
			}
		}

		.animate-zoom-in {
			animation: zoom-in 0.6s ease-out forwards;
		}
	</style>
</head>

<body class="bg-black text-white font-mono min-h-screen flex flex-col">
	<!-- Header -->
	<header class="p-6">
		<div class="max-w-6xl mx-auto flex justify-between items-center">
			<nav class="space-x-6">
				<a href="#about" class="hover:text-purple-400 animate-zoom-in">About</a>
				<a href="#projects" class="hover:text-purple-400 animate-zoom-in">Projects</a>
				<a href="#certs" class="hover:text-purple-400 animate-zoom-in">Certs</a>
				<a href="#contact" class="hover:text-purple-400 animate-zoom-in">Contact</a>
			</nav>
		</div>
	</header>
	<?php
	load_template('hero');
	load_template('about');
	load_template('projects');
	load_template('footer');
	?>
</body>

</html>