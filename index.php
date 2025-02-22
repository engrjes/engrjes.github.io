<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include 'sidebar.php'; ?>
<body class="bg-gray-100 flex flex-col sm:flex-row">



    <div class="flex-1 flex items-center justify-center min-h-screen text-center p-4 sm:p-8 transition-all duration-500">
        <div class="max-w-lg mx-auto w-full">
            <div class="relative inline-block mb-6">
                <img src="dp.jpg" alt="Profile Picture" class="w-32 h-32 sm:w-40 sm:h-40 rounded-full border-4 border-red-500 shadow-lg transition duration-500 transform hover:scale-110 mx-auto">
            </div>

            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-wider drop-shadow-lg animate-pulse">Jessa Sarmiento</h1>
            <p class="text-lg sm:text-xl text-gray-600 mt-2 animate-fadeIn">Explore my work, experience, and skills.</p>

            <div class="w-1/2 sm:w-1/3 mx-auto mt-6 h-6 bg-red-200 rounded-full overflow-hidden shadow-xl">
                <div class="h-full bg-red-500 animate-progress"></div>
            </div>

            <div class="mt-6 flex justify-center space-x-4">
                <a href="about.php" class="inline-block px-6 py-3 bg-red-500 text-white text-lg font-bold rounded-full shadow-lg transform transition duration-300 hover:bg-red-600 hover:scale-105">
                    Learn More
                </a>
                <a href="contact.php" class="inline-block px-6 py-3 bg-red-500 text-white text-lg font-bold rounded-full shadow-lg transform transition duration-300 hover:bg-red-600 hover:scale-105">
                    Contact
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 1s ease-out forwards; }

        @keyframes progress {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        .animate-progress { animation: progress 2s linear forwards; }
    </style>

</body>
</html>