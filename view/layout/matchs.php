<h2 style="text-align: center; color:red;">Les matchs non joués</h2>
<div class="text-gray-500 md:px-8 xl:px-0">
    <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-2">                                
        <?php
            foreach (get_all_prochains_match() as $value) {
                ?>
                    <div class="bg-white rounded-2xl text-center shadow-xl px-4 py-8 sm:px-8 text-gray-100 bg-gray-600">
                        <div>
                            <h3 class="text-2xl font-semibold">
                                <span class="text-yellow-300">
                                    <?= get_equipe_name($value['id_equipe1']) ?>
                                </span> 
                            </h3>
                            vs
                            <h3 class="text-2xl font-semibold">
                                <span class="text-teal-300">
                                    <?= get_equipe_name($value['id_equipe2']) ?>
                                </span>
                            </h3>
                            <hr>
                            <p class="text-[12px] font-bold pt-5">
                                <?= format_date($value['rencontre_date']) ?><br>
                                Lieu : <?= ($value['lieu_rencontre']) ?>
                            </p>
                        </div>        
                    </div>
                <?php
            }
        ?>
    </div>
</div>
<h2 style="text-align: center; color:red;">Les matchs déja joués</h2>
<div class="text-gray-500 md:px-8 xl:px-0">
    <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-2">                                
        <?php
            foreach (get_all_jouéesdeja_match() as $value) {
                ?>
                    <div class="bg-white rounded-2xl text-center shadow-xl px-4 py-8 sm:px-8 text-gray-100 bg-gray-600">
                        <div>
                            <h3 class="text-2xl font-semibold">
                                <span class="text-yellow-300">
                                    <?= get_equipe_name($value['id_equipe1']) ?>
                                </span> 
                            </h3>
                            vs
                            <h3 class="text-2xl font-semibold">
                                <span class="text-teal-300">
                                    <?= get_equipe_name($value['id_equipe2']) ?>
                                </span>
                            </h3>
                            <hr>
                            <p class="text-[12px] font-bold pt-5">
                                <?= format_date($value['rencontre_date']) ?><br>
                                Lieu : <?= ($value['lieu_rencontre']) ?>
                            </p>
                        </div>        
                    </div>
                <?php
            }
        ?>
    </div>
</div>