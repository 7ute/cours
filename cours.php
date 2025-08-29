<div class="p-5 text-center">
    <h1 class="display-1">Cours</h1>
    <h2 class="text-muted font-weight-light">Initiation à l’algorithmique</h2>
</div>

<!-- ! SOMMAIRE -->
<div class="row">
    <div class="col-xs-12 col-sm-4 small">
        <div class="sticky-top">
            <h4 id="sommaire">Sommaire</h4>
            <ul class="list-unstyled">
                <li><a href="#algo-variables">Variables, constantes et déclarations</a></li>
                <li><a href="#algostructure-dun-programme">Structure d'un Programme</a></li>
                <li><a href="#saisie-affichage">Saisie / Affichage</a></li>
                <li>
                    <a href="#structures-conditionnelles">Structures Conditionnelles</a>
                    <ul>
                        <li>
                            Choix conditionnels
                            <ul>
                                <li>Choix conditionnel "Si"</li>
                                <li>Choix conditionnel "Selon"</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            Boucles conditionnelles
                            <ul>
                                <li>Boucle "Faire ... Répéter Tant Que"</li>
                                <li>Boucle "Tant Que ... Faire"</li>
                                <li>Boucle "Pour"</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="#operateurs-booleens">Operateurs Booléens</a></li>
                <li>
                    <a href="#tableaux">Tableaux</a>
                    <ul>
                        <li>Parcours d'un tableau</li>
                        <li>Tableau multi-dimensionnel</li>
                    </ul>
                </li>

                <li><a href="#enregistrements">Enregistrements</a></li>
                <li>
                    <a href="#sous-programmes">Sous-Programmes</a>
                    <ul>
                        <li>Paramètres et retours</li>
                        <li>Variables locales</li>
                        <li>Imbrications</li>
                        <li>Récurrence</li>
                    </ul>
                </li>

                <!-- <li>Fichiers</li> -->
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <?php include('cours-algo-variables.php') ?>
		<?php include('cours-structure-programme.php') ?>
		<?php include('cours-saisie-affichage.php') ?>
		<?php include('cours-structures-conditionnelles.php') ?>
        <?php include('cours-operateurs-booleens.php') ?>
        <?php include('cours-tableaux.php') ?>
        <?php include('cours-enregistrements.php') ?>

        <div class="p-5 text-muted text-center">
            La suite à venir…
        </div>
    </div>
</div>
