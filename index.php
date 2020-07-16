<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Born</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</head>

<body>


    <header>
        <h1 class="title">Formulaire de login du Cépégra</h1>
    </header>
    <main>
        <form class="box columns is-desktop" id="login-form" action="entree.php">
            <div class="column is-half is-offset-one-quarter">

                <label for="Nom">Nom :</label>
                <input id="Nom" name="Nom" class="input is-primary" type="text" placeholder="inscrivez votre nom">

                <label for="Prenom">Prénom :</label>
                <input id="Prenom" name="Prenom" class="input is-primary" type="text"
                    placeholder="inscrivez votre prénom">

                <label for="Email">E-mail :</label>
                <input id="Email" name="Email" class="input is-primary" type="email"
                    placeholder="Inscrivez votre e-mail">

                <p>Remplir les champs, ouvrir la console et appuyer sur étape suivante.</p>

                <button id="etape-1" type="submit" class="button">étape suivante</button>

            </div>

        </form>

        <form class="box columns is-desktop hidden" id="entree-form" action="index.php">
            <div class="column is-half is-offset-one-quarter">

                <h2 class="title" id="entreeTitle">Je choisis l’objet de ma visite :</h2>

                <div>
                    <input type="radio" class="radio" id="radioFormation" name="radioChoiceEntree"
                        value="radioFormation">
                    <label for="radioFormation">Suivre une formation</label>
                </div>

                <div id="formations" class="hidden">
                    <label for="selectFormation">Choisissez une formation :</label>
                    <select name="formation" id="selectFormatiofn">
                        <option value="">-- Faites votre selection --</option>
                        <option value="dev">Front dev</option>
                        <option value="com">Commercial</option>
                        <option value="ux">UX UI</option>
                    </select>
                </div>


                <div>
                    <input type="radio" class="radio" id="radioPersonnel" name="radioChoiceEntree"
                        value="radioPersonnel">
                    <label for="radioPersonnel">Rencontrer un membre du personnel</label>
                </div>

                <div id="personnels" class="hidden">
                    <label for="selectPersonnel">Choisissez un membre du personnel :</label>
                    <select name="personnel" id="selectPersonnel">
                        <option value="">-- Faites votre selection --</option>
                        <option value="pie">Pierre</option>
                        <option value="oli">Olivier</option>
                        <option value="mic">Michele</option>
                    </select>
                </div>


                <button id="etape-2" type="submit" class="button">étape suivante</button>

            </div>

        </form>

        <form id="response-form" class="box hidden" action="">
            <h1>Merci d'avoir Utilisé la borne "Born" !</h1>
            <p>Dirigez-vous vers le local numéro</p>
            <h2>2</h2>

            <p>Voici votre étiquette :</p>
            <p id="etiquetteNom" class="title is-medium"></p>
            <p id="etiquetteDate"></p>
            <p id="etiquetteEmail"></p>
            


            <a class="button column is-half" href="index.php">Retour au début du formulaire</a>



        </form>





    </main>

    <footer>

    </footer>


    <script src="login-form.js"></script>
</body>


</html>