<?php

require_once "src/FirebaseController.php";

$firebase = new FirebaseController();

$data = [
    [
        "internal_id" => 1,
        "name" => "fujiwaraizuho",
        "discription" => "I'm Perfect High School Student!",
        "icon_picture" => "https://pbs.twimg.com/profile_images/1012735665954435072/TrkaqR9o_400x400.jpg"
    ]
];


foreach ($data as $profile) {
    $firebase->setProfile("/users/", $profile);   
}

$data = $firebase->getProfile("/users");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Firebase-PHP</a>
        </nav>
    </header>

    <div class="row pt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
                foreach ($data as $name => $data) {
                    echo "<div class='card mb-2'>";
                    echo "<div class='card-body'>";
                    echo "<h2>".$name."</h2>";

                    foreach ($data as $key => $value) {
                        echo $key.": ".$value."<br />";
                    }

                    echo "</div>";
                    echo "</div>";
                } 
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>   
</body>
</html>