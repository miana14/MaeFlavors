<?php include './vue/vueHead.php'; ?>
<?php include './vue/vueHeaderC&I.php'; ?>

<div id="banniereCI">
    <article class="form-card">
        <h2>Modification de mon Profil</h2>
        <form action="inscription.php" method="POST" class="form">
            <fieldset>
                <legend>Genre</legend>

                <div id="genre">
                    <input type="radio" id="homme" name="genre" value="homme" />
                    <label for="homme">Homme</label>

                    <input type="radio" id="femme" name="genre" value="femme" />
                    <label for="femme">Femme</label>

                    <input type="radio" id="autre" name="genre" value="autre" />
                    <label for="autre">Autre</label>
                </div>
            </fieldset><br>
            <fieldset>
                <legend>Votre Niveau</legend>

                <div id="niveau">
                    <input type="radio" id="debutant" name="niv" value="debutant" checked />
                    <label for="debutant">Débutant</label>

                    <input type="radio" id="inter" name="niv" value="inter" />
                    <label for="inter">Intermédiaire</label>

                    <input type="radio" id="expert" name="niv" value="expert" />
                    <label for="expert">Expert</label>
                </div>
            </fieldset>
            <br>
            <br>
            <label for="age">Age</label><br>
            <input type="number" id="age" name="age" min="15" max="125">
            <br>
            <label for="email">Adresse-mail </label><br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="mdp">Mot de passe </label><br>
            <input type="password" id="mdp" name="mdp" required>
            <br>
            <input type="submit" value="MODIFIER" class="form-button" />

        </form>
    </article>
</div>

<?php include './vue/vueFooter.php'; ?>