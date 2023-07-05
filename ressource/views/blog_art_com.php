<?php
include 'ressource/views/layouts/header.tpl.php';
?>

<main>

    <h1>Commentaire du blog</h1>

    <?php if($commentData===[]): ?>
        <h2>il n'y a pas de commentaire</h2
    <?php else: ?>
                <h2>
                    <?php echo $commentData['title'] ?>
                </h2>
                <p>
                    <?php echo $commentData['content'] ?>
                </p>
                <p>
                    <?php echo $commentData['Pseudo'] ?>
                </p>
    <?php endif ?>

</main>
<?php
include 'ressource/views/layouts/footer.tpl.php';
?>