<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .error {color: #FF0000;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // define variables and set to empty
    $nameErr = $emailErr = $genderErr = $websiteErr ="";
    $name = $email =$gender = $comment= $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "please enter valid name";
        }
        else{
            $name = test_input($_POST["name"]);
            if(preg_match("/^[a-zA-Z-']*$/",$name)){
                $nameErr = "only letters and white spaces allowed"
            }
        }
    }

    ?>
</body>
</html>