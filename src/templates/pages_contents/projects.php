<!-- Projects Section with Filters -->
<section id="portfolio" class="portfolio py-20 text-white min-h-screen">
    <div class="max-w-6xl px-6 mx-auto">
        <h2 class="text-4xl font-bold neon-text mb-8 animate-on-scroll" data-animate="animate-zoom-in">PORTFOLIO</h2>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap gap-4 mb-10 animate-zoom-in">
            <button class="neon-button filter-btn" data-filter="all">All</button>
            <button class="neon-button filter-btn" data-filter="pentest">Penetration Testing</button>
            <button class="neon-button filter-btn" data-filter="red-team">Red Team Simulations</button>
            <button class="neon-button filter-btn" data-filter="tools">Security Tools</button>
            <button class="neon-button filter-btn" data-filter="exploits">Exploit Developement</button>
            <button class="neon-button filter-btn" data-filter="ctf">CTFs & Labs</button>
        </div>

        <!-- Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectCards">

            <!-- Pentest Project 1-->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="pentest">
                <h3 class="text-2xl font-semibold text-[#b600ff]">Metasploitable2:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Black Box Pentesting</h4>
                <p class="text-gray-300 text-sm mb-5">
                    Conducted a comprehensive black-box penetration test on Metasploitable2, successfully exploiting over 25 vulnerabilities (excluding DVWA), and documented all findings in detail. </p>
                <div class="text-xs text-[#d580ff] mb-1 pt-4"><strong>⚒️ Tools used:</strong> Nmap, Metasploit, Hydra, etc</div>
                <div class="text-xs text-[#d580ff] pb-4 mb-3"><strong>🏷️ Tags:</strong> Recon, Exploitation, Post-Exploitation</div>
                <a href="https://www.linkedin.com/posts/pevinkumar_metasploitable-2-activity-7341505043579248642-49C9?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-sm " target="_blank">View Report</a>
            </div>

            <!-- Security Tool 1 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="tools">
                <h3 class="text-2xl font-semibold text-[#b600ff]">RaaSMonarch (v1.0.0):</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Recon Automation Framework</h4>
                <p class="text-gray-300 text-sm">
                    Developing RaaSMonarch (Recon-as-a-Service) Framework v1.0.0 to automate the reconnaissance process through a user-friendly web interface, eliminating the complexity and frustration of managing multiple tools manually.
                </p>
                <div class="text-xs text-[#d580ff] pb-1 pt-3 "><strong>🧪 Tech Stack:</strong> Python, PHP, Docker</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-5"><strong>🏷️ Tags:</strong> Pentesting, Automation, Tool Build</div>
                <a href="https://www.linkedin.com/posts/pevinkumar_recon-osint-bugbounty-activity-7333138496691339264-tn2b?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-sm" target="_blank">Preview</a>
            </div>

            <!-- Red Team Simulation 1 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="red-team">
                <h3 class="text-2xl font-semibold text-[#b600ff]">KeySnatcher:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Keylogger wiht Attack Simulation</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Designed and simulated a keylogger attack to demonstrate the keystrocks capture, secure encryption, and network-based exfiltration of keystrokes to a remote server. </p>
                <div class="text-xs text-[#d580ff] mt-5 pt-3"><strong>🧪 Tech Stack:</strong> Python</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-5"><strong>🏷️ Tags:</strong> Keylogger, Malware development</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="https://github.com/pevinkumar10/KeySnatcher" class="neon-button text-center text-sm p-2" target="_blank">View on GitHub</a>
                    <a href="https://www.linkedin.com/posts/pevinkumar_cybersecurity-ethicalhacking-education-activity-7324440652040015874-E3eR?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-center text-sm p-2" target="_blank">Simulation</a>
                </div>
            </div>

            <!-- Exploit development 1 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="exploits">
                <h3 class="text-2xl font-semibold text-[#b600ff]">CVE-2025-32463:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Sudo Privilege Escalation</h4>
                <p class="text-gray-300 text-sm mb-3">
                    A vulnerability affecting Sudo versions &lt;1.9.17p2. I developed a <strong>Python-based PoC</strong>
                    demonstrating how attackers can escalate privileges by abusing chroot call from sudo utility.
                </p>

                <div class="text-xs text-[#d580ff] pb-1"><strong>🛠️ Type:</strong> Local Privilege Escalation</div>
                <div class="text-xs text-[#d580ff] pb-1"><strong>🧪 Tech Stack:</strong> Python</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-3"><strong>🏷️ Tags:</strong> Exploit development ,PoC development, Security Research.</div>
                <a href="https://github.com/pevinkumar10/CVE-2025-32463" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>


            <!-- Red Team simulation 2 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="red-team">
                <h3 class="text-2xl font-semibold text-[#b600ff]">PhonyARP:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">ARP spoofing tool</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Developed and simulated an ARP spoofing tool to simulate MITM attacks, aimed at gaining a comprehensive understanding of ARP spoofing mechanisms, MITM attack vectors, and effective defense strategies against such threats.
                </p>
                <div class="text-xs text-[#d580ff] pb-1"><strong>🧪 Tech Stack:</strong> Python</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-3"><strong>🏷️ Tags:</strong> Scapy, ARP, MITM</div>
                <a href="https://github.com/pevinkumar10/phonyARP" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- Security Tool 3 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="tools">
                <h3 class="text-2xl font-semibold text-[#b600ff]">RootEsc:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Privilege Escalation Analysis Tool</h4>
                <p class="text-gray-300 text-sm pb-2">
                    Designed and implemented a privilege escalation analysis tool to gain a deeper understanding of enumeration utilities such as LinPEAS and WinPEAS. It automate the analysis process with the help of bash.
                </p>
                <div class="text-xs text-[#d580ff] mb-1 pt-2"><strong>🧪 Tech Stack:</strong> Python, Bash</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-4"><strong>🏷️ Tags:</strong> Linux, Post-Exploitation</div>
                <a href="https://github.com/pevinkumar10/rootEsc" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- CTF Project 1-->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll hidden extra-card" data-animate="animate-zoom-in" data-category="ctf">
                <h3 class="text-2xl font-semibold text-[#b600ff]">Abandoned-Gate:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Custom CTF Room</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Built custom CTF challenge to learn and practice chaining of three critical vulnerability like File upload to RCE to privilege escalation in a secured controlled environment (container).
                </p>
                <div class="text-xs text-[#d580ff] mb-1"><strong>🧪 Tech Stack:</strong> PHP, Bash, Docker</div>
                <div class="text-xs text-[#d580ff] mb-1 pb-4"><strong>🏷️ Tags:</strong> Development, Insecure FileUpload, RCE, Privilege Escalation</div>
                <a href="https://github.com/pevinkumar10/Abandoned-Gate" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- Hidden cards -->
            <!-- Security Tools 4-->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll hidden extra-card" data-animate="animate-zoom-in" data-category="tools">
                <h3 class="text-2xl font-semibold text-[#b600ff] ">HTTP Prober:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Status code probing tool</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Developed an asynchronous HTTP probing tool to retrieve status codes for given URLs, and packaged it for distribution on PyPI with a user-friendly interface to streamline status code analysis.
                </p>
                <div class="text-xs text-[#d580ff] mb-1 pt-2"><strong>🧪 Tech Stack:</strong> python</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-4"><strong>🏷️ Tags:</strong> Reconnaissance, Automation, Httpx, Tool Developement</div>
                <a href="https://github.com/pevinkumar10/http-prober" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- Red Team simulation 3-->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll hidden extra-card" data-animate="animate-zoom-in" data-category="red-team">
                <h3 class="text-2xl font-semibold text-[#b600ff]">CryptiHub:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Encrypted Chat Traffic Analysis</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Developed a E2E encrypted chat room app with GUI clients also Conducted traffic analysis to explore potential eavesdropping vectors under simulated adversarial conditions.
                </p>
                <div class="text-xs text-[#d580ff] mb-1 pt-2"><strong>🧪 Tech Stack:</strong> python</div>
                <div class="text-xs text-[#d580ff] mb-3 pb-4"><strong>🏷️ Tags:</strong> Insecure FileUpload, RCE, Privilege Escalation</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="https://github.com/pevinkumar10/CryptiHub" class="neon-button text-center text-sm p-2" target="_blank">View on GitHub</a>
                    <a href="https://www.linkedin.com/posts/pevinkumar_cybersecurity-python-encryption-activity-7337719572487184385-rT72?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-center text-sm" target="_blank">Simulation</a>
                </div>
            </div>
        </div>
        <!-- Show More Button -->
        <div class="text-center pt-6">
            <button id="toggleBtn" class="neon-button text-sm">Show More</button>
        </div>
    </div>
</section>