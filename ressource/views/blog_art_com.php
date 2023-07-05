

<main>

    <h1>Commentaire du  <?php echo $article['title'] ?></h1>

    <?php if($comments===[]): ?>
        <h2>il n'y a pas de commentaire</h2

    <?php else: ?>
        <?php foreach ($comments as $comment) :?>
                <p>
                    <?php echo $comment['content'] ?>
                </p>
                <p>
                    <?php echo $comment['Pseudo'] ?>
                </p>
        <?php endforeach;?>
    <?php endif ?>

</main>
