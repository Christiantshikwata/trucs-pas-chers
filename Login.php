<?php

// Vérifie si l'utilisateur est déjà connecté
session_start();

if($_SESSION['user'] ?? false)
{
    header("Location: create.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //var_dump($email,$password);
    //die;
    $user = [
        "nom" => "Admin",
        "email" => "admin@trucspaschers.com",
        "password" => "1234"
    ];

    if ($email === $user['email'] and $password === $user['password']) {
    
        // Enregistrer les information de l'utilisateur das la session
        $_SESSION['user'] = [
            'nom' => $user['nom'],
            'email' => $user['email']
        ];

        session_regenerate_id(true);

        // Redirection
        header("Location: create.php");
        exit();
        

    } else {
        $error = "Emil ou mot de passe incorrect ";
    }
}




$title = "Login";
$page = "login.php"; ?>


<section class="bg-white border-gray-200  shadow-sm  dark:bg-gray-900">
    <?php require 'composants/head.php'; ?>
    <?php require 'composants/nav.php'; ?>
    <?php require 'composants/main.php'; ?>

    <form class="max-w-sm mx-auto" action="login.php" method="POST">
        <!-- Email -->
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" id="email" name="email" required
            class="block w-full h-11 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="name@trucspaschers.com" />

        <!-- Passsword -->
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
        <input type="password" id="password" name="password" required
            class="block w-full h-11 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        <br>
            <?php if ($error ?? false) : ?>
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 " role="alert">
                <span class="font-medium"><?php echo $error ?> </span>
            </div>
        <?php endif; ?>

        <!-- Submit -->
        <button type="submit"
            class="mt-4 inline-flex justify-center items-center py-3 px-5 w-full text-base font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Se connecter
        </button>

    </form>
</section>

<?php require 'composants/footer.php'; ?>