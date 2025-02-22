<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements - Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<?php include 'sidebar.php'; ?>

<body class="bg-gray-100 flex flex-col sm:flex-row">


    <div class="flex-1 flex items-center justify-center min-h-screen text-center p-4 sm:p-8 transition-all duration-500">
        <div class="max-w-4xl mx-auto w-full">
            <div class="mb-4">
                <i class="fas fa-trophy text-6xl text-red-500 block mx-auto mb-2"></i>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-wider drop-shadow-lg animate-pulse mb-8">My Achievements</h1>
            </div>

            <div class="space-y-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="mb-4">
                        <i class="fas fa-certificate text-2xl text-red-500 mr-3"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 inline-block">Certificates & Trainings</h3>
                    </div>
                    <ul class="text-left text-gray-600 space-y-2">
                        <li>➢ MySQL Online Training (9hrs)</li>
                        <li>➢ How to Build a Career in Software Development</li>
                        <li>➢ Introduction to Cloud Computing</li>
                        <li>➢ Cisco Networking Academy
                            <ul class="ml-4 space-y-1">
                                <li>- CCNAv7: Introduction to Networks</li>
                                <li>- CCNAv7: Switching, Routing and Wireless Essentials</li>
                            </ul>
                        </li>
                        <li>➢ Basic Selenium Automation Training</li>
                        <li>➢ Kubernetes and Automation Testing</li>
                        <li>➢ Test Automation: Automated Software Testing</li>
                        <li>➢ Static, Dynamic, Black-box and White-box Testing</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="mb-4">
                        <i class="fas fa-award text-2xl text-red-500 mr-3"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 inline-block">Awards</h3>
                    </div>
                    <ul class="text-left text-gray-600 space-y-2">
                        <li>➢ Best Thesis & Presenter Awardee</li>
                        <li>➢ Sports Awardee</li>
                        <li>➢ Back to Back PRISAA Champion (Badminton)</li>
                    </ul>
                </div>

            </div>

            <a href="contact.php" class="inline-block mt-8 px-6 py-3 bg-red-500 text-white text-lg font-bold rounded-full shadow-lg transform transition duration-300 hover:bg-red-600 hover:scale-105">
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