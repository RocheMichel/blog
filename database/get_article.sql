-- noinspection SqlNoDataSourceInspectionForFile

SELECT
    article.title,
    article.content,
    author.Pseudo AS name
FROM
    article
        INNER JOIN
    author ON author.id = article.author_id
WHERE
        article.id = :id_Art ;