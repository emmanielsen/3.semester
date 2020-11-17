
<?php 
    session_start();
    include "server.php";
?>

<h1><?php echo $_SESSION['success'] . "  And You are User  " . $_SESSION['new_id']; ?> <br>
<a href="demo.php?logout=<?php echo $_SESSION['new_id'] ?>">Logout</a>
</h1>

<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/anden.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Playball&display=swap" rel="stylesheet">
     
        <title> Taffelvognen</title>
    </head>
<body>

    <div class="container">
        <div class="inserts">
            <h1> Bestil Her </h1>
            <form action="" method="post">
                <input type="text" name="navn" placeholder="input navn" required=""> <br>
                <input type="email" name="email" placeholder="input email" required=""> <br>
                <input type="text" name="adresse" placeholder="input adresse" required=""> <br>
                <input type="text" name="postnr" placeholder="input postnr" required=""> <br>
                <input type="date" name="dato" placeholder="input dato" required=""> <br>
                <input type="text" name="tidsrum_fra" placeholder="input tidsrum_fra" required=""> <br>
                <input type="text" name="tidsrum_til" placeholder="input tidsrum_til" required=""> <br>
                <input type="text" name="antal" placeholder="input antal" required=""> <br>
                <input type="text" name="kommentar" placeholder="input kommentar" required=""> <br>

                <textarea name="detail" placeholder=" ADD A DISCRIPTION" row="10" required="">
                </textarea>
                <br>

                <input type="submit" name="submit" value="SendNow">
            </form>
        </div>

        <div class="views">
            <h1> adinstrations view </h1> 
            <h2> 
                Alle reservationer lavet i dag <?php echo date ('D, d M Y');?>
            </h2>
                <div class="links">
                    <div class="body">
                        <?php 
                            $query = "SELECT * FROM users";
                            $return = mysqli_query($db, $query);

                            if($return){
                                if (mysqli_num_rows($return) > 0) {
                                     $new_reserv = mysqli_fetch_all($return, MYSQLI_ASSOC);

                                     foreach ($new_reserv as $value) {
                        ?>
                            <a href="">
                                <?php
                                    if(strlen($value['detail']) >= 50){
                                        echo substr($value['detail'], 0, 50). "...";
                                        echo "<p class='view_more'>View More</p>"                                
                                    } else {
                                        echo $value['detail'];
                                    }
                                ?>

                        <?php }}} ?>
  
                        
                    </div>
                </div> 
                 
                <p style="color: white;"> <strong>NOTE</strong> Dette felt er kun synligt for adminstration </p> 
        </div>  
    </div>
</body>
