<?php 
include('src/header.html');
?>

<html>
    <head>
        <title>
            Hauptseite
        </title>
        <style>
        td{
            text-align:center;
        }

        </style>
    </head>
    <body>

        <h1 align="center">Notizen der Programmiersprachen</h1>
        <h3>von Raphael Wäspi</h3>
        <br /><br />

        <!--Tabelle-->
        <table align="center" border="1" width="95%" cellpadding="5px">
            <tr>
                <th width="33%">Bild</th> 
                <th width="33%">Sprache</th>
                <th width="33%">Link</th> 
            </tr>
            <tr>
                <td><a href="sides/html_css.php"><img src="pic/html_css.png" align="center" height="300";/></a></td>
                <td>HTML / CSS / JavaScript</td>
                <td><a href="sides/html_css.php">Link zum HTML/CSS Tutorial</a></td>
            </tr>
            <tr>
                <td><a href="sides/php.php"><img src="pic/php-leader.png" align="center" height="300";/></a></td>
                <td>PHP</td>
                <td><a href="sides/php.php">Link zum PHP Tutorial</a><td>
            </tr>
            <tr>
                <td><a href="sides/python.php"><img src="pic/python3.jpg" align="center" height="300";/></a></td>
                <td>Python</td>
                <td><a href="sides/python.php">Link zum Python Tutorial</a><td>
            </tr>
            <tr>
                <td><a href="sides/git.php"><img src="pic/gitlogo.png" align="center" height="300";/></a></td>
                <td>Git</td>
                <td><a href="sides/git.php">Link zum Git Tutorial</a><td>
            </tr>
        </table>

    </body>
</html>