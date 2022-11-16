<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIANCHI Marius blog</title>
    <link rel="stylesheet" href="/assets/CSS/style_projet.css">
    <link rel="icon" href="./assets/IMG/Logo page.png" />
</head>

<body>
    <a rel="noopener noreferrer" class="back" href="http://bianchi.marius.free.fr/">
        <ion-icon name="arrow-back-outline"></ion-icon>
    </a>
    <h1 class="titre"><?php echo $blog['title'] ?></h1>
    <h3><?php echo $blog["date"] ?></h3>
    <div><?php echo $blog["content"] ?></div>
    <div class="main">
        <?php foreach($post as $p) { ?>
            <h4><?php echo $p['title'] ?></h4>
            <div><?php echo $p['content'] ?></div>
            <h6><?php echo $p['date'] ?></h6>
        <?php } ?>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>