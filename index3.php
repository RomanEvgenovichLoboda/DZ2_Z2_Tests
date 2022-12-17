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
    <?php
    echo '<div class="text-bg-warning"> '.$_SESSION['result'].' </div>';
    ?>
    <div class="card text-bg-dark p-3">
        <div class="card-header"><h4>Right Ansever = 5</h4></div>
        <div class="card-body">
            <input type="number" class=" form-control" name="nAn1" placeholder="1 + 1" />
            <input type="number" class=" form-control mt-4" name="nAn2" placeholder=" 2 + 2" />
            <input type="number" class=" form-control mt-4" name="nAn3" placeholder=" 3 + 3" />
            <input type="number" class=" form-control mt-4" name="nAn4" placeholder=" 4 + 4" />
            <input type="number" class=" form-control mt-4" name="nAn5" placeholder=" 5 + 5" />
            <input type="number" class=" form-control mt-4" name="nAn6" placeholder=" 6 + 6" />
            <input type="number" class=" form-control mt-4" name="nAn7" placeholder=" 7 + 7" />
            <input type="number" class=" form-control mt-4" name="nAn8" placeholder=" 8 + 8" />
            <input type="number" class=" form-control mt-4" name="nAn9" placeholder=" 9 + 9" />
            <input type="number" class=" form-control mt-4" name="nAn10" placeholder=" 0 + 0" />
            <p><button type="submit" class="btn btn-outline-primary mt-3" name="nNext3" value="vNext3">Next</button></p>
        </div>
    </div>

</form>
<?php

function GetScore(): int
{
    $totalScore = 0;
    if ($_POST['nAn1'] == 2){$totalScore += 5;}
    if ($_POST['nAn2'] == 4){$totalScore += 5;}
    if ($_POST['nAn3'] == 6){$totalScore += 5;}
    if ($_POST['nAn4'] == 8){$totalScore += 5;}
    if ($_POST['nAn5'] == 10){$totalScore += 5;}
    if ($_POST['nAn6'] == 12){$totalScore += 5;}
    if ($_POST['nAn7'] == 14){$totalScore += 5;}
    if ($_POST['nAn8'] == 16){$totalScore += 5;}
    if ($_POST['nAn9'] == 18){$totalScore += 5;}
    if ($_POST['nAn10'] == 0){$totalScore += 5;}
    return $totalScore;
}
if(isset($_POST['nNext3'])){
        $_SESSION['result'] += GetScore();
        echo "<script> location.href='index4.php'; </script>";
        exit;
}
?>

</body>
</html>
