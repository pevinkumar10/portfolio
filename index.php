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

	<style>
		:root {
			--neon: #b600ff;
		}

		html {
			scroll-behavior: smooth;
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

		.glass-card-1 {
			background: rgba(255, 255, 255, 0.05);
			/* transparent glassy white */
			backdrop-filter: blur(10px);
			-webkit-backdrop-filter: blur(10px);
			/* for Safari */
			box-shadow: 0 4px 30px rgba(182, 0, 255, 0.3);
			border-radius: 1rem;
		}

		.glass-card-2 {
			background: rgba(255, 255, 255, 0.05);
			/* transparent glassy white */
			backdrop-filter: blur(10px);
			-webkit-backdrop-filter: blur(10px);
			/* for Safari */
			box-shadow: 0 4px 30px rgba(183, 0, 255, 0.47);
			border-radius: 3rem;
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

		@keyframes float-slow {

			0%,
			100% {
				transform: translateY(0px);
			}

			50% {
				transform: translateY(-10px);
			}
		}

		@keyframes float-fast {

			0%,
			100% {
				transform: translateY(0px);
			}

			50% {
				transform: translateY(-15px);
			}
		}

		.animate-float-slow {
			animation: float-slow 4s ease-in-out infinite;
		}

		.animate-float-fast {
			animation: float-fast 2.5s ease-in-out infinite;
		}

		@keyframes swipe-down {
			0% {
				opacity: 0;
				transform: translateY(-50px);
			}

			100% {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.animate-swipe-down {
			animation: swipe-down 0.8s ease-out both;
		}
	</style>
</head>

<body class="animate-swipe-down bg-black text-white font-mono min-h-screen flex flex-col">
	<?php
	load_template('header');
	load_template('hero');
	load_template('about');
	load_template('projects');
	load_template('footer');
	?>
</body>
<script>
	const filterButtons = document.querySelectorAll('.filter-btn');
	const cards = document.querySelectorAll('.project-card');

	filterButtons.forEach(button => {
		button.addEventListener('click', () => {
			const category = button.getAttribute('data-filter');
			cards.forEach(card => {
				if (category === 'all' || card.dataset.category === category) {
					card.classList.remove('hidden');
				} else {
					card.classList.add('hidden');
				}
			});
		});
	});
</script>

</html>