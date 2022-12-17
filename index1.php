<?php
session_start();
?>
<html>
<head>
    <title>Page1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post">
    <div class="card text-bg-dark p-3">
        <div class="card-header"><h4>Right Ansever = 1</h4></div>
        <div class="card-body">
            <h4>1 + 1 =</h4>
            <input type="radio" name="rQ1" value="0"> 1
            <input type="radio" name="rQ1" value="1"> 2
            <input type="radio" name="rQ1" value="0"> 3
            <input type="radio" name="rQ1" value="0"> 4
            <h4 class="mt-3">2 + 2 =</h4>
            <input type="radio" name="rQ2" value="0"> 3
            <input type="radio" name="rQ2" value="0"> 8
            <input type="radio" name="rQ2" value="0"> 6
            <input type="radio" name="rQ2" value="1"> 4
            <h4 class="mt-3">3 + 3 =</h4>
            <input type="radio" name="rQ3" value="0"> 1
            <input type="radio" name="rQ3" value="0"> 4
            <input type="radio" name="rQ3" value="1"> 6
            <input type="radio" name="rQ3" value="0"> 9
            <h4 class="mt-3">4 + 4 =</h4>
            <input type="radio" name="rQ4" value="1"> 8
            <input type="radio" name="rQ4" value="0"> 2
            <input type="radio" name="rQ4" value="0"> 6
            <input type="radio" name="rQ4" value="0"> 4
            <h4 class="mt-3">5 + 5 =</h4>
            <input type="radio" name="rQ5" value="0"> 5
            <input type="radio" name="rQ5" value="1"> 10
            <input type="radio" name="rQ5" value="0"> 15
            <input type="radio" name="rQ5" value="0"> 20
            <h4 class="mt-3">6 + 6 =</h4>
            <input type="radio" name="rQ6" value="0"> 6
            <input type="radio" name="rQ6" value="1"> 12
            <input type="radio" name="rQ6" value="0"> 15
            <input type="radio" name="rQ6" value="0"> 18
            <h4 class="mt-3">7 + 7 =</h4>
            <input type="radio" name="rQ7" value="0"> 7
            <input type="radio" name="rQ7" value="0"> 12
            <input type="radio" name="rQ7" value="1"> 14
            <input type="radio" name="rQ7" value="0"> 17
            <h4 class="mt-3">8 + 8 =</h4>
            <input type="radio" name="rQ8" value="0"> 10
            <input type="radio" name="rQ8" value="0"> 8
            <input type="radio" name="rQ8" value="1"> 16
            <input type="radio" name="rQ8" value="0"> 18
            <h4 class="mt-3">9 + 9 =</h4>
            <input type="radio" name="rQ9" value="0"> 19
            <input type="radio" name="rQ9" value="0"> 9
            <input type="radio" name="rQ9" value="1"> 18
            <input type="radio" name="rQ9" value="0"> 9
            <h4 class="mt-3">10 + 10 =</h4>
            <input type="radio" name="rQ10" value="0"> 10
            <input type="radio" name="rQ10" value="1"> 20
            <input type="radio" name="rQ10" value="0"> 30
            <input type="radio" name="rQ10" value="0"> 40
            <p><button type="submit" class="btn btn-outline-primary mt-3" name="nNext1">Next</button></p>
        </div>
    </div>

    <?php

    function GetScore(): int
    {
        $score = 0;
        for ($i = 1; $i <= 11; $i += 1){
            if(isset($_POST["rQ{$i}"])){
                if($_POST["rQ{$i}"] == 1){
                    $score += 1;
                }
            }
        }
        return $score;
    }

    function RadioChecker($radioGroup): bool
    {
        if(isset($_POST["{$radioGroup}"])){
            return true;
        }
        else{
            return false;
        }
    }

    if(isset($_POST['nNext1'])){
        for ($i = 1; $i <= 10; $i += 1){
            if(!RadioChecker("rQ{$i}")){
                echo '<div class="text-bg-danger">Not all radio buttons are selected</div>';
                break;
            }
            else{
                $_SESSION['result'] = GetScore();
                echo "<script> location.href='index2.php'; </script>";
                exit;
            }
        }
    }
    ?>
</form>
<!--<script>-->
<!--    document.addEventListener('DOMContentLoaded',function (e){-->
<!--        document.getElementsByName("nNext1")[0].onclick=function (ex) {-->
<!--            -->
<!--            ex.preventDefault();-->
<!--        }-->
<!--        console.log(document.getElementsByName("nNext1"));-->
<!--   });-->
<!--</script>-->
</body>
</html>
