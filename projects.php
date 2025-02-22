<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<?php include 'sidebar.php'; ?>
<body class="bg-gray-100 flex flex-col sm:flex-row">

    

    <div class="flex-1 flex items-center justify-center min-h-screen text-center p-4 sm:p-8 transition-all duration-500">
        <div class="max-w-4xl mx-auto w-full">
            <div class="mb-8">
                <i class="fas fa-project-diagram text-6xl text-red-500 block mx-auto mb-2"></i>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-wider drop-shadow-lg animate-pulse">My Projects</h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-book fa-4x text-red-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Student Record Information System</h3>
                    <p class="text-gray-600 mt-2">A web-based system to manage student records, grades, and other academic information.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-glasses fa-4x text-red-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Tactical Goggles for Blind with Machine Learning</h3>
                    <p class="text-gray-600 mt-2">A project to develop smart goggles for visually impaired individuals using machine learning algorithms to detect objects in real-time.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-robot fa-4x text-red-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Generative AI</h3>
                    <p class="text-gray-600 mt-2">A generative AI project focused on creating innovative content, such as text, images, and music, using deep learning techniques.</p>
                </div>

            </div>

            <a href="experience.php" class="inline-block mt-8 px-6 py-3 bg-red-500 text-white text-lg font-bold rounded-full shadow-lg transform transition duration-300 hover:bg-red-600 hover:scale-105">
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