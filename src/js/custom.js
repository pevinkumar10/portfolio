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
	function scrollCards(direction) {
		const track = document.getElementById("cardTrack");
		const scrollAmount = 300;

		if (direction === "left") {
		track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
		} else {
		track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
		}
	}
	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
		if (entry.isIntersecting) {
			const el = entry.target;
			const anim = el.dataset.animate;

			if (anim) {
			el.classList.add(anim);
			observer.unobserve(el);
			}
		}
		});
	}, {
		threshold: 0.2,
	});

	document.querySelectorAll('.animate-on-scroll').forEach(el => {
		observer.observe(el);
	});

	function scrollCards(direction) {
    const track = document.getElementById("cardTrack");
    const scrollAmount = 300;

    if (direction === "left") {
      track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
      track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
  }
	const toggleBtn = document.getElementById("toggleBtn");
  	const extraCards = document.querySelectorAll(".extra-card");
  	let expanded = false;

  	toggleBtn.addEventListener("click", () => {
    expanded = !expanded;
    extraCards.forEach(card => {
      card.classList.toggle("hidden", !expanded);
    });
    toggleBtn.textContent = expanded ? "Show Less" : "Show More";
  });

  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');

    const animateCount = (counter) => {
      const target = +counter.getAttribute('data-count');
      let current = 0;

      const duration = 1000; // Total animation duration in ms
      const steps = Math.min(target, 100); // Cap steps for smoother small values
      const increment = target / steps;
      const interval = duration / steps;

      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          counter.innerText = target + '+';
          clearInterval(timer);
        } else {
          counter.innerText = Math.ceil(current);
        }
      }, interval);
    };

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
          animateCount(entry.target);
          entry.target.classList.add('counted');
        }
      });
    }, { threshold: 0.6 });

    counters.forEach(counter => observer.observe(counter));
  });