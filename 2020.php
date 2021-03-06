<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tucker Nickman - Portfolio Website 2021</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/portfolio.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">


</head>
<body>
    <?php include "menu.php"; ?>

    <!--home page-->

    <div id="main-wrapper" class="layout-main-wrapper">
        <div id="main" class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-left clearfix">
                <main class="main-content col" id="content" role="main">
                    <section class="section">
                        <a id="main-content" tabindex="-1"></a>
                        <div  class="block block-system block-system-main-block">
                            <div class="block-inner">
                                <div class="content">
                                    <div class="sections">
                                        <?php include "section1.php"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </main>
            </div>
        </div>
    </div>
    
    <?php include "footer.php"; ?>
</body>
</html>