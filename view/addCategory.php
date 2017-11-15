<!DOCTYPE html>
<head>
    <title>add a category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--example media query link-->
    <link rel="stylesheet" type="text/css" href="../css/primary.css">

</head>




<header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php';?>
</header>


    
<?php
    $newCategory = "this is where the User will see the new category is set.";
if (isset($newCategory)) {
    echo $newCategory;
}
?>
    <h1>add category</h1>
    <p>add a new category of products below.</p>
    
    <div id="formContainer">
    <form>
      
        <label for="categoryName">new category name:</label>
        <br>
        <input type="text" id="categoryName"/>
          <div class="buttons">
              <input type="submit" id="subNewCategory" value="add category"/>
        </div>
    </form>
    </div>

