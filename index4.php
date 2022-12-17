<?php
session_start();
?>
<html>
<head>
    <title>Page4</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post">
    <div class="card text-bg-dark p-3" style="max-width: 18rem;">
        <div class="card-header"><h4>Finish !</h4></div>
        <div class="card-body">
            <?php
            echo '<h4>Your Score = '.$_SESSION['result'].' </h4>';
            ?>
            <button type="submit" class="btn btn-outline-primary mt-3" name="nNext4" value="vSend">Restart</button>

        </div>
    </div>


    <?php
    if(isset($_POST['nNext4'])){
        unset($_SESSION['result']);
        echo "<script> location.href='index1.php'; </script>";
        exit;
    }
    ?>

</form>
