/*
 * Description: Retrieve file directory from University server for custom landing page
 * Author: Amanda Anderson
 * Date: 2019-01-20
 */

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Server File Directory</title>

    <link rel="icon" href="landing_page/images/icon.png">
    <link rel="stylesheet" href="landing_page/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
    <h1 id="title">Amanda <span style="color: rgb(250, 121, 164);">|</span> Turing Directory</h1>
    <button class="btn-pink" onclick="displayDirectory('3306')">COSC 3306</button>
    <button class="btn-pink" onclick="displayDirectory('3407')">COSC 3407</button>
    <button class="btn-pink" onclick="displayDirectory('')">Full Listing</button>
    <br>
    <div id="link-div"></div>

    <?php include('landing_page/php-scripts/dir.php');?>

    <script>

    // Filter paths and display
    function displayDirectory(folder) {

        var str = "";

        for (index = 0; index < dir.length; ++index) {
            if (dir[index].endsWith('.</a>') || dir[index].indexOf(folder) == -1) {
                continue;
            }
        str += (dir[index]) + "<br><br>";
        }

        $("#link-div").html(str);
    }

    </script>`
</body>
</html>