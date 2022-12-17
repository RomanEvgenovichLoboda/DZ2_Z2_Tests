<?php
session_start();
//if(isset(POST{'submit'}))

?>
<html>
<head>
    <title>Page2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post">
    <?php
    echo '<div class="text-bg-warning"> '.$_SESSION['result'].' </div>';
    ?>
    <div class="card text-bg-dark p-3"">
        <div class="card-header"><h4>Right Ansever = 3</h4></div>
        <div class="card-body">
            <h4>1 * 1 =</h4>
            <input type="checkbox" name="rQ[]" value="0">2
            <input type="checkbox" name="rQ[]" value="1">1
            <input type="checkbox" name="rQ[]" value="0">3
            <input type="checkbox" name="rQ[]" value="0">4
            <h4 class="mt-3">2 * 2 =</h4>
            <input type="checkbox" name="rQ[]" value="0">3
            <input type="checkbox" name="rQ[]" value="0">8
            <input type="checkbox" name="rQ[]" value="0">6
            <input type="checkbox" name="rQ[]" value="1">4
            <h4 class="mt-3">3 * 3 =</h4>
            <input type="checkbox" name="rQ[]" value="0">1
            <input type="checkbox" name="rQ[]" value="0">4
            <input type="checkbox" name="rQ[]" value="0">6
            <input type="checkbox" name="rQ[]" value="1">9
            <h4 class="mt-3">4 * 4 =</h4>
            <input type="checkbox" name="rQ[]" value="0">8
            <input type="checkbox" name="rQ[]" value="0">2
            <input type="checkbox" name="rQ[]" value="1">16
            <input type="checkbox" name="rQ[]" value="0">4
            <h4 class="mt-3">5 * 5 =</h4>
            <input type="checkbox" name="rQ[]" value="0">5
            <input type="checkbox" name="rQ[]" value="0">10
            <input type="checkbox" name="rQ[]" value="1">25
            <input type="checkbox" name="rQ[]" value="0">20
            <h4 class="mt-3">6 * 6 =</h4>
            <input type="checkbox" name="rQ[]" value="1">36
            <input type="checkbox" name="rQ[]" value="0">12
            <input type="checkbox" name="rQ[]" value="0">15
            <input type="checkbox" name="rQ[]" value="0">18
            <h4 class="mt-3">7 * 7 =</h4>
            <input type="checkbox" name="rQ[]" value="0">7
            <input type="checkbox" name="rQ[]" value="0">12
            <input type="checkbox" name="rQ[]" value="1">49
            <input type="checkbox" name="rQ[]" value="0">>17
            <h4 class="mt-3">8 * 8 =</h4>
            <input type="checkbox" name="rQ[]" value="0">10
            <input type="checkbox" name="rQ[]" value="0">8
            <input type="checkbox" name="rQ[]" value="1">64
            <input type="checkbox" name="rQ[]" value="0">18
            <h4 class="mt-3">9 * 9 =</h4>
            <input type="checkbox" name="rQ[]" value="0">19
            <input type="checkbox" name="rQ[]" value="0">9
            <input type="checkbox" name="rQ[]" value="1">81
            <input type="checkbox" name="rQ[]" value="0">9
            <h4 class="mt-3">10 * 10 =</h4>
            <input type="checkbox" name="rQ1[]" value="1">100
            <input type="checkbox" name="rQ[]" value="0">20
            <input type="checkbox" name="rQ[]" value="0">30
            <input type="checkbox" name="rQ[]" value="0">40
            <p><button type="submit"  class="btn btn-outline-primary mt-3" name="sNext2" value="vNext2">Next</button></p>
            <br>
        </div>
    </div>


    <?php

    function GetScore(): int
    {
        $score = 0;
        if (isset($_POST['rQ'])){
            foreach ($_POST['rQ'] as $item) {
                if ($item == "1") {
                    $score += 3;
                }
            }
        }
        return $score;
    }
    if(isset($_POST['sNext2'])){
        if (isset($_POST['rQ'])) {
            $_SESSION['result'] += GetScore();
            echo "<script> location.href='index3.php'; </script>";
            exit;
        }
        else{
            echo '<div class="text-bg-danger">Not all checkboxes are selected</div>';
        }
    }
    ?>
</form>


</body>
</html>
