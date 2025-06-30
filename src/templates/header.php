<header class="fixed top-0 w-full z-50 bg-black py-3 animate-swipe-down">
    <div class="max-w-6xl mx-auto px-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="text-[#b600ff] font-bold text-xl"></div>

        <!-- Hamburger Checkbox (hidden) -->
        <input type="checkbox" id="menu-toggle" class="peer hidden">

        <!-- Hamburger Icon -->
        <label for="menu-toggle" class="md:hidden text-3xl text-[#b600ff] cursor-pointer">&#9776;</label>

        <!-- Navigation Menu -->
        <nav class="peer-checked:flex hidden md:flex flex-col md:flex-row md:items-center gap-3 absolute md:static top-16 left-0 w-full md:w-auto bg-black md:bg-transparent p-4 md:p-0">
            <a href="#about">
                <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group focus:ring-2 focus:ring-[#b600ff] bg-gradient-to-r from-[#b600ff] to-[#4e00a4]">
                    <span class="relative px-4 py-2 md:px-5 md:py-2.5 bg-black rounded-md group-hover:bg-transparent transition-all duration-200">About</span>
                </button>
            </a>
            <a href="#experience">
                <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group focus:ring-2 focus:ring-[#b600ff] bg-gradient-to-r from-[#b600ff] to-[#4e00a4]">
                    <span class="relative px-4 py-2 md:px-5 md:py-2.5 bg-black rounded-md group-hover:bg-transparent transition-all duration-200">Experience</span>
                </button>
            </a>
            <a href="#portfolio">
                <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group focus:ring-2 focus:ring-[#b600ff] bg-gradient-to-r from-[#b600ff] to-[#4e00a4]">
                    <span class="relative px-4 py-2 md:px-5 md:py-2.5 bg-black rounded-md group-hover:bg-transparent transition-all duration-200">Portfolio</span>
                </button>
            </a>
            <!-- <a href="#certs">
                <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group focus:ring-2 focus:ring-[#b600ff] bg-gradient-to-r from-[#b600ff] to-[#4e00a4]">
                    <span class="relative px-4 py-2 md:px-5 md:py-2.5 bg-black rounded-md group-hover:bg-transparent transition-all duration-200">Certs & Achievements</span>
                </button>
            </a> -->
            <a href="#contact">
                <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group focus:ring-2 focus:ring-[#b600ff] bg-gradient-to-r from-[#b600ff] to-[#4e00a4]">
                    <span class="relative px-4 py-2 md:px-5 md:py-2.5 bg-black rounded-md group-hover:bg-transparent transition-all duration-200">Contact</span>
                </button>
            </a>
        </nav>
    </div>
</header>