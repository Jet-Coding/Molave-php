<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Skills Matrix</title>
    <!-- Load Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configure Tailwind to use the 'Inter' font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s ease;
        }
        /* Custom scrollbar for aesthetics */
        body::-webkit-scrollbar {
            width: 8px;
        }
        body::-webkit-scrollbar-thumb {
            background-color: #6366f1; /* Indigo-500 */
            border-radius: 4px;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen p-4 md:p-8">

    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <header class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-indigo-400 mb-2 tracking-tight">
                Skill Matrix
            </h1>
            <p class="text-xl text-gray-400">
                A dynamic overview of technical and professional proficiencies.
            </p>
        </header>

        <!-- Main Skills Container -->
        <main class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Card 1: Frontend Development -->
            <div class="bg-gray-800 p-6 rounded-xl shadow-2xl hover:shadow-indigo-500/30 transition duration-300 transform hover:scale-[1.01]">
                <h2 class="text-3xl font-bold mb-6 text-yellow-400 flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    Frontend Development
                </h2>
                
                <div class="space-y-4" id="frontend-skills">
                    <!-- Skills will be populated here by JS -->
                </div>
            </div>

            <!-- Card 2: Backend & Database -->
            <div class="bg-gray-800 p-6 rounded-xl shadow-2xl hover:shadow-indigo-500/30 transition duration-300 transform hover:scale-[1.01]">
                <h2 class="text-3xl font-bold mb-6 text-teal-400 flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h-4"></path></svg>
                    Backend & Database
                </h2>
                
                <div class="space-y-4" id="backend-skills">
                    <!-- Skills will be populated here by JS -->
                </div>
            </div>

            <!-- Card 3: Tools & Methodologies -->
            <div class="bg-gray-800 p-6 rounded-xl shadow-2xl hover:shadow-indigo-500/30 transition duration-300 transform hover:scale-[1.01]">
                <h2 class="text-3xl font-bold mb-6 text-pink-400 flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Tools & Methodologies
                </h2>

                <div class="space-y-4" id="tools-skills">
                    <!-- Skills will be populated here by JS -->
                </div>
            </div>
        </main>
        
        <!-- Footer / Call to Action -->
        <footer class="mt-12 text-center text-gray-500 pt-6 border-t border-gray-700">
            <p>&copy; 2024 Portfolio Showcase. Always learning and expanding the matrix.</p>
        </footer>

    </div>

    <script>
        // Data structure for skills
        const skillData = [
            { name: "HTML5 & CSS3", level: 95, category: "frontend" },
            { name: "JavaScript (ES6+)", level: 90, category: "frontend" },
            { name: "React & Hooks", level: 85, category: "frontend" },
            { name: "Tailwind CSS", level: 90, category: "frontend" },
            { name: "TypeScript", level: 75, category: "frontend" },

            { name: "Node.js & Express", level: 80, category: "backend" },
            { name: "Python (Flask/Django)", level: 70, category: "backend" },
            { name: "SQL (PostgreSQL)", level: 85, category: "backend" },
            { name: "NoSQL (MongoDB/Firestore)", level: 75, category: "backend" },
            { name: "RESTful API Design", level: 88, category: "backend" },

            { name: "Git & GitHub", level: 95, category: "tools" },
            { name: "Docker & Kubernetes", level: 65, category: "tools" },
            { name: "Agile/Scrum", level: 80, category: "tools" },
            { name: "Unit Testing (Jest/Mocha)", level: 70, category: "tools" },
        ];

        // Function to create the HTML for a single skill item
        const createSkillHtml = (skill) => {
            const colorMap = {
                frontend: 'bg-yellow-500',
                backend: 'bg-teal-500',
                tools: 'bg-pink-500'
            };
            const barColor = colorMap[skill.category] || 'bg-indigo-500';

            return `
                <div class="skill-item">
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-lg font-medium text-gray-200">${skill.name}</span>
                        <span class="text-sm font-semibold text-indigo-300">${skill.level}%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2.5">
                        <div class="h-2.5 rounded-full ${barColor} progress-bar" 
                             data-level="${skill.level}" 
                             style="width: 0%; transition: width 1.5s ease-out;">
                        </div>
                    </div>
                </div>
            `;
        };

        // Function to render skills into their respective containers
        const renderSkills = () => {
            const containers = {
                frontend: document.getElementById('frontend-skills'),
                backend: document.getElementById('backend-skills'),
                tools: document.getElementById('tools-skills')
            };

            // Clear containers before rendering (in case of re-render)
            Object.values(containers).forEach(c => c.innerHTML = '');

            // Populate the containers
            skillData.forEach(skill => {
                if (containers[skill.category]) {
                    containers[skill.category].innerHTML += createSkillHtml(skill);
                }
            });
        };

        // Function to animate the progress bars once the element is visible
        const animateProgressBars = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBars = entry.target.querySelectorAll('.progress-bar');
                    progressBars.forEach(bar => {
                        const level = bar.getAttribute('data-level');
                        // Set the width after a small delay to trigger the CSS transition
                        setTimeout(() => {
                            bar.style.width = `${level}%`;
                        }, 100);
                    });
                    // Stop observing once the animation is done
                    observer.unobserve(entry.target);
                }
            });
        };

        // Main setup function
        const setupSkillsPage = () => {
            renderSkills();

            // Create an Intersection Observer to trigger the animation when the skill cards enter the viewport
            const observerOptions = {
                root: null, // relative to the viewport
                rootMargin: '0px',
                threshold: 0.1 // trigger when 10% of the element is visible
            };
            
            const skillObserver = new IntersectionObserver(animateProgressBars, observerOptions);
            
            // Start observing the main skill cards
            document.querySelectorAll('main > div').forEach(card => {
                skillObserver.observe(card);
            });
        };

        // Run the setup function after the document is fully loaded
        document.addEventListener('DOMContentLoaded', setupSkillsPage);
    </script>
</body>
</html>