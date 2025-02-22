<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<?php include 'sidebar.php'; ?>

<body class="bg-gray-100 flex flex-col sm:flex-row">


    <div class="flex-1 flex items-center justify-center min-h-screen text-center p-4 sm:p-8 transition-all duration-500">
        <div class="max-w-4xl mx-auto w-full">
            <div class="mb-8">
                <i class="fas fa-envelope-open-text text-6xl text-red-500 block mx-auto mb-2"></i>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-wider drop-shadow-lg animate-pulse">Contact Me</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="flex flex-col items-center mb-4">
                        <i class="fas fa-map-marker-alt text-red-500 text-3xl mb-2"></i>
                        <h3 class="text-2xl font-semibold text-gray-900">Address</h3>
                    </div>
                    <p class="text-gray-600 break-words">Sarmiento Street, District III, Mataasnakahoy, Batangas</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="flex flex-col items-center mb-4">
                        <i class="fas fa-envelope text-red-500 text-3xl mb-2"></i>
                        <h3 class="text-2xl font-semibold text-gray-900">Email</h3>
                    </div>
                    <p class="text-gray-600 break-words">sarmientojxa@gmail.com</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="flex flex-col items-center mb-4">
                        <i class="fab fa-linkedin text-blue-500 text-3xl mb-2"></i>
                        <h3 class="text-2xl font-semibold text-gray-900">LinkedIn</h3>
                    </div>
                    <a href="https://www.linkedin.com/in/jessambelsss" target="_blank" class="text-blue-500 hover:underline break-words">www.linkedin.com/in/jessambelsss</a>
                </div>
            </div>

            <a href="index.php" class="inline-block mt-8 px-6 py-3 bg-red-500 text-white text-lg font-bold rounded-full shadow-lg transform transition duration-300 hover:bg-red-600 hover:scale-105">
                Back to Home <i class="fas fa-home"></i>
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