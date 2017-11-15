<!DOCTYPE html>
<head>
    <title>acme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--example media query link-->
    <link rel="stylesheet" type="text/css" href="css/primary.css">

</head>


<body>

<header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php';?>
</header>
   

<nav id="page-nav">
    <?php  include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/main_nav.php'; ?>  
</nav>

    

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/content.php'; ?>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>

</body>