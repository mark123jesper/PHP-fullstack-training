<!doctype html>
<html>
<head>
    <title>
        PHP and HTML
    </title>
</head>
<body>
    <h1>Embed PHP in HTML</h1>
    <!-- Sample 1 -->
    <?php echo "Hello World"; ?>

    <!-- Sample 2 -->
    <?php
        print "<p>Sample 1: This Text is printed from PHP!</p>";
    ?>
    <?= "<hr>" ?>
    <p>
        <?php
        echo "Sample 2: This Text is printed from PHP!";
        ?>
    </p>

    <!-- Sample 3 -->
    <!-- <p style="color:#FF0000";>This is a red text!</p> -->
    <p <?='style="color:#FF0000;"'?> >Sample 3: This is a red text!</p>


</body>
</html>

