<main>
    <form>
        <label for="prenom">Pseudonyme:</label>
        <input type="text" id="prenom" name="prenom"><br>

        <label for="email">Adresse Email:</label>
        <input type="email" id="email" name="email" autocomplete="mail" required><br>

        <label for="artiste_favoris">Artiste favoris</label>
        <input type="text" id="artiste_favoris" name="artiste_favoris"><br>

        <label for="album_favoris">Album Favoris:</label>
        <select id="album_favoris" name="album_favoris">
            <option value="nakamura">Nakamura</option>
            <option value="melo">Mélo</option>
            <option value="sos">SOS</option>
            <option value="purpose">Purpose</option>
        </select>
        <br><br><br>

        <label for="commentaire">Commente les albums que tu aimerais voir bientôt sur notre site :</label>
        <textarea id="commentaire" name="commentaire" rows="4" cols="50"></textarea><br>

        <button id="mon-bouton">Envoyer la réponse</button>
        <div id="mon-alerte" role="alert"></div>
        <script type="text/template" id="contenu-alerte">
            <p>Informations manquantes</p>
              </script>
        <script>
            let monBouton = document.querySelector('#mon-bouton');
            monBouton.addEventListener('click', afficherAlerte);

            function afficherAlerte() {
                let monAlerte = document.querySelector('#mon-alerte');
                let contenuAlerte = document.querySelector('#contenu-alerte').innerHTML;

                monAlerte.innerHTML = contenuAlerte;
            }
        </script>
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>