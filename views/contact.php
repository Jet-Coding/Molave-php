<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Alex Dryden</title>
    <!-- Load Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configure Tailwind to use the 'Inter' font and custom styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1117; 
        }
        input, textarea {
            /* Custom focus state to match theme */
            transition: all 0.2s;
        }
        input:focus, textarea:focus {
            border-color: #4f46e5; /* Indigo-600 */
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.5);
            outline: none;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen">

    <!-- Script to generate the unified navigation bar -->
    <script>
        // Function to simulate search (displaying a message instead of actual searching)
        function simulateSearch() {
            const tempMessage = document.createElement('div');
            tempMessage.id = 'search-status';
            tempMessage.className = 'fixed top-4 right-4 p-3 bg-yellow-600 text-white rounded-lg shadow-xl z-[100] transition-opacity duration-500';
            tempMessage.textContent = 'Search functionality activated! (Placeholder)';
            
            // Remove any existing messages
            document.querySelectorAll('#search-status').forEach(el => el.remove());
            
            document.body.appendChild(tempMessage);

            // Hide message after 3 seconds
            setTimeout(() => {
                tempMessage.style.opacity = '0';
                setTimeout(() => tempMessage.remove(), 500);
            }, 3000);
        }

        // Function to generate the navigation bar HTML (Copied for file self-containment)
        const generateNavbar = (currentPage) => {
            // Note: The new Contact link is included here
            const navItems = [
                { name: "Home", href: "index.html" },
                { name: "About", href: "about.html" },
                { name: "Skills", href: "skill.html" },
                { name: "Projects", href: "projects.html" },
                { name: "Contact", href: "contact.html" }, 
            ];

            const navHtml = navItems.map(item => {
                const isActive = item.href === currentPage;
                const baseClasses = "px-3 py-2 rounded-lg font-medium transition duration-200 hidden md:inline-block"; // Hide links on mobile to save space, rely on brand link
                const activeClasses = "bg-indigo-600 text-white shadow-lg";
                const inactiveClasses = "text-gray-300 hover:bg-gray-700 hover:text-indigo-400";
                const classes = isActive ? activeClasses : inactiveClasses;

                return `
                    <a href="${item.href}" class="${baseClasses} ${classes}">
                        ${item.name}
                    </a>
                `;
            }).join('');

            return `
                <nav class="bg-gray-800 p-4 rounded-xl shadow-2xl sticky top-0 z-50 mb-10">
                    <div class="max-w-7xl mx-auto flex justify-between items-center">
                        <a href="index.html" class="text-2xl font-bold text-indigo-400 tracking-wider">
                            Alex D.
                        </a>
                        <div class="flex items-center space-x-4">
                            <div class="flex space-x-2 md:space-x-4">
                                ${navHtml}
                            </div>
                            <!-- Search Button - Visible on all devices -->
                            <button onclick="simulateSearch()" class="p-2 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-indigo-400 transition duration-200" title="Search Site">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                        </div>
                    </div>
                </nav>
            `;
        };

        // Inject the Navbar at the start of the body
        document.addEventListener('DOMContentLoaded', () => {
            const body = document.body;
            body.insertAdjacentHTML('afterbegin', generateNavbar('contact.html'));
        });

        // Simple form handling (prevents default submit and logs data)
        function handleFormSubmit(event) {
            event.preventDefault();
            
            const form = event.target;
            const data = {
                name: form.name.value,
                email: form.email.value,
                message: form.message.value
            };
            
            const statusMessage = document.getElementById('status-message');
            
            // In a real application, you would use fetch() to send this data to a backend API.
            console.log("Form Data Submitted (Simulated):", data);

            statusMessage.textContent = 'Thank you! Your message has been received (simulated).';
            statusMessage.classList.remove('hidden');
            statusMessage.classList.add('bg-green-700');
            form.reset();

            // Hide message after 5 seconds
            setTimeout(() => {
                statusMessage.classList.add('hidden');
                statusMessage.classList.remove('bg-green-700');
            }, 5000);
        }
    </script>
    
    <div class="max-w-5xl mx-auto p-4 md:p-8">
        <!-- Header Section -->
        <header class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-indigo-400 mb-2 tracking-tight">
                Get In Touch
            </h1>
            <p class="text-xl text-gray-400">
                Let's build something great together.
            </p>
        </header>

        <!-- Main Contact Grid -->
        <main class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Column 1: Contact Details & Socials -->
            <div class="lg:col-span-1 bg-gray-800 p-6 rounded-xl shadow-2xl space-y-8 h-full">
                <h2 class="text-2xl font-bold text-yellow-400 flex items-center mb-4">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a2 2 0 01-2-2V8a2 2 0 012-2h2M9 14h6M9 18h6"></path></svg>
                    Contact Info
                </h2>

                <!-- Email -->
                <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-indigo-400">Email Address</h3>
                    <p class="text-gray-300">alex.dryden@example.com</p>
                </div>

                <!-- Phone (Placeholder) -->
                <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-indigo-400">Phone</h3>
                    <p class="text-gray-300">(555) 123-4567 <span class="text-gray-500 text-sm">(Work Inquiries Only)</span></p>
                </div>

                <!-- Social Links -->
                <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-indigo-400">Connect Online</h3>
                    <div class="flex space-x-4 pt-2">
                        <!-- Placeholder Icons (GitHub, LinkedIn) -->
                        <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.888-.01-1.748-2.784.621-3.367-1.353-3.367-1.353-.454-1.157-1.11-1.465-1.11-1.465-.908-.618.069-.606.069-.606 1.003.07 1.531 1.032 1.531 1.032.892 1.529 2.341 1.089 2.91.833.091-.647.35-1.089.636-1.334-2.22-.251-4.555-1.116-4.555-4.943 0-1.091.39-1.984 1.029-2.684-.103-.254-.447-1.272.098-2.65 0 0 .84-.268 2.75 1.022A9.68 9.68 0 0112 5.086c.85.004 1.7.111 2.5.324 1.909-1.29 2.747-1.022 2.747-1.022.546 1.379.202 2.396.099 2.647.64.7 1.028 1.593 1.028 2.684 0 3.834-2.339 4.686-4.566 4.935.359.309.678.92.678 1.855 0 1.333-.012 2.41-.012 2.73 0 .267.18.587.688.483A10.05 10.05 0 0022 12.017C22 6.484 17.523 2 12 2z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.263-4 0v5.604h-3v-11h3v1.765c1.395-2.535 7-2.35 7 2.753v6.482z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Column 2: Contact Form -->
            <div class="lg:col-span-2 bg-gray-800 p-8 rounded-xl shadow-2xl">
                <h2 class="text-3xl font-bold text-teal-400 mb-6 border-b border-gray-700 pb-3">
                    Send a Message
                </h2>
                
                <!-- Status Message Area -->
                <div id="status-message" class="hidden p-3 mb-4 rounded-lg text-white font-medium text-center transition duration-300"></div>

                <form onsubmit="handleFormSubmit(event)" class="space-y-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Your Name</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Message / Inquiry Details</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full py-3 px-6 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg transition duration-300 transform hover:scale-[1.01] shadow-lg shadow-indigo-500/50">
                        Send Message
                    </button>
                </form>
            </div>
        </main>
        
        <!-- Footer -->
        <footer class="mt-12 text-center text-gray-500 pt-6 border-t border-gray-800">
            <p>&copy; <span id="current-year-footer">2024</span> Alex Dryden. Seeking new opportunities.</p>
        </footer>

    </div>

    <script>
        // Set current year for the footer
        document.getElementById('current-year-footer').textContent = new Date().getFullYear();
    </script>
</body>
</html>