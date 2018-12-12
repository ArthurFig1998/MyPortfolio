<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <script src="javascript.js"></script>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    </head>

    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/MyPortfolio/common/header.php'; ?>
        <header>
            <div class="main">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Amet cursus sit amet dictum. Nunc vel risus commodo viverra.
                   Dignissim suspendisse in est ante in nibh. Cras ornare arcu dui vivamus arcu
                    felis bibendum ut tristique. In dictum non consectetur a erat nam.
                     Sem fringilla ut morbi tincidunt. Ut enim blandit volutpat maecenas volutpat blandit.
                      Congue nisi vitae suscipit tellus mauris a.
                       Sem integer vitae justo eget. Cursus metus aliquam eleifend mi in.
                        Suscipit adipiscing bibendum est ultricies integer quis auctor elit.
                         Et ultrices neque ornare aenean euismod elementum nisi quis.
                          Felis eget velit aliquet sagittis id consectetur purus ut faucibus.
                           Tortor consequat id porta nibh. 
                           Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
            </div>        
            <footer class="clearfix" id="page-footer">
            <hr>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            <br>
            Last Updated: <?php echo date('j F, Y', getlastmod()); ?>
            </footer>
    </body>
</html>