<DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<p>Anzeige der Personen mit dem Gehalt zwischen:</p>
<p><input name="ug"> Untergrenze</p>
<p><input type="submit"></p>

<?php
    $con = mysqli_connect("", "root", "", "firma");

    $sql = "SELECT * FROM personen" . " WHERE gehalt >= 3000 AND gehalt <= 3700" . " ORDER BY gehalt DESC";
    $res = mysqli_query($con, $sql);
    $num = mysqli_num_rows($res);
    

?>
</body></html>