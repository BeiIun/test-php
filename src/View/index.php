<?php include 'header.php' ?>
    <div>
        <h1><?= filter_input(INPUT_POST, "title");?></h1>
        <p><?= filter_input(INPUT_POST, "description");?></p>
    </div>
<?php include 'footer.php' ?>