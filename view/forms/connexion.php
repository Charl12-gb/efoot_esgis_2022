<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>E-FOOT</title>
</head>

<body>

    <!-- component -->
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://thumbs.dreamstime.com/b/ballon-de-football-sur-le-terrain-de-football-37831693.jpg);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">E-FOOT</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://thumbs.dreamstime.com/b/ballon-de-football-sur-le-terrain-de-football-37831693.jpg);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20" id="actualispage">
                <div>
                    <h1 class="text-2xl font-bold">Bienvenu sur E-FOOT</h1>
                    <span class="text-sm text-white-900">Veuillez entrer des informations valides!</span>
                </div>
                <?php
                if (isset($_REQUEST['mailFalse'])) {
                ?>
                    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">
                        A simple danger alert - check it out!
                    </div>
                <?php
                }
                ?>
                <form class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" <?php if (isset($_REQUEST['mailTrue'])) { ?> action="../../modele/admin/connexion_trait.php" <?php } else { ?> name="myForm" id="myForm" <?php  }  ?> method="POST">
                    <div class="pb-2 pt-4">
                        <input class="px-4 w-full border-2 py-2 rounded-md text-sm bg-black outline-none" type="email" name="email" id="email" placeholder="exemple@gmail.com" <?php if (isset($_REQUEST['email'])) echo "value='" . $_REQUEST['email'] . "'" ?>>
                    </div>
                    <?php
                    if (isset($_REQUEST['mail1'])) {
                    ?>
                        <div class="pb-2 pt-4">
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm bg-black outline-none" type="password" id="password" name="password" placeholder="Mot de passe">
                        </div>
                        <input class="cursor-pointer" type="hidden" name="type" id="type" value="admin">
                    <?php
                    }
                    if (isset($_REQUEST['mail2'])) {
                    ?>
                        <div class="pb-2 pt-4">
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm bg-black outline-none" type="text" name="code" id="code" placeholder="Code">
                        </div>
                        <input class="cursor-pointer" type="hidden" name="type" id="type" value="joueur">
                    <?php
                    }
                    if (!(isset($_REQUEST['mailTrue']))) {
                    ?>
                        <div class="flex justify-between">
                            <div>
                                <input class="cursor-pointer" type="checkbox" name="box" id="box">
                                <span class="text-sm">User PassWord</span>
                            </div>
                            <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                        </div>
                    <?php
                    }else{
                        ?>
                        <div class="flex justify-between">
                            <div></div>
                            <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                        </div>
                        <input class="cursor-pointer" type="hidden" name="action" id="action" value="connect">
                    <?php
                    }
                    ?>

                    <div class="px-4 pb-2 pt-4">
                        <button type="submit" class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100"><?php if (isset($_REQUEST['email'])) echo "Connexion"; else echo 'Next'; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
    <script src="../../modele/admin/js.js"></script>
</body>

</html>