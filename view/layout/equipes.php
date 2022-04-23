<main class="flex-1 overflow-x-hidden overflow-y-auto">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 ml-10">Les équipes participantes</h2>
        <div class="pt-6 pb-12 bg-gray-200">
            <?php
            foreach (get_all_equipe() as $value) {
                $colequipe = 'col' . $value['id'];
            ?>
                <div>
                    <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                        <div v-for="card in cards" class="flex flex-col md:flex-row overflow-hidden bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
                            <div class="h-64 w-auto md:w-1/2">
                                <img class="inset-0 h-full w-full object-cover object-center" src="https://www.bfmtv.com/comparateur/wp-content/uploads/2020/09/image_1-4.png" />
                            </div>
                            <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                                <button class="accordion-button relative flex items-center w-full font-semibold py-4 rounded-none transition focus:outline-none px-5 text-left text-lg leading-tight truncate" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $colequipe ?>" aria-expanded="true" aria-controls="<?= $colequipe ?>"><?= $value['nomEquipe']; ?></button>
                                <p>
                                    <strong>ESGIS-BENIN</strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                                <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold">
                                    Capitaine : <span class="text-sm font-medium text-blue-700 dark:text-pink"><?= get_name_capitaine($value['id']); ?></span>
                                </p>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item bg-white border border-gray-200">
                        <div id="<?= $colequipe ?>" class="accordion-collapse collapse" aria-labelledby="<?= $colequipe ?>" data-bs-parent="#accordionExample">
                            <div>
                                <div class="flex items-center justify-between">
                                    <h2 class="font-bold m-5 text-gray-900">Les joueurs</h2>
                                </div>
                                <!-- component -->
                                <section class="relative bg-gray-300">
                                    <div class="w-full mb-12 px-4">
                                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-900 text-white">
                                            <div class="block w-full overflow-x-auto ">
                                                <table class="items-center w-full bg-transparent border-collapse">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Nom</th>
                                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Téléphone</th>
                                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-600 text-white-900 border-pink-700">Poste</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        foreach (get_all_joueur_equipe($value['id']) as $key => $val) {
                                                        ?>
                                                            <tr>
                                                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                                                    <img src="https://demos.creative-tim.com/notus-js/assets/img/bootstrap.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                                                    <span class="ml-3 font-bold text-white"> <?= $val['nom'] ?> </span>
                                                                </th>
                                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><?= $val['tel'] ?></td>
                                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                                <?= $val['poste'] ?>
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
                    </div>
                <?php
            }
                ?>
                </div>
        </div>
</main>