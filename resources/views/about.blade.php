@include('begin')

<section id="about" class="flex justify-center ptheader">
    <div class="bg-main-750 w-3/5 lmcborder flex flex-col rounded-xl items-center overflow-hidden mt-8 mb-20 shadow-xl">
        <div class="bg-main-700 w-full text-center py-6">
            <h1 class="text-4xl font-semibold amiri">Qui sommes nous</h1>
        </div>

        <div class="w-3/5 py-16 flex flex-col space-between" style="width: 80%;">
            <div id="presentation" class="w-full">
                <div class="flex flex-row justify-between w-full mb-4">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        KaizenCorp
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <p>
                    Nous sommes l’équipe KaizenCorp, composé de 5 personnes, nous collaborons pour développer des sites web pour des professionnels et particuliers.
                    <br><br>
                    Pour la signification du nom de l’équipe, “Kaizen” signifie “amélioration” en japonais et “Corp” pour représenter l’équipe. Cela fait donc référence à l'amélioration que l’on peut apporter aux projets informatiques mais aussi sur notre capacité à s’améliorer dans nos compétences.
                </p>
            </div>

            <div id="fonctionnement" class="w-full mt-20 mb-6">
                <div class="flex flex-row justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        Notre fonctionnement
                    </h4>
                    <hr class="mr-6 mt-6 w-7/12">
                </div>
                <p>
                    Nous nous organisons de manière à ce que chaque membre se sente à l’aise au travail et nous essayerons au maximum de séparer les tâches efficacement pour qu’aucun ne soit surmené ou à court de tâches.
                    <br><br>
                    Nous programmons des séances de travail pendant chaque séance dédiée à la SAÉ. Cela peut se faire en distanciel et en présentiel en fonction de la disponibilité des membres de l’équipe.
                </p>
            </div>

            <div id="equipe" class="w-full mt-20 mb-12">
                <div class="flex flex-row justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        Notre équipe
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                    <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Alexandre Meunier</h2>
                            <img src="https://cdn.discordapp.com/avatars/396757746273484800/42ed951ff2b80379cfdf9be97829c654.webp?size=1280" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
                        </div>
                        <div class="flex justify-around">
                            <div class="force">
                                <p>Back-end</p>
                                <p>Gestion de projet</p>
                                <p>Git</p>
                                <p>Gestion d’une équipe</p>
                            </div>
                            <div class="faiblesse">
                                <p>Front-end</p>
                                <p>Anglais</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Nathan Boulangeot</h2>
                            <img src="https://cdn.discordapp.com/avatars/489083160932515840/902211740f6b943bc2a49a4615d069ef.webp?size=1280" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
                        </div>
                        <div class="flex justify-around">
                            <div class="force">
                                <p>Front-end</p>
                                <p>Anglais</p>
                                <p>Git</p>
                                <p>Persévérance</p>
                                <p>Esprit d’équipe</p>
                                <p>Base de données</p>
                                <p>Structure de code</p>
                            </div>
                            <div class="faiblesse">
                                <p>Gestion de projet</p>
                                <p>Organisation</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Aminata Thioune</h2>
                            <img src="https://cdn.discordapp.com/avatars/1162122424557518908/eeea52da84b1013f4abf6cff1fd63bcf.webp?size=1280" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
                        </div>
                        <div class="flex justify-around">
                            <div class="force">
                                <p>PHP</p>
                                <p>Back-end</p>
                                <p>Autodidacte</p>
                            </div>
                            <div class="faiblesse">
                                <p>Test logiciel</p>
                                <p>Front-end</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Jawed Bensaih</h2>
                            <img src="https://cdn.discordapp.com/avatars/791032277445640233/1368dfb13c16b5247eb4efff8f2889ac.webp?size=1280" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
                        </div>
                        <div class="flex justify-around">
                            <div class="force">
                                <p>Back-end</p>
                                <p>Communication</p>
                                <p>Apprentissage</p>
                                <p>Organisation</p>
                                <p>Travail d’équipe</p>
                            </div>
                            <div class="faiblesse">
                                <p>Front-end</p>
                                <p>Gestion d’équipe</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Mehdi Debbali</h2>
                            <img src="https://cdn.discordapp.com/avatars/278337995499896843/5f39cc5ed5692f93316d36c7e474ff95.webp?size=1280" alt="" class="w-full h-64 object-cover rounded-lg mb-4">
                        </div>
                        <div class="flex justify-around">
                            <div class="force">
                                <p>Créativité</p>
                                <p>Anglais</p>
                                <p>Communication</p>
                            </div>
                            <div class="faiblesse">
                                <p>Front-end</p>
                                <p>Back-end</p>
                                <p>Organisation</p>
                                <p>Esprit d’équipe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('footer')
