
<?php
//j'importe les fonctions pour avoir les infos de la base de donnée des articles et commentaires des auteurs
include 'app/persistances/blogPostData.php';

if(isset($_POST['envoi'])){ // si formulaire soumis
    $createarticle = blogPostCreate($pdo,$_POST['title'], $_POST['content'],$_POST['raking'],$_POST['publication_date'],$_POST['author_id']);
}else{
    echo'Les informations non pas étaient transmis';
}

//on définie les variables utiles pour le views


include 'ressource/views/layouts/header.tpl.php';
include 'ressource/views/layouts/blogPostCreate.tpl.php';
include 'ressource/views/layouts/footer.tpl.php';
?>