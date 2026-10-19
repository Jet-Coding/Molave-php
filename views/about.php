<!DOCTYPE html>
<html lang="en">
    <?php 
        session_start();
        // Page-specific variable
        $page_title = "About | Molave";
        // Include the shared head section
        require_once __DIR__ . '/../includes/head.php';
    ?>
<body class="bg-gray-900 text-gray-100 min-h-screen p-6 md:p-12">
    
    <div class="max-w-5xl mx-auto space-y-12">
        <?php require_once __DIR__ . '/../includes/header.php'; ?>

        <!-- Section 2: Core Narrative -->
        <section class="bg-gray-800 p-8 rounded-xl shadow-2xl space-y-6">
            <h2 class="text-3xl font-bold text-yellow-400 border-b border-gray-700 pb-3 mb-4">
                My Story
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed">
                I am a dedicated software architect with over a decade of experience in designing, building, and deploying scalable web applications. My journey started with a deep curiosity about how complex systems communicate, leading me from low-level systems programming into the exciting world of full-stack development. I thrive on solving difficult technical challenges and mentoring teams to achieve their highest potential.
            </p>
            <p class="text-lg text-gray-300 leading-relaxed">
                Currently, my focus is on leveraging cloud-native architectures (Serverless, Microservices) and optimizing modern frontend frameworks like React and Angular for peak performance and maintainability.
            </p>
        </section>

        <!-- Section 3: Professional Philosophy (Two-Column Layout) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-gray-800 p-6 rounded-xl shadow-xl">
                <h3 class="text-2xl font-bold text-teal-400 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 11h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v6a2 2 0 002 2z"></path></svg>
                    Development Focus
                </h3>
                <ul class="space-y-3 text-gray-300 list-inside">
                    <li class="flex items-start"><span class="text-teal-400 mr-2">&bull;</span> Clean Code & Maintainability</li>
                    <li class="flex items-start"><span class="text-teal-400 mr-2">&bull;</span> Scalable Architecture Design</li>
                    <li class="flex items-start"><span class="text-teal-400 mr-2">&bull;</span> User Experience First (UX/UI)</li>
                    <li class="flex items-start"><span class="text-teal-400 mr-2">&bull;</span> Automated Testing Coverage</li>
                </ul>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl shadow-xl">
                <h3 class="text-2xl font-bold text-pink-400 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Core Values
                </h3>
                <ul class="space-y-3 text-gray-300 list-inside">
                    <li class="flex items-start"><span class="text-pink-400 mr-2">&bull;</span> Continuous Learning</li>
                    <li class="flex items-start"><span class="text-pink-400 mr-2">&bull;</span> Transparent Communication</li>
                    <li class="flex items-start"><span class="text-pink-400 mr-2">&bull;</span> Team Empowerment</li>
                    <li class="flex items-start"><span class="text-pink-400 mr-2">&bull;</span> Data-Driven Decisions</li>
                </ul>
            </div>
        </div>
        
        <!-- Section 4: Contact & Footer -->
        <footer class="text-center pt-8 border-t border-gray-700">
            <h3 class="text-2xl font-semibold text-indigo-400 mb-4">
                Let's Connect
            </h3>
            <p class="text-gray-400 mb-4">
                I am always open to discussing new projects, collaborative opportunities, or sharing insights on modern tech stacks.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200 shadow-md transform hover:scale-105">
                    Email Me
                </a>
                <a href="#" class="bg-gray-700 hover:bg-gray-600 text-gray-200 font-medium py-2 px-6 rounded-lg transition duration-200 shadow-md transform hover:scale-105">
                    View Resume (PDF)
                </a>
            </div>
            <p class="mt-8 text-gray-500 text-sm">&copy; <span id="current-year"></span> Alex Dryden. All rights reserved.</p>
        </footer>

    </div>

    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>
</html>