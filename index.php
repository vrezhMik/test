<?php
$file = fopen("./data.txt", "r");
$data = fread($file, filesize("./data.txt"));
if ($data == "horney") {
  $img = $data . ".png";
} else {
  $img = $data . ".webp";
}
?>
<img src="<?= "./assets/" . $img ?>" alt="">
<form action="action.php" method="post">
    <input type="radio" name="mood" id="" value="horney">Take Me
    <input type="radio" name="mood" id="" value="great">Amazing
    <input type="radio" name="mood" id="" value="good">Good
    <input type="radio" name="mood" id="" value="normal">It's ok
    <input type="radio" name="mood" id="" value="bad">Bad
    <input type="radio" name="mood" id="" value="worse">Fuck Off
    <br>
    <input type="submit" value="Change the mood">
</form>
<style>
    img{
        height: 100px;
    }
</style>