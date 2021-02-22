<?php

$page = [
    'title' => 'Notre concept',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<main id="main">


    <section id="jumbotron-1">

        <div class="container">

            <h1 class="h1 text-center">Un concept d'entraide et de partage</h1>

            <div class="row align-items-start">

                <div class="col text-center">

                    <img src="assets/svg/shopping2.svg" class="img-thumbnail" height="456" width="382.19">

                </div>

                <div class="col">

                    <p class="text-justify">Avec les temps qui court, le Covid notamment, nous avons eu pour idée de
                        créer une application permettant le partage et l’entraide (tout en respectant les gestes
                        barrières). Pour ce faire rien de plus simple commander dans nos magasins partenaires et
                        faites-vous livrer par d’autres clients comme vous. L’objectif, créer du lien social, permettre
                        une aide aux personnes les plus vulnérables et vous permettre de gagner de l’argent. </p>

                    <h3 class="h4 fst-italic">Devenez livreur sans vous en rendre compte</h3>

                    <p class="text-justify">Grâce à cela, allez faire vos courses, ouvrez l’application et regarder si
                        quelqu’un à proximité à également besoin de quelques choses, apportez-lui son colis, ses courses
                        et pourquoi créer du lien. Le concept est uniquement développé en ville pour faciliter à la fois
                        les déplacements et permettre aux personnes habitant à proximité de se mettre en lien. </p>

                    <div class="button-2  pt-5 pb-4">
                        <a href="index.php" type="button" class="btn btn-black">Télécharger l'application</a>
                    </div>
                </div>
            </div>


            <div class="container">

                <h2 class="h1 text-center">Aider les autres mais aussi nos magasins partenaires</h2>
                <div class="row align-items-start">
                    <div class="col">

                        <p class="text-justify">À travers ce concept, vous allez pouvoir vous rendre utile et aider de
                            nombreuses personnes. Que ce soit votre voisin, l’étudiante de la rue da côtés ou les
                            grands-parents. Rendez-vous utile a aujourd’hui et créer du lien demain. </p>

                        <h3 class="h4 fst-italic">Aider en donnant de la visibilité à nos magasins</h3>

                        <p class="text-justify">Vous le remarquerez vite, mais dans un premier temps ce sont de grandes
                            enseignes qui sont partenaires. Sachez que ce n’est que la première étape et que par la
                            suite nous allons développer pour des magasins locaux. À travers cela nous souhaitons vous
                            donner envie de consommer local et donc de permettre à nos magasins qui souffrent de la
                            situation actuelle de gagner en clientèle. </p>

                        <div class="button-2  pt-5 pb-4">
                            <a href="partners.php" type="button" class="btn btn-black">Partenaires</a>
                        </div>
                    </div>


                    <div class="col text-center">

                        <img src="assets/svg/help2.svg" class="img-thumbnail" height="456" width="382.19">

                    </div>
                </div>


                <div class="container">

                    <h2 class="h1 text-center">Gagner de l'argent</h2>

                    <div class="row align-items-start">

                        <div class="col text-center">

                            <img src="assets/svg/help.svg" class="img-thumbnail" height="456" width="382.19">

                        </div>

                        <div class="col">

                            <p class="text-justify">Le point positif de notre application ? Elle vous permet de gagner
                                de l’argent ! En effet, 5 % de livraisons que vous ferez vous seront créditées sur
                                l’application vous permettant d’effectuer des achats dans nos magasins partenaires. </p>

                            <h3 class="h4 fst-italic">De nombreuses réductions vous attendent !</h3>

                            <p class="text-justify">De même nos magasins s’engagent à vous proposer des réductions en
                                avant-première. Et vous serez également invité à de nombreuses ventes privées.
                                N’attendez plus et inscrivez-vous dès aujourd’hui. </p>

                            <div class="button-2  pt-5 pb-4">
                                <a href="register.php" type="button" class="btn btn-black ">S'inscrire</a>
                            </div>
                        </div>
                    </div>
    </section>
</main>


<?php require_once 'template-parts/footer.php'; ?>
