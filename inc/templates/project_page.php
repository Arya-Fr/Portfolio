<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIANCHI Marius projet</title>
    <link rel="stylesheet" href="/assets/CSS/style_projet.css">
    <link rel="icon" href="./assets/IMG/Logo page.png" />
</head>

<body>
    <a rel="noopener noreferrer" class="back" href="http://bianchi.marius.free.fr/">
        <ion-icon name="arrow-back-outline"></ion-icon>
    </a>
    <h1 class="titre"><?php echo $projet["titre"] ?></h1>
    <h3><?php echo $projet["date"] ?></h3>
    <div class="main">
        <section class="article">
            <div>
                <?php echo $projet["description"] ?>
            </div>
            <img src="./assets/IMG/<?php echo $projet["main_image"] ?>">
        </section>
        <?php if(isset($projet["image_compl1"])){?>
        <section class="galerie">
            <img src="./assets/IMG/<?php echo $projet["image_compl1"] ?>">
            <?php if(isset($projet["image_compl2"])){?>
            <img src="./assets/IMG/<?php echo $projet["image_compl2"] ?>">
            <?php } if(isset($projet["image_compl3"])){ ?>
            <img src="./assets/IMG/<?php echo $projet["image_compl3"] ?>">
            <?php } ?>
        </section>
        <?php } ?>

        <?php if(isset($projet["image_compl4"])){?>
        <section class="galerie">
            <img src="./assets/IMG/<?php echo $projet["image_compl4"] ?>">
            <?php if(isset($projet["image_compl5"])){ ?>
            <img src="./assets/IMG/<?php echo $projet["image_compl5"] ?>">
            <?php } ?>
        </section>
        <?php } ?>

        <a id="pro" target="_blank" rel="noopener noreferrer" class="git" href="https://github.com/Arya-Fr/<?php echo $projet['url'] ?>">
            <ion-icon name="logo-github"></ion-icon>
        </a>
    </div>
    
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>