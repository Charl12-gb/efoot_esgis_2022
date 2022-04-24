<?php
require_once('../../modele/admin/functions.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="../../modele/admin/css.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>E-FOOT</title>
</head>

<body>
    
    <!-- component -->
    <div>
        <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
            <div class="flex h-screen bg-gray-200 dark:bg-gray-800 font-roboto">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">
                            <span class="text-gray-800 dark:text-white text-2xl font-semibold">Dashboard</span>
                        </div>
                    </div>

                    <nav class="flex flex-col mt-10 px-4 text-center">
                        <a href="#" class="py-2 text-sm text-gray-700 dark:text-gray-100 bg-gray-200 dark:bg-gray-800 rounded">Overview</a>
                        <a href="#" class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Tickets</a>
                        <a href="#" class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ideas</a>
                        <a href="#" class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Contacts</a>
                        <a href="#" class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Settings</a>
                    </nav>
                </div>

                <div class="flex-1 flex flex-col overflow-hidden">
                    <header class="flex justify-between items-center p-3">
                        <div class="flex items-center space-x-4 lg:space-x-0">
                            <button @click="sidebarOpen = true" class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </header>