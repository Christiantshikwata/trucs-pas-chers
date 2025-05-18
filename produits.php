<?php
session_start();
$page="produits.php";
$title='produits';
$header='Tous nos produits'; 
?>
<?php require 'composants/head.php'; ?>
<?php require 'composants/nav.php'; ?>
<?php require 'composants/main.php';?>



<?php require 'models/produits-data.php'; ?>


<div class="grid grid-cols-2 gap-6">

    <?php foreach ($produits as $produit): ?>
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
            src="<?php echo "uploads/".$produit["image"]?>" alt="<?php echo $produit['nom']; ?>" />
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?php echo $produit['nom']; ?><br>

            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                PRIX: <?php echo $produit['prix'] . ' ' . $produit['devise']; ?><br>
                <?php foreach($etudiants as $etudiant): ?>

                <?php if ($produit['etudiant_id'] === $etudiant['id']): ?>
                ETUDIANT:<a href="filtre.php?etudiant=<?php echo $etudiant['id'];?>" class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-900">
                     <?php echo $etudiant['nom']; ?><br>
                    </a>
                PROMOTION: <?php echo $etudiant['promotion']; ?><br>
                TEL: <?php echo $etudiant['tel']; ?><br>
                <?php endif; ?>

                <?php endforeach; ?>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require 'composants/footer.php'; ?>