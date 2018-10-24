<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="assets/img/favicon.png">
    <title>PHP com Rapadura CONFERENCE 2018</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://use.fontawesome.com/6c531641d9.js"></script>
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

    <!-- Top Navigation -->
    <?php require_once 'views/nav.php'; ?>

    <!-- Section Banner -->
    <?php require_once 'views/banner.php'; ?>

    <!-- Section Parallax One -->
    <?php require_once 'views/parallax-one.php'; ?>

    <!-- Section About -->
    <?php require_once 'views/about.php'; ?>

    <!-- Section Speakers -->
    <?php require_once 'views/speakers.php'; ?>

    <!-- Section Parallax two -->
    <?php require_once 'views/parallax-two.php'; ?>
    <br>
    <!-- Section Local -->
    <?php require_once 'views/local.php'; ?>

    <!-- Section Parallax three -->
    <?php require_once 'views/parallax-three.php'; ?>

    <!-- Section schedule -->
    <?php require_once 'views/schedule.php'; ?>

    <!-- Section Parallax three -->
    <?php require_once 'views/parallax-four.php'; ?>

    <!-- Section Conduct-code -->
    <?php require_once 'views/conduct-code.php'; ?>

    <!-- Section FAQ -->
    <?php require_once 'views/faq.php'; ?>

    <!-- Section sponsors -->
    <?php require_once 'views/sponsors.php'; ?>

    <!-- Section sponsors -->
    <?php require_once 'views/footer.php'; ?>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/init.js"></script>
    <script src="https://www.sympla.com.br/js/sympla.widget-pt.js/288555"></script>

</body>
</html>
<script>
    var $doc = $('html, body');
    $('.scrollSuave').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 2000);
        return false;
    });
</script>
