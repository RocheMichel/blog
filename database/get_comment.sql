SELECT
    comment.content,
    article.title,
    author.Pseudo
FROM
    comment
        INNER JOIN
    author ON author.id = comment.author_id
        INNER JOIN
    article ON comment.article_id = article.id
WHERE
        article.id = :id_com;
