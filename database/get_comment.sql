SELECT
    article.title,
    article.content,
    article.author_id,
    comment.content,
    comment.author_id
FROM
    article
        INNER JOIN
    comment ON article.id = comment.article_id
WHERE
        article.id = ?