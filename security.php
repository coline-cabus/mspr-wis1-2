<?php

$page = [
    'title' => 'Sécurité',
    'description' => 'Faites vous livrez en toute sécurité ',
];

require_once 'template-parts/header.php'; ?>

    <main id="main">

        <section class="timeline">


            <div class="container">

                <h2 class="h1">Comment sécurisé ?</h2>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content js--fadeInLeft">

                        <h2>Inscription sécurisée</h2>

                        <div class="date">Papier d'identité</div>

                        <p class="explain">Click&Share vous promet une utilisation sécurisée. Pour ce faire lors de
                            votre inscription, il vous sera demandé (Aidant/Aidée) votre carte d’identité et vos
                            informations bancaires. Cela nous permet de sécuriser d’avantage l’utilisation de
                            l’application. Sachez qu'en cas de dommage les deux partis sont mise avant de pouvoir
                            déterminer la nature du problème, et de voir s’il est possible d’y trouver une
                            solution. </p>

                        <a class="bouton bnt-more" href="notre-concept.php">Notre concept</a>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInRight">

                        <div class="timeline-img-header">

                            <h2>Limite prix du colis</h2>

                        </div>

                        <div class="date">Prix</div>

                        <p class="explain">Afin de limites les fraudes, et de vous assurer du bon fonctionnement du
                            service, nous avons fixé comme règle une limite de prix. En effet, les colis et services ne
                            dépasseront pas 100 €. Sachez que nos partenaires sont également à l’origine de cette règle.
                            Vous pourrez consulter les magasins. </p>

                        <a class="bouton bnt-more" href="partners.php">Partenaires</a>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">

                        <div class="timeline-img-header">

                            <h2>Suivis GPS</h2>

                        </div>

                        <div class="date">GPS</div>

                        <p class="explain">Après que vous aurez réceptionné la commande, le GPS de votre téléphone
                            s’activera, sachez que l’application (et donc le QR code) ne fonctionne seulement si le GPS
                            est activé. Toutes les informations sont disponibles durant l’inscription et le
                            téléchargement de l’application.</p>

                        <a class="bouton bnt-more" href="register.php">S'inscrire</a>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInRight">

                        <div class="timeline-img-header">

                            <h2>Comment récupérer la commande ?</h2>
                        </div>

                        <div class="date">QR code</div>

                        <p class="explain">Lors de la réception de la commande, vous devrez scanner un QR code, afin
                            d’être sûr que la bonne personne réceptionne, mais aussi afin de vérifier vos informations
                            personnelles auprès du magasin partenaire. L'application est disponible sur notre page
                            d'accueil.</p>

                        <a class="bouton bnt-more" href="index.php">Accueil</a>
                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content js--fadeInLeft">

                        <div class="date">Problème de commande</div>

                        <h2>Remboursement</h2>

                        <blockquote>Si problème avec votre commande il y a, sachez que nous nous engageons à vous
                            rembourser à hauteur de 100 %. Et que toute personnes manquant à notre règlement sera radié
                            de l’application et de nos clients. Tout vol engage à des poursuites judiciaires.

                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php require_once 'template-parts/footer.php'; ?>