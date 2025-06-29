<section id="contact" class="py-20 px-6 bg-black text-white min-h-screen animate-zoom-in ">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-[#b600ff] neon-text mb-8">Let's Connect</h2>
        <p class="text-gray-400 mb-12">Have a question, project idea, or just want to say hello? Drop a message below!</p>

        <form class="space-y-6 max-w-2xl mx-auto" action="index.php" method="post">
            <div>
                <input type="text" placeholder="Your Name" name="name" value="" class="w-full p-3 bg-transparent border border-[#b600ff] rounded-md placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-[#b600ff]" required />
            </div>
            <div>
                <input type="email" placeholder="Your Email" name="email" value="" class="w-full p-3 bg-transparent border border-[#b600ff] rounded-md placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-[#b600ff]" required />
            </div>
            <div>
                <textarea rows="5" placeholder="Your Message" name="message" value="" class="w-full p-3 bg-transparent border border-[#b600ff] rounded-md placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-[#b600ff]" required></textarea>
            </div>
            <div>
                <button type="submit" class="neon-button px-6 py-2 rounded-md text-[#b600ff] border-2 border-[#b600ff] hover:bg-[#b600ff] hover:text-black transition duration-300 text-lg shadow-lg">Send Message</button>
            </div>
        </form>
    </div>
</section>