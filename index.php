<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
   
<link rel="icon" href="image/logo.png" />
<?php include 'includes/head.php'; ?>
<body>
   
    <br><br>

    <div class="container">
    
        <form method="GET">

            <div class="darkBox">

                <div class="col-8">
                    <input type="search" name="search" class="smBox" placeholder="Recherche">
                </div>
                <div class="col-4">
                    <button class="smBox1" type="submit">Rechercher</button>
                </div>
                

            </div>
        </form>

        <br>
        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="darkBox">
                    <div class="smBox">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                        <br>
                        <br>
                        <?= $question['description']; ?>
                        <br>
                        <br>
                        Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>
    </div>

</body>
</html>