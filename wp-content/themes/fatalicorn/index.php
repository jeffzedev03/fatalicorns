<?php get_header(); ?>

    <div class="nk-main">


        <!-- START: Header Title -->
        <!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
        .nk-header-title-boxed
-->
        <div class="nk-header-title nk-header-title-lg nk-header-title-parallax-opacity">
            <div style="background: rgba(0,0,0,0.4); position: absolute; top: 0; width: 100%; height: 100%;"></div>
            <div class="bg-image">
                <div style="background-image: url('<?php bloginfo("template_directory"); ?>/assets/images/wallpaper-1.jpg');"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">




                        <div class="nk-header-text">

                            <h1 class="nk-title display-3 tshdb" style="font-size: 84px;">Fatalicorns</h1>
                            <h2 class="nk-title display-3 tshdb">Structure gaming créée pour vous !</h2>

                            <div class="nk-gap-2"></div>
                            <a href="<?php bloginfo('url'); ?>/#presentation" target="_blank" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                <span>En savoir plus</span>
                            </a>
                           

                            <div class="nk-gap-4"></div>

                        </div>


                    </div>
                </div>
            </div>

        </div>
        <!-- END: Header Title -->






      

        <!-- START: About -->
        <div class="nk-box bg-dark-1">
            <div class="container text-xs-center">
                <div class="nk-gap-2"></div>
                 <div id="presentation"></div>
                <h2 class="nk-title h1">Fatalicorns, que sommes-nous ?</h2>
                <div class="nk-gap-3"></div>

                <p class="lead">
                    Fatalicorns est un groupement de gamers évoluant sur des jeux en ligne compétitifs. <br>
                    Le terme de structure multigaming est à prendre avec des pincettes car nous ne sommes pas déclarés en tant qu'association, <br> 
                    et qui par conséquent ne valide pas le terme de "multigaming" mais l'esprit est le même. <br> 
                    <br>
                    L'idée est de créer un environnement saint et complet pour les joueurs / membres d'une équipe afin de leurs permettrent de performer. <br>
                    Quand nous parlons "d'environnemnt", nous parlons par exemple d'un site complet (pour gérer les évènements, entraînements), de réunions via sections, et bien d'autres à définir. <br>
                    La plupart des structures / guildes (hors multigaming officielle) n'ont pas cet environnement qui peut permettre de faire perdurer et évoluer les teams.
                </p>
                <br><br><br>
                <div id="recrutement"></div>
                <h2 class="nk-title h1">Fatalicorns, une structure pour vous ?</h2>
                <div class="nk-gap-3"></div>

                <p class="lead">
                    Actuellement, je suis seul dans la structure. Je cherche bien sûr à élargir l'effectif. <br>

                    Comme dit précedemment, je joue à League Of Legends, par conséquent je recherche des joueurs de niveaux Silver 
                    à Gold pour monter la première line up de la structure. <br>
                    <br>
                   Dans le but de développer la structure multigaming, je recherche des personnes / gamers prêts à monter une line up sur leurs jeux favoris, notamment sur LOL où nous pouvons penser à des lines up bronzes / silvers / golds / plats / diamants. <br>
                   <br>
                   Alors n'hésitez pas à nous contacter si vous êtes :
                </p>

            <div class="row vertical-gap lg-gap">
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-happy-outline"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Sociable</h2>
                            Conviviale, dynamique, poli, un état d'esprit saint dans un corps saint.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-android-person"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Majeur(e)</h2>
                            Afin d'éviter un écart de générations et de mentalités, nous ne recrutons que des personnes majeures.
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-ribbon-a"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Compétitif</h2>
                            Temps de jeux élevés, tryhard, vous aimez gagner (mais sans insulter ces teammates :) ).
                        </div>
                    </div>
                </div>
            </div>
           
            </div>
        </div>
        <!-- END: About -->

     

        <!-- START: Subscribe -->
        <div class="nk-box bg-dark-1" id="contact">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <h2 class="nk-title text-xs-center h1">Contactez les fatalicorns !</h2>
                        <div class="nk-gap-3"></div>

                        <?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire de contact"]'); ?>

                       
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
            <div class="nk-gap-4"></div>
        </div>
        <!-- END: Subscribe -->


<?php get_footer(); ?>