<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education - Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<?php include 'sidebar.php'; ?>
<body class="bg-gray-100 flex">

    

    <div class="flex-1 flex items-center justify-center min-h-screen text-center transition-all duration-500">
        <div class="p-8 max-w-3xl">
            <div class="mb-4">
                <i class="fas fa-graduation-cap text-6xl text-red-500 block mx-auto mb-2"></i>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-wider drop-shadow-lg animate-pulse mb-8">Education</h1>
            </div>
            <p class="text-lg text-gray-600 mt-2 animate-fadeIn">Here’s a look at my educational background.</p>

            <div class="mt-8 bg-white p-6 rounded-lg shadow-xl transform transition duration-500 hover:scale-105">
                <div class="flex flex-col items-center mb-4">
                    <i class="fas fa-graduation-cap text-2xl text-red-500 mb-2"></i>
                    <h2 class="text-xl font-semibold text-gray-700 text-center">Bachelor of Science in Computer Engineering</h2>
                </div>
                <p class="text-gray-600 text-md mt-2">Lipa City Colleges (2018 - 2022)</p>
                <p class="text-gray-600 text-md mt-2">Dean's Lister, specializing in software testing and automation testing.</p>
            </div>

            <div class="mt-8 bg-white p-6 rounded-lg shadow-xl transform transition duration-500 hover:scale-105">
                <div class="flex flex-col items-center mb-4">
                    <i class="fas fa-certificate text-2xl text-red-500 mb-2"></i>
                    <h2 class="text-xl font-semibold text-gray-700 text-center">Specialization in Software Testing and Automation Testing</h2>
                </div>
                <p class="text-gray-600 text-md mt-2">Lipa City Colleges (2022)</p>
                <p class="text-gray-600 text-md mt-2">Focused on advanced testing methodologies, tools, and frameworks for software quality assurance.</p>
            </div>

            <a href="skills.php" class="inline-block mt-6 px-6 py-3 bg-red-500 text-white text-lg font-bold rounded-full shadow-lg transform transition duration-300 hover:bg-red-600 hover:scale-105">
                Next <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 1s ease-out forwards; }
    </style>

</body>
</html>