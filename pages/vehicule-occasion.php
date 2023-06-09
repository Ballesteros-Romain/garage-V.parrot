<?php require '../php/header.php'?>

    <main class="main">
        <img src="../image/images (2).jpeg" alt="photo de voitures" class="p-vehicule-occ">
        <h2>trouver la voiture qu'il vous faut</h2>
        <div class="trait"></div>
        <div class="texte">
            <p>Tout le monde le sait, lorsque l’on cherche une voiture, les bonnes affaires se trouvent sur le marché de
                l’occasion.
                Chez Select Auto, nous vous proposons le meilleur des voitures d’occasion dans le 77 pour effectuer un
                investissement
                qui vaut vraiment le coup. Si vous en avez assez des petites annonces de vente de voiture dans le 77 et
                surtout des
                arnaques qui pullulent sur le marché de l’occasion, faites confiance à un prestataire comme Select Auto
                qui opères un
                garage d’occasion dans le 77. Concessionnaire auto en Seine-et-Marne, nous vous proposons des véhicules
                qui ont été
                contrôlés par une équipe experte soucieuse de vous offrir une prestation de qualité.
                Pas de mauvaise surprise aussi sur ce qui est du prix des voitures d’occasion en Seine-et-Marne: ce
                dernier est fixé en
                fonction de la côte argus et des spécificités du véhicule. Les meilleures marques du marché sont
                disponibles : de
                Renault à Peugeot, de Volkswagen à Toyota en passant par Citroën ou Fiat et bien d’autres.</p>
        </div>
        <img src="../image/images.jpeg" alt="photo de voiture" class="p-vehicule-occ">
        <div class="center">
            <p>tout à été penser pour vous faciliter la vie.</p>
        </div>
        <div class="trait3"></div>
        <div class="texte">
            <p>Envie d’une citadine, d’une voiture familiale ou d’un véhicule commercial pour votre entreprise ?
                Chez Select Auto, le choix est vaste. Notre but est de vous aider à trouver la perle rare avec des prix
                bien plus
                attractifs que chez un concessionnaire. Nous vous proposons un achat sécurisé, accompagné d’une
                expertise qui comprend
                le contrôle et l’essai du véhicule.
                Tout au long de la prestation d’achat, Select Auto vous accompagne non seulement pour découvrir les
                modèles qui
                correspondent à vos attentes, mais aussi pour vous aider dans toute la partie administrative.
                Nous proposons des possibilités de financement adaptées à tous, toutes marques confondues et même
                accessibles aux jeunes
                conducteurs. Nos véhicules sont révisés, mais aussi sous garantie (12 à 60 mois).
                Pour rendre votre expérience avec nous encore plus globale, nous établissons aussi pour vous la carte
                grise, dont le
                changement de titulaire.</p>
        </div>
        <h2>nos voitures</h2>
        <!-- filtre de re recherche ============================================================================ -->



        <div class="filter">
            <h2>Filtres de recherche</h2>
            <div class="filter-row">
                <label for="classe">Marque :</label>
                <select id="classe">
                    <option value="">Toutes les marques</option>
                    <option value="A">Citroën</option>
                    <option value="B">Renault</option>
                    <option value="C">Volkswagen</option>
                </select>
            </div>
            <div class="filter-row">
                <label for="km">Kilométrage :</label>
                <select id="km">
                    <option value="">Tous les kilométrages</option>
                    <option value="0-50000">0 - 50 000 km</option>
                    <option value="50000-100000">50 000 - 100 000 km</option>
                    <option value="100000-150000">100 000 - 150 000 km</option>
                    <option value="150000+">150 000 km et plus</option>
                </select>
            </div>

            <div class="filter-row">
                <label for="annee">Année :</label>
                <select id="annee">
                    <option value="">Toutes les années</option>
                    <option value="2010-2015">2010 - 2015</option>
                    <option value="2015-2020">2015 - 2020</option>
                    <option value="2020+">2020 et plus</option>
                </select>
            </div>

            <div class="filter-row">
                <label for="prix">Prix :</label>
                <select id="prix">
                    <option value="">Tous les prix</option>
                    <option value="0-10000">0 - 10 000 €</option>
                    <option value="10000-20000">10 000 - 20 000 €</option>
                    <option value="20000-30000">20 000 - 30 000 €</option>
                    <option value="30000+">30 000 € et plus</option>
                </select>
            </div>
            <button class="btn3 btn-filter" id="filter-btn">Filtrer</button>
            <button id="reset-btn" class="btn3">Réinitialiser</button>
        </div>






        <!-- fin filtre de recherche -->

        <div class="trait"></div>
        <div class="container">
            <div class="card card-occasion" id="polo" data-classe="C" data-km="60000" data-annee="2020"
                data-prix="21000">
                <img src="../image/polo.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Volkswagen polo</p>
                        <p class="annee">année : 2020</p>
                        <p class="km">60 000km</p>
                        <p class="prix">21 000 €</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="c3" data-classe="A" data-km="163000" data-annee="2018"
                data-prix="16200">
                <img src="../image/c3.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Citroën c3</p>
                        <p class="annee">année : 2018</p>
                        <p class="km">163 000km</p>
                        <p class="prix">16 200€</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="senic" data-classe="B" data-km="190000" data-annee="2015"
                data-prix="13000">
                <img src="../image/senic.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Renault senic</p>
                        <p class="annee">année : 2015</p>
                        <p class="km">190 000km</p>
                        <p class="prix">13 000 €</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="kangoo" data-classe="B" data-km="230000" data-annee="2012"
                data-prix="8500">
                <img src="../image/kangoo.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Renault kangoo</p>
                        <p class="annee">année : 2012</p>
                        <p class="km">230 000km</p>
                        <p class="prix">8 500 €</p>
                    </h3>
                </div>
            </div>
        </div>
        <div class="center">
            <p>contactez nous pour
                toute demande</p>
        </div>
        <a href="./avis.php"><button class="btn3">contactez nous</button></a>
    </main>
    <footer>
        <div class="bg-blk footer">
            <p>Nos horaires: <br>
                du mardi au vendredi <br>
                de 9h à 12h <br> et de <br> 13h à 18h <br>samedi <br>de 10h à 15h</p>
            <div class="trait2"></div>
            <img src="../image/Garage_V.parrot-removebg-preview.png" alt="logo">
            <p>contactez nous : <br>01 85 66 32 15 <br>contact@vparrot.fr <br>30 rue de la reussite <br>34000
                <br>montpellier
            </p>
        </div>
    </footer>
    <script src="../script.js"></script>

</body>

</html>