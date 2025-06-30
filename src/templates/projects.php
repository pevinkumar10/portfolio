<!-- Projects Section with Filters -->
<section id="projects" class="projects-page py-20 px-6 text-white min-h-screen">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold neon-text mb-8 animate-on-scroll" data-animate="animate-zoom-in">Projects</h2>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap gap-4 mb-10 animate-zoom-in">
            <button class="neon-button filter-btn" data-filter="all">All</button>
            <button class="neon-button filter-btn" data-filter="pentest">Penetration Testing</button>
            <button class="neon-button filter-btn" data-filter="red-team">Red Team Simulations</button>
            <button class="neon-button filter-btn" data-filter="tools">Security Tools</button>
            <button class="neon-button filter-btn" data-filter="ctf">CTFs & Labs</button>
        </div>

        <!-- Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectCards">

            <!-- Pentest Project -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="pentest">
                <h3 class="text-2xl font-semibold text-[#b600ff]">Metasploitable2:</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Black Box Testing</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Conducted a full black box Pentesting on Metasploitable2 (A vulnerable machine) exploitad 25+ Vulnerabilities
                </p>
                <div class="text-xs text-[#b600ff] mb-3">Tags: Recon, Exploitation, Post-Exploitation</div>
                <a href="https://www.linkedin.com/posts/pevinkumar_metasploitable-2-activity-7341505043579248642-49C9?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-sm " target="_blank">View Report</a>
            </div>

            <!-- Security Tool 1 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="tools">
                <h3 class="text-2xl font-semibold text-[#b600ff]">RaaSMonarch (v1.0.0)</h3>
                <h4 class="text-sm font-semibold text-[#b600ff] mb-2">Recon Automation Framework</h4>
                <p class="text-gray-300 text-sm mb-3">
                    Developing RaaSMonarch (Recon-as-a-Service) framework version 1.0.0 to automate the reconnaissance process from Web Interface.
                </p>
                <div class="text-xs text-[#b600ff] mb-1">Tech Stack: Python, PHP, Docker, BootStrap 5</div>
                <div class="text-xs text-[#b600ff] mb-4">Tags: Penetration Testing, Automation, Tool Building</div>
                <a href="#" class="neon-button text-sm " target="_blank">View on GitHub</a>
            </div>

            <!-- Security Tool 2 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="tools">
                <h3 class="text-2xl font-semibold text-[#b600ff] mb-2">ARP Spoofer</h3>
                <p class="text-gray-300 text-sm mb-3">
                    Scapy-powered ARP poisoner with target monitoring and packet interception.
                </p>
                <div class="text-xs text-[#b600ff] mb-3">Tags: Scapy, ARP, MITM</div>
                <a href="#" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- Security Tool 3 -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="tools">
                <h3 class="text-2xl font-semibold text-[#b600ff] mb-2">Privilege Analyzer</h3>
                <p class="text-gray-300 text-sm mb-3">
                    Enumerates local privilege escalation vectors on Linux including SUID, capabilities, and misconfigs.
                </p>
                <div class="text-xs text-[#b600ff] mb-3">Tags: Linux, Post-Exploitation</div>
                <a href="#" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- CTF Project -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="ctf">
                <h3 class="text-2xl font-semibold text-[#b600ff] mb-2">CTF development</h3>
                <p class="text-gray-300 text-sm mb-3">
                    Built custom CTF challenge to learn and practice chaining of three critical vulnerability like File upload to RCE to privilege escalation in a secured controlled environment (docker container).
                </p>
                <div class="text-xs text-[#b600ff] mb-3">Tags: CTF Dev, Insecure FileUpload, RCE, Privilege Escalation</div>
                <a href="https://github.com/pevinkumar10/Abandoned-Gate" class="neon-button text-sm" target="_blank">View on GitHub</a>
            </div>

            <!-- Red Team Simulations -->
            <div class="glass-card-1 p-6 rounded-xl border border-[#b600ff] project-card hover:shadow-[0_0_25px_#b600ff] animate-on-scroll" data-animate="animate-zoom-in" data-category="red-team">
                <h3 class="text-2xl font-semibold text-[#b600ff] mb-2">Custom keylogger</h3>
                <p class="text-gray-300 text-sm mb-3">
                    Developed and simulated a keylogger attack to demonstrates how keystrokes can be captured, encrypted securely, and exfiltrated over a network to a remote server.
                </p>
                <div class="text-xs text-[#b600ff] mb-3">Tags: Malware development, Secure Data Exfiltration, Keylogger</div>
                <a href="https://github.com/pevinkumar10/KeySnatcher" class="neon-button text-sm " target="_blank">View on GitHub</a>
                <a href="https://www.linkedin.com/posts/pevinkumar_cybersecurity-ethicalhacking-education-activity-7324440652040015874-E3eR?utm_source=share&utm_medium=member_desktop&rcm=ACoAADZci6kBNpXUA5gklG3nbUEXsFFHIpxINvU" class="neon-button text-sm p-2" target="_blank">Simulation</a>
            </div>
        </div>
    </div>
</section>