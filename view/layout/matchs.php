<main class="flex-1 overflow-x-hidden overflow-y-auto">
    <div class="container mx-auto">
        <div>
            <h1 class="text-2xl font-medium text-gray-800 dark:text-white px-10">Tableau des matchs</h1>
        </div>
        <div class="px-6 py-2">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="">
                        <div>
                            <!-- component -->
                            <section class="relative bg-blueGray-50">
                                <div class="w-full mb-12 px-">
                                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-900 text-white">
                                        <div class="block w-full overflow-x-auto ">
                                            <table class="items-center w-full bg-transparent border-collapse">
                                                <thead>
                                                    <tr>
                                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Equipe 1</th>
                                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700"></th>
                                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Equipe 2</th>
                                                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Date & Lieu</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $prochaine_matchs = get_prochaine_match();
                                                    foreach ($prochaine_matchs as $key => $value) {

                                                    ?>
                                                        <tr>
                                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><span class="text-yellow-300"><?= get_equipe_name($value['id_equipe1']) ?></span></td>
                                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><span class="text-red-400">vs</span></td>
                                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><span class="ml-3 font-bold text-white"> <span class="text-teal-300"><?= get_equipe_name($value['id_equipe2']) ?></span> </span></td>
                                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            <?= format_date($value['rencontre_date'])  ?><br>
                                                            <?= ($value['lieu_rencontre'])  ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between">
                                <h2 class="font-bold m-5 text-gray-900">Maths Joués</h2>
                            </div>
                            <!-- component -->
                            
                            <div>

                                <div class="text-gray-500 md:px-8 xl:px-0">
                                    <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-2">
                                        <?php
                                        $prochaine_matchs = get_prochaine_match();
                                        foreach ($prochaine_matchs as $key => $value) {
                                            $identify = 'modal' . $value['id'];
                                        ?>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#<?= $identify ?>">
                                                <div class="bg-white rounded-2xl text-center shadow-xl px-4 py-8 sm:px-8 text-gray-100 bg-gray-600">
                                                    <div>
                                                        <h3 class="text-2xl font-semibold"><span class="text-yellow-300"><?= get_equipe_name($value['id_equipe1']) ?></span> </h3>
                                                        3 <br> - <br> 1  
                                                        <h3 class="text-2xl font-semibold"><span class="text-teal-300"><?= get_equipe_name($value['id_equipe2']) ?></span></h3>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="<?= $identify ?>" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                                        <div class="modal-body p-4 relative">
                                                            <table style="width: 100%; text-align:center">
                                                                <tr>
                                                                    <th><?= get_equipe_name($value['id_equipe1']) ?></th>
                                                                    <th> 0 : 0 </th>
                                                                    <th><?= get_equipe_name($value['id_equipe2']) ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>-</td>
                                                                    <td>Possession de balle</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-</td>
                                                                    <td>Tir</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-</td>
                                                                    <td>Tir cadrés</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-</td>
                                                                    <td>Corners</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-</td>
                                                                    <td>Arrêts</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-</td>
                                                                    <td>Fautes commises</td>
                                                                    <td>-</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden w-4/12 -mx-8 lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Meilleurs joueurs</h1>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white mt-5 rounded-lg shadow-md">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Alex John</a><span class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white mt-5 rounded-lg shadow-md">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Alex John</a><span class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white mt-5 rounded-lg shadow-md">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Alex John</a><span class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>