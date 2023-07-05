
<main>

    <h1>Article du blog</h1>

    <?php if($articlesData===[]): ?>
        <h2>il n'y a pas d'articles</h2
    <?php else: ?>

        <?php foreach ($articlesData as $article) :?>
            <article>
                <h2>
                    <?php echo $article['title'] ?>
                </h2>

                <p>
                    <?php echo $article['content'] ?>
                </p>

                <p>
                    <?php echo $article['name'] ?>
                </p>
                <a href="?action=deletepost&id=<?php echo $article['id']?>"><input type="submit" value="Suprimer l'article"></a>
            </article>



        <?php endforeach;?>

    <?php endif ?>

</main>




