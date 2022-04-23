<main class="flex-1 overflow-x-hidden overflow-y-auto">
    <div class="container mx-auto">
        <div>
            <h1 class="text-2xl font-medium text-gray-800 dark:text-white px-10">Bienvenue Champion</h1>
        </div>
        <div class="px-6 py-2">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="mt-2">
                                <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                                    <div class="carousel-inner relative w-full overflow-hidden">
                                        <?php
                                        foreach (get_match_play() as $key => $value) {
                                        ?>
                                            <div class="carousel-item active relative float-left w-full">
                                                <h2 class="text-2xl font-bold text-gray-700">
                                                    <h3 class="text-2xl font-semibold"><span class="text-yellow-300"><?= get_equipe_name($value['id_equipe1']) ?></span>
                                                    <?= ($value['score1']) ?> : <?= ($value['score2']) ?>
                                                        <span class="text-teal-300"><?= get_equipe_name($value['id_equipe2']) ?></span>
                                                    </h3>
                                                </h2>

                                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
                                                </p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between">
                                <h2 class="font-bold m-5 text-gray-900">Prochains Matchs</h2><a href="#" class="px-2 py-1 font-bold text-yellow-500 bg-indigo-900 rounded hover:bg-indigo-100">Tout voir > </a>
                            </div>
                            <!-- component -->
                            <div>
                                <div class="text-gray-500 md:px-8 xl:px-0">
                                    <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-2">
                                        <?php
                                        $prochaine_matchs = get_prochaine_match(2);
                                        foreach ($prochaine_matchs as $key => $value) {
                                            $identify = 'modal' . $value['id'];
                                        ?>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#<?= $identify ?>">
                                                <div class="bg-white rounded-2xl text-center shadow-xl px-4 py-8 sm:px-8 text-gray-100 bg-gray-600">
                                                    <div>
                                                        <h3 class="text-2xl font-semibold"><span class="text-yellow-300"><?= get_equipe_name($value['id_equipe1']) ?></span> </h3>
                                                        vs
                                                        <h3 class="text-2xl font-semibold"><span class="text-teal-300"><?= get_equipe_name($value['id_equipe2']) ?></span></h3>
                                                        <hr>
                                                        <p class="text-[12px] font-bold pt-5">
                                                            <?= format_date($value['rencontre_date'])  ?><br>
                                                            Lieu : <?= ($value['lieu_rencontre'])  ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="<?= $identify ?>" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                                        <div class="text-center modal-header items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                            <h3 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                                                <span class="text-yellow-300 text-left">
                                                                    <?= get_equipe_name($value['id_equipe1']) ?>
                                                                </span> vs
                                                                <span class="text-teal-300 text-right">
                                                                    <?= get_equipe_name($value['id_equipe2']) ?>
                                                                </span>
                                                            </h3>
                                                            <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4 relative">
                                                            <p>This is a vertically centered modal.</p>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                            <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                                                                Close
                                                            </button>
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
            <div class="mt-6">
                <div>
                    <div class="flex items-center justify-between">
                        <h2 class="font-bold m-5 text-gray-900">Classement Ligue Interclasse</h2>
                    </div>
                    <!-- component -->
                    <section class="relative bg-blueGray-50">
                        <div class="w-full mb-12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-900 text-white">
                                <div class="block w-full overflow-x-auto ">
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr>
                                                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Project</th>
                                                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Budget</th>
                                                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Status</th>
                                                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Users</th>
                                                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Completion </th>
                                                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                                    <img src="https://demos.creative-tim.com/notus-js/assets/img/bootstrap.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                                    <span class="ml-3 font-bold text-white"> Argon Design System </span>
                                                </th>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$2,500 USD</td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-circle text-orange-500 mr-2"></i>pending
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                    </div>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">60%</span>
                                                        <div class="relative w-full">
                                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                                <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                                    <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                                                        <i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                                                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                                    <img src="https://demos.creative-tim.com/notus-js/assets/img/angular.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                                    <span class="ml-3 font-bold text-white">Angular Now UI Kit PRO </span>
                                                </th>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$1,800 USD</td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-circle text-emerald-500 mr-2"></i>completed
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                        <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                                                    </div>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">100%</span>
                                                        <div class="relative w-full">
                                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-500">
                                                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                                    <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                                                        <i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                                                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>