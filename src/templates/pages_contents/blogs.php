<section id="blogs" class="relative pt-20 py-40 text-white min-h-[100dvh]">
    <div class="max-w-6xl px-6 mx-auto">
        <h2 class="text-4xl font-bold text-left text-[#b600ff] neon-text mb-12 animate-on-scroll" data-animate="animate-zoom-in">BLOGS & WRITE-UPs</h2>

        <div class="relative max-w-6xl mx-auto px-4">
            <!-- Left Button -->
            <button onclick="scrollCards('left')" class="absolute left-0 top-1/2 -translate-y-1/2 bg-[#b600ff] text-black p-2 rounded-full z-10 hover:scale-110 transition">
                &#10094;
            </button>

            <!-- Card Container -->
            <div id="cardTrack" class="flex space-x-6 overflow-x-auto scroll-smooth px-10 py-2 animate-on-scroll" data-animate="animate-swipe-up">
                <!-- Card -->
                <div class="min-w-[250px] bg-[#0a0a0a] border border-[#b600ff] rounded-xl glow-card p-4 text-center">
                    <img src="src/img/blogs/CVE-2025-47812.png" class="mb-3 pb-1 rounded" alt="CVE-2025-32463" />
                    <h3 class="text-xl text-[#b600ff] font-semibold">CVE-2025-47812</h3>
                    <p class="text-sm mb-3 text-gray-300">RCE Through improper username validation.</p>
                    <a href="src/blogs/CVE-2025-47812.php" class="neon-button text-sm pt-2" target="_blank">View</a>
                </div>

                <!-- Card -->
                <div class="min-w-[250px] bg-[#0a0a0a] border border-[#b600ff] rounded-xl glow-card p-4 text-center">
                    <img src="src/img/blogs/cve-2025-32463.png" class="mb-3 rounded" alt="CVE-2025-32463" />
                    <h3 class="text-xl text-[#b600ff] font-semibold">CVE-2025-32463</h3>
                    <p class="text-sm mb-3 text-gray-300">Privilege escalation via sudo</p>
                    <a href="src/blogs/CVE-2025-32463.php" class="neon-button text-sm pt-2" target="_blank">View</a>
                </div>

                <!-- Card -->
                <div class="min-w-[250px] bg-[#0a0a0a] border border-[#b600ff] rounded-xl glow-card p-4 text-center">
                    <img src="src/img/blogs/mitm.png" class="mb-3 rounded" alt="ARP Spoofer" />
                    <h3 class="text-xl text-[#b600ff] font-semibold">ARP Spoofing</h3>
                    <p class="text-sm mb-3 text-gray-300">Basic MITM simulation</p>
                    <a href="https://medium.com/@pevinkumar/the-art-of-arp-spoofing-with-phonyarp-exploring-the-risks-and-defense-tactics-7b0c7b875f50" class="neon-button text-sm pt-2" target="_blank">View</a>
                </div>

                <!-- Card -->
                <div class="min-w-[250px] bg-[#0a0a0a] border border-[#b600ff] rounded-xl glow-card p-4 text-center">
                    <img src="src/img/blogs/xss.png" class="mb-3 rounded" alt="XSS" />
                    <h3 class="text-xl text-[#b600ff] font-semibold">XSS Walkthrough</h3>
                    <p class="text-sm mb-2 text-gray-300 pb-2">Basic to advance</p>
                    <a href="https://www.linkedin.com/pulse/from-zero-xss-hero-developers-journey-intermediate-expertise-kumar-sjubc/?trackingId=vur7%2BdMqBz%2B0J5YlZcVsxw%3D%3D" class="neon-button text-sm " target="_blank">View</a>
                </div>

                <!-- Card -->
                <div class="min-w-[250px] bg-[#0a0a0a] border border-[#b600ff] rounded-xl glow-card p-4 text-center">
                    <img src="src/img/blogs/SQLi.png" class="mb-3 rounded" alt="SQLi" />
                    <h3 class="text-xl text-[#b600ff] font-semibold">SQL Injection</h3>
                    <p class="text-sm text-gray-300 pb-3">Beginner Guide</p>
                    <a href="https://www.linkedin.com/pulse/understanding-sql-injection-comprehensive-guide-beginners-pevin-kumar-a9c5c/?trackingId=EeSO649%2B2Tb0Ty7O6GGltA%3D%3D" class="neon-button text-sm " target="_blank">View</a>
                </div>

                <!-- Card -->
                <div class="min-w-[250px] bg-[#0a0a0a] border border-[#b600ff] rounded-xl glow-card p-4 text-center">
                    <img src="src/img/blogs/buffer-overflow.png" class="mb-3 rounded" alt="ARP Spoofer" />
                    <h3 class="text-xl text-[#b600ff] font-semibold">Buffer Overflow</h3>
                    <p class="text-sm text-gray-300 pb-4">Basic Guide</p>
                    <a href="https://www.linkedin.com/posts/pevinkumar_bufferoverflow-c-cprogramming-activity-7212795157518196736-Koea?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-sm " target="_blank">View</a>
                </div>
            </div>

            <!-- Right Button -->
            <button onclick="scrollCards('right')" class="absolute right-0 top-1/2 -translate-y-1/2 bg-[#b600ff] text-black p-2 rounded-full z-10 hover:scale-110 transition">
                &#10095;
            </button>
        </div>

        <!-- Stats Section -->
        <div class="py-20 px-6 text-white bg-black">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl font-bold neon-text mb-12 animate-on-scroll" data-animate="animate-zoom-in">
                    MY JOURNEY SO FAR
                </h2>

                <!-- Metrics Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center mt-10">

                    <!-- Learning Hours -->
                    <div class="bg-[#0a0a0a] border border-[#b600ff] rounded-xl p-5 glow-card-1 animate-on-scroll" data-animate="animate-zoom-in">
                        <div class="text-5xl font-bold text-[#b600ff]">
                            <span class="counter" data-count="600">0</span>
                        </div>
                        <p class="mt-2 text-sm text-gray-300">Learning Hours</p>
                    </div>

                    <!-- Lab/Experiment Time -->
                    <div class="bg-[#0a0a0a] border border-[#b600ff] rounded-xl p-5 glow-card-1 animate-on-scroll" data-animate="animate-zoom-in">
                        <div class="text-5xl font-bold text-[#b600ff]">
                            <span class="counter" data-count="300">0</span>
                        </div>
                        <p class="mt-2 text-sm text-gray-300">Lab Hours</p>
                    </div>

                    <!-- Projects Completed -->
                    <div class="bg-[#0a0a0a] border border-[#b600ff] rounded-xl p-5 glow-card-1 animate-on-scroll" data-animate="animate-zoom-in">
                        <div class="text-5xl font-bold text-[#b600ff]">
                            <span class="counter" data-count="12">0</span>
                        </div>
                        <p class="mt-2 text-sm text-gray-300">Projects Completed</p>
                    </div>

                    <!-- Blogs Written -->
                    <div class="bg-[#0a0a0a] border border-[#b600ff] rounded-xl p-5 glow-card-1 animate-on-scroll" data-animate="animate-zoom-in">
                        <div class="text-5xl font-bold text-[#b600ff]">
                            <span class="counter" data-count="6">0</span>
                        </div>
                        <p class="mt-2 text-sm text-gray-300">Blogs Written</p>
                    </div>


                </div>
            </div>
</section>