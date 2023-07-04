SELECT
    comment.content,
    comment.author
FROM
    article
        INNER JOIN
    comment ON article.id = comment.article_id
WHERE
        article.id = ?