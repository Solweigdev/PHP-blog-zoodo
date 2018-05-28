<!doctype html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title>Contact</title>
</head>

<body>

<div class="container">

    <?php include_once 'views/includes/header.php' ?>

<main role="main" class="container">

    <h1>Contact</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Prénom</label>
            <input type="text" class="form-control" name="firstname" id="exampleFormControlInput2" placeholder="John">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3">Bonjour</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2" name="btnContact"">Envoyer mon message</button>
    </form>

</main><!-- /.container -->

<?php include_once 'views/includes/footer.php' ?>



</body>
</html>
