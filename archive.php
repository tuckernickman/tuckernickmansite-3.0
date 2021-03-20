<!DOCTYPE html>
<html lang="en">
<head>
    <title>Archive</title>
    <?php include "header.php"; ?>
</head>

<body>
    <?php include "menu.php"; ?>


    <!--home page-->
    <?php include "section1.php"; ?> 

    <div class="featured-bottom">
        <aside class="container-fluid clearfix" role="complimentary">
            <section class="row region region-featured-bottom-first">
                <div id="block-flippyblock" class="block block-flippy block-flippy-block">
                    <div class="block-inner">
                        <ul class="content">
                            <?php include "content21.php"?>
                            <?php echo $archive?>
                        </ul>
                    </div>

                </div>
            </section>
        </aside>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>