<?php require '../php/header.php'?>

    <section class="section_contact">
        <div class="filter">
            <form id="avis-form">
                <h2>Nous sommes à votre écoute</h2>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="avis">Votre demande / avis :</label>
                    <textarea id="avis" name="avis" required></textarea>
                </div>
                <button type="submit" class="btn3">Envoyer</button>
            </form>

        </div>
    </section>
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