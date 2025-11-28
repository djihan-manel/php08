<?php
$result = "";
if(isset($_POST["convert"])){
    $dz = floatval($_POST["dz"]);
    $rate = 0.0075; 
    $result = $dz * $rate;
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>محول العملات (DZD → USD)</h2>

<form method="post">
    مبلغ بالدينار: <input type="number" name="dz" required>
    <button name="convert">حوّل</button>
</form>

<?php if($result!=="") echo "<p>= $result دولار</p>"; ?>
</body>
</html>
