<?php 
    session_start();
    require('actions/questions/showArticleContentAction.php'); 
    require('actions/questions/postAnswerAction.php');
    require('actions/questions/showAllAnswersOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
   
    <br><br>

    <div class="container">


        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }


            if(isset($question_publication_date)){
                ?>
                <section class="show-content">
                <div class="darkBox">
                    <div class="smBox">
                    <p><?= $question_title; ?></p>
                    
                    
                    <div class="smBox">
                    <p><?= $question_content; ?></p>
                    
                    
                    <div class="smBox">
                    <small><?= '<a href="profile.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
                    
                </div>
                </section>
                <br>
                <section class="show-answers">

                    <form class="form-group" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                            <textarea name="answer" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                        </div>
                    </form>

                    <?php 
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="darkBox">
                            <div class="smBox">
                                <div class="card-header">
                                    <a href="profile.php?id=<?= $answer['id_auteur']; ?>">
                                        <?= $answer['pseudo_auteur']; ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <?= $answer['contenu']; ?>
                                </div>
                            </div>
                            </div>
                            <br>
                            <?php
                        }
                    ?>

                </section>
                
                <?php
            }
        ?>

    </div>

</body>
</html>