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
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>E-FOOT</title>
</head>

<body>

    <!-- component -->
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">E-FOOT</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <div>
                    <span class="text-sm text-white-900">Welcome back</span>
                    <h1 class="text-2xl font-bold">Login to your account</h1>
                </div>
                <form action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" method="POST">
                <input type="hidden" id="verifiemail" name="verifiemail" value="verifimail">
                    <div class="pb-2 pt-4">
                        <input class="px-4 w-full border-2 py-2 rounded-md text-sm bg-black outline-none" type="email" name="email" placeholder="exemple@gmail.com">
                        <input type="hidden" id="capitaines" name="capitaines" value="capitain">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="px-4 w-full border-2 py-2 rounded-md text-sm bg-black outline-none" type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="px-4 w-full border-2 py-2 rounded-md text-sm bg-black outline-none" type="text" name="code" placeholder="Code">
                        <input type="hidden" name="action" value="code">
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <input class="cursor-pointer" type="checkbox" name="box">
                            <input type="hidden" name="action" value="mdp">
                            <span class="text-sm">User PassWord</span>
                        </div>
                        <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button type="submit" class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">Login now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>