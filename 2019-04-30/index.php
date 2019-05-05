<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <title>Gosho Space</title>
</head>
<body>
    <div id="wrapper">
    <?php include(dirname(__FILE__).'./pages/header.php'); ?>
    <div id="contentContainer">
        <!-- slide 1 -->
        <section class="parallax" id="slide1">
            <?php include(dirname(__FILE__).'./tasks_custom/190430_php_01.php'); ?>
        </section>
        <!-- slide 2 -->
        <section class="parallax" id="slide2">
            <?php include(dirname(__FILE__).'./tasks_custom/190430_php_02.php'); ?>
        </section>
        <!-- slide 3 -->
        <section class="parallax" id="slide3">
            <?php include(dirname(__FILE__).'./tasks_custom/190430_php_03.php'); ?>
        </section>
        <!-- slide 4 -->
        <section class="parallax" id="slide4">
            <?php include(dirname(__FILE__).'./tasks_custom/190430_php_04.php'); ?>
        </section>
        <!-- slide 5 -->
        <section class="parallax" id="slide5">
            <?php include(dirname(__FILE__).'./tasks_custom/190430_php_05.php'); ?>
        </section>
    </div>
    <?php include(dirname(__FILE__).'./pages/footer.php'); ?>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jarallax-0.2.4b.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/main.js"></script>
</body>
</html>