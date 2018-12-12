<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="javascript.js">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>

    <body>
        <header>
        <?php
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/MyPortfolio/common/header.php'; ?>
        ?>
        <header>
        <footer class="clearfix" id="page-footer">
            <hr>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            <br>
            Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
        </footer>
    </body>
</html>