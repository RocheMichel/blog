<main>

    <h1>Le blog</h1>

    <?php if($articlesData===[]): ?>
        <h2>il n'y a pas d'articles</h2
    <?php else: ?>

            <article>
                <h2>
                    <?php echo $articlesData['title'] ?>
                </h2>
                <p>
                    <?php echo $articlesData['content'] ?>
                </p>
                <p>
                    <?php echo $articlesData['name'] ?>
                </p>
            </article>
            <p>
                <?php echo $comment['content'] ?>
            </p>
            <p>
                <?php echo $comment['author_id'] ?>
            </p>
    <?php endif ?>

</main>