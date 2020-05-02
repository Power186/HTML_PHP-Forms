<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data HTML Forms</title>
    <link rel="stylesheet" href="basic.css">
</head>
<body>
    <h1>HTML Forms</h1>
    <p>PHP script uses the HTML Forms</p>
    <hr>
    <?php
        $firstname = $_POST['firstname'];
        $position = $_POST['position'];
        $comments = $_POST['comments'];
        $etype = $_POST['etype'];

        if (isset($_POST['BA']))
        {
            $BA = $_POST['BA'];
        } else {
            $BA = "";
        }

        if (isset($_POST['BS']))
        {
            $BS = $_POST['BS'];
        } else {
            $BS = "";
        }

        if (isset($_POST['MS']))
        {
            $MS = $_POST['MS'];
        } else {
            $MS = "";
        }

        if (isset($_POST['PhD']))
        {
            $PhD = $_POST['PhD'];
        } else {
            $PhD = "";
        }

        echo "<p>You are <span class='textblue'> $firstname</span> and ";
        echo "your role at the college is: <span class='textblue'> ";
        echo "$position </span></p>";
        echo "Status: ";
        echo "<span class='textblue'> $etype </span>";
        echo "Degrees selected: ";
        echo "<span class='textblue'> $BA </span>";
        echo "<span class='textblue'> $BS </span>";
        echo "<span class='textblue'> $MS </span>";
        echo "<span class='textblue'> $PhD </span>";
        echo "<p>Your comments logged are: </p>";
        echo "<textarea name='comments' rows='5' cols='25' disabled='disabled' class='textdisabled'>";
        echo $comments;
        echo "</textarea>";
    ?>

</body>
</html>