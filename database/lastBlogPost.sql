SELECT
    article.title,
    article.content,
    article.id,
    author.name

FROM
    article
        INNER JOIN
    author ON article.author_id = author.id
ORDER BY
    article.publication_date DESC
    LIMIT
    10;

