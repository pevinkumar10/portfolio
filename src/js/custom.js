	const text = `I was addicted to hacking, more for the challenge, the intellectual exercise, the adventure than for any material gain.`;
	const target = document.getElementById("mitnick-quote");
	let i = 0;

	function typeWriter() {
		if (i < text.length) {
			target.textContent += text.charAt(i);
			i++;
			setTimeout(typeWriter, 40);
		}
	}

	window.addEventListener('DOMContentLoaded', typeWriter);

	window.addEventListener("scroll", function() {
		const btn = document.getElementById("backToTop");
		if (window.scrollY > 300) {
			btn.classList.remove("hidden");
		} else {
			btn.classList.add("hidden");
		}
	});

	function scrollToTop() {
		window.scrollTo({
			top: 0,
			behavior: "smooth"
		});
	}
	
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
