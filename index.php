<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QSphere</title>
    <?php include('./client/commonFile.php') ?>
</head>

<body>

    <?php
    session_start();

    include('./client/header.php');

    if (isset($_GET['signup']) && !isset($_SESSION['user']['username'])) {
        include('./client/signup.php');

    } elseif (isset($_GET['login']) && !isset($_SESSION['user']['username'])) {
        include('./client/login.php');

    } elseif (isset($_GET['ask'])) {
        include('./client/ask.php');

    } elseif (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-details.php');

        //code step by step ne ye vale tarike se category 
        // ke acording questions nikalne btye the
        } elseif (isset($_GET['c-id'])) {
            $cid=$_GET['c-id'];
            include('./client/questions.php');

        //code step by step ne ye vale tarike se
        } elseif (isset($_GET['u-id'])) {
            $uid = $_GET['u-id'];
            include('./client/questions.php');

    } elseif (isset($_GET['latest'])) {
        include('./client/questions.php');
        
        } else {
        include('./client/questions.php');
    }

    ?>
</body>

</html>