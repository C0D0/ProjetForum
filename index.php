<?php 
    session_start();
    
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

    </div>

</body>
</html>