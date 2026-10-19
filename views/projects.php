<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Load Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configure Tailwind to use the 'Inter' font and custom styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1117; /* Match index.html background */
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen">

    <!-- Script to generate the unified navigation bar -->
    <script>
        // Function to generate the navigation bar HTML (Copied for file self-containment)
        const generateNavbar = (currentPage) => {
            const navItems = [
                { name: "Home", href: "index.html" },
                { name: "About", href: "about.html" },
                { name: "Skills", href: "skill.html" },
                { name: "Projects", href: "projects.html" },
            ];

            const navHtml = navItems.map(item => {
                const isActive = item.href === currentPage;
                const baseClasses = "px-3 py-2 rounded-lg font-medium transition duration-200";
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
                        <div class="flex space-x-2 md:space-x-4">
                            ${navHtml}
                        </div>
                    </div>
                </nav>
            `;
        };

        // Inject the Navbar at the start of the body
        document.addEventListener('DOMContentLoaded', () => {
            const body = document.body;
            body.insertAdjacentHTML('afterbegin', generateNavbar('projects.html'));
        });

        // Project Data for dynamic rendering
        const projectData = [
            {
                title: "Serverless Data Pipeline",
                description: "Designed and implemented a high-throughput, low-latency data ingestion pipeline using AWS Lambda, Kinesis, and DynamoDB. Reduced processing cost by 40%.",
                tags: ["AWS", "Serverless", "DynamoDB", "Python"],
                color: "teal"
            },
            {
                title: "Real-Time Chat Application",
                description: "Built a collaborative, real-time messaging platform using React, WebSockets (Socket.IO), and a Node.js backend. Features live presence indicators and end-to-end encryption.",
                tags: ["React", "Node.js", "WebSockets", "TypeScript"],
                color: "yellow"
            },
            {
                title: "E-commerce Backend Service",
                description: "Developed a robust microservice for catalog management and checkout processing, integrated with Stripe for payments and PostgreSQL for relational data.",
                tags: ["Express.js", "PostgreSQL", "Microservices", "Docker"],
                color: "indigo"
            },
            {
                title: "Portfolio Site Generator",
                description: "A static site generator built with Go that consumes Markdown files and outputs highly optimized, responsive HTML/CSS, currently powering this portfolio.",
                tags: ["Go", "Static Site", "Tailwind CSS", "CI/CD"],
                color: "pink"
            }
        ];

        // Function to create HTML for a single project card
        const createProjectCard = (project) => {
            const tagHtml = project.tags.map(tag => `
                <span class="inline-block bg-gray-700 text-${project.color}-300 text-xs font-semibold px-3 py-1 rounded-full mr-2 mb-2 transition duration-200 hover:bg-gray-600">
                    ${tag}
                </span>
            `).join('');

            const colorMap = {
                teal: 'border-teal-500',
                yellow: 'border-yellow-500',
                indigo: 'border-indigo-500',
                pink: 'border-pink-500'
            };
            const borderColor = colorMap[project.color] || 'border-indigo-500';

            return `
                <div class="bg-gray-800 p-6 rounded-xl shadow-2xl transition duration-300 transform hover:scale-[1.01] border-t-4 ${borderColor}">
                    <h3 class="text-3xl font-bold text-white mb-3">${project.title}</h3>
                    <p class="text-gray-400 mb-4">${project.description}</p>
                    <div class="mb-6">
                        ${tagHtml}
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition duration-200 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Live Demo
                        </a>
                        <a href="#" class="text-sm font-medium text-gray-400 hover:text-white transition duration-200 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path></svg>
                            GitHub Repo
                        </a>
                    </div>
                </div>
            `;
        };

        // Function to render all projects
        const renderProjects = () => {
            const container = document.getElementById('projects-container');
            if (container) {
                container.innerHTML = projectData.map(createProjectCard).join('');
            }
        };

        // Run the rendering function after the document is fully loaded
        document.addEventListener('DOMContentLoaded', renderProjects);
    </script>
    
    <div class="max-w-7xl mx-auto p-4 md:p-8">
        <!-- Header Section -->
        <header class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-indigo-400 mb-2 tracking-tight">
                My Projects
            </h1>
            <p class="text-xl text-gray-400">
                A selection of high-impact technical and architectural work.
            </p>
        </header>

        <!-- Projects Grid -->
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8" id="projects-container">
            <!-- Project cards will be injected here by JavaScript -->
        </main>
        
        <!-- Footer -->
        <footer class="mt-12 text-center text-gray-500 pt-6 border-t border-gray-700">
            <p>Ready to collaborate? <a href="about.html" class="text-indigo-400 hover:text-indigo-300 font-semibold">Get in touch.</a></p>
        </footer>

    </div>

</body>
</html>