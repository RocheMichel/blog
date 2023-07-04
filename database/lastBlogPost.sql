SELECT
    article.title,
    article.content,
    author.name
FROM
    article
        INNER JOIN
    author ON article.author_id = author.id
ORDER BY
    article.publication_date DESC
    LIMIT
    10;