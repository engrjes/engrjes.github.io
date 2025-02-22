<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <style>
        @keyframes fireAnimation {
            0% {
                transform: scale(1);
                filter: brightness(100%) hue-rotate(0deg);
            }
            50% {
                transform: scale(1.1);
                filter: brightness(150%) hue-rotate(90deg);
            }
            100% {
                transform: scale(1);
                filter: brightness(100%) hue-rotate(0deg);
            }
        }

        .fire-effect {
            animation: fireAnimation 1.5s ease-in-out infinite;
        }

        .navbar a:hover {
            color: #f5a623;
            text-shadow: 0 0 10px rgba(245, 166, 35, 1), 0 0 20px rgba(245, 166, 35, 1), 0 0 30px rgba(245, 166, 35, 1);
            transform: scale(1.05);
            transition: all 0.3s ease;
        }

        .navbar a.active {
            @apply text-yellow-300 font-semibold; /* Active link style */
        }
    </style>
</head>
<body class="bg-gray-100">

<nav class="bg-[#ee4444] shadow-md sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="index.php" class="self-center text-2xl font-semibold whitespace-nowrap text-white fire-effect">Jessa's Portfolio</a>

        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-700 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-transparent dark:border-gray-700">
                <li>
                    <a href="index.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white" aria-current="page" id="home-link">Home</a>
                </li>
                <li>
                    <a href="about.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">About</a>
                </li>
                 <li>
                    <a href="education.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">Education</a>
                </li>
                <li>
                    <a href="skills.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">Skills</a>
                </li>
                <li>
                    <a href="projects.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">Projects</a>
                </li>
                <li>
                    <a href="experience.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">Experience</a>
                </li>
                <li>
                    <a href="achievements.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">Achievements</a>
                </li>
                <li>
                    <a href="contact.php" class="block py-2 px-3 rounded-sm hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 text-white">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const currentPage = window.location.pathname.split('/').pop();
    const links = document.querySelectorAll('.navbar a');

    links.forEach(link => {
        if (link.href.includes(currentPage)) {
            link.classList.add('active');
        }
    });

    const burgerButton = document.querySelector('button[data-collapse-toggle="navbar-default"]');
    const navbarLinks = document.getElementById('navbar-default');

    burgerButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('hidden');
    });
</script>

</body>
</html>