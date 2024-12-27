<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Light Brown and Tan Elegant Arts and Crafts Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta name="description" content="Discover unique Moroccan handmade crafts and chic artisanal designs. Shop Beldi Chic for authentic, elegant products.">

    <title>Beldi Chic</title>

</head>
  <body>

    <header>
     <?php include("header.php")?>
    </header>

    <main>
        <div class="connexion">
            <h2 id="title"></h2>


            <script>
                const titleElement = document.getElementById('title');
                const title = "Authentification";
                let index = 0;
                const interval = setInterval(() => {
                    titleElement.textContent += title.charAt(index);
                    index++;
                    if(index == title.length) {
                        clearInterval(interval);
                    }
                }, 100);
            </script>



            <br>


            <form id="authForm" action="" method="post">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <div id="emailError" class="error">Veuillez entrer une adresse email valide.</div>
                
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <div id="passwordError" class="error">Le mot de passe doit contenir au moins 6 caractères.</div>
               <div class="auth-btns">
                <button type="submit" id="submitButton" disabled>Se connecter</button>
                <a id="inscri" href="">inscrivez-vous </a></div> 
            </form>

        </div>

        <script>
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const submitButton = document.getElementById('submitButton');
            const form = document.getElementById('authForm');

            // Fonction pour valider l'email
            function validateEmail() {
                const emailValue = emailInput.value;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailValue)) {
                    emailError.style.display = 'block';
                    return false;
                }
                emailError.style.display = 'none';
                return true;
            }

            // Fonction pour valider le mot de passe
            function validatePassword() {
                const passwordValue = passwordInput.value;
                if (passwordValue.length < 6) {
                    passwordError.style.display = 'block';
                    return false;
                }
                passwordError.style.display = 'none';
                return true;
            }

            // Vérification globale pour activer/désactiver le bouton
            function checkFormValidity() {
                const isEmailValid = validateEmail();
                const isPasswordValid = validatePassword();
                submitButton.disabled = !(isEmailValid && isPasswordValid);
            }

            // Événements sur les champs
            emailInput.addEventListener('input', checkFormValidity);
            passwordInput.addEventListener('input', checkFormValidity);

            // Gestion de la soumission du formulaire
            form.addEventListener('submit', (e) => {
                e.preventDefault(); // Empêcher la soumission pour démonstration
                if (validateEmail() && validatePassword()) {
                    alert('Formulaire soumis avec succès!');
                    form.submit(); // Soumettre le formulaire si tout est valide
                }
            });
        </script>
    </main>
   
    <?php include("footer.php") ?>

</html>
