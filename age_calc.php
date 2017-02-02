<?php
    $result = '';
    if(isset($_POST['submit'])){
        if(isset($_POST["birthday"])){
            $birthday = new DateTime($_POST['birthday']);
            $now = new DateTime();
            $interval = $now->diff($birthday);
            $result = 'You Birth date is: '.$_POST['birthday']. '<br>'. $interval->y. ' years, ' . $interval->m . ' Month(s), '. $interval->d .' days ';
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age Calculator</title>
    <style>
        body{
            background: #f5f5f5;
        }
        .form{
            text-align: center;
            margin-top: 200px;
        }
        .result{
            margin-top: 20px;
            font-size: 35px;
            text-align: center;
            color: green;
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <input type="date" name="birthday">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <div class="result">
        <?php echo $result; ?>
    </div>
</body>
</html>