<h1>Venais éditer votre article yoouuuhh</h1>
<form action="?action=blogPostCreate" method="post" class="form-example">
    <div class="form-example">
        <label for="title">Titre de l'article </label>
        <input type="text" name="title" id="title" required>
    </div><br><br>
    <label for="content">Editer votre article</label>

    <textarea id="content" name="content"
              rows="5" cols="33">

    </textarea><br><br>
    <label for="publication_date">Date d'édition de l'article</label>

    <input type="datetime-local" id="publication_date"
           name="publication_date" value="2018-06-12T19:30"
           min="2018-06-07T00:00" max="2018-06-14T00:00"><br><br>

    <label for="raking">Classement par importance</label><br><br>
    <input type="number" id="raking" name="raking"
           min="1" max="10"><br><br>

    <legend>Nom de l'auteur</legend>

    <div>
        <input type="radio" id="author_id1" name="author_id" value="last_name"
               checked>
        <label for="author_id">Michel</label>
    </div>
    <div>
        <input type="radio" id="author_id2" name="author_id" value="last_name"
               checked>
        <label for="author_id">Mitchi</label>
    </div>
    <div>
        <input type="radio" id="author_id" name="author_id" value="last_name"
               checked>
        <label for="author_id">Mickelini</label>
    </div>


<input type="submit" name="envoi"><br><br>
<div class="controls">

    <input type="reset" value="Reset">

</div>
</form>