
<form action="zadatak3.php" method="post">
    <input type="radio" id="white" name="color" value="white">
    <label for="white">White</label><br>
    <input type="radio" id="black" name="color" value="black">
    <label for="black">Black</label><br>
    <input type="radio" id="red" name="color" value="red">
    <label for="red">Red</label><br>
    <input type="radio" id="blue" name="color" value="blue">
    <label for="blue">Blue</label><br>
    <input type="radio" id="green" name="color" value="green">
    <label for="green">Green</label><br>
    <input type="radio" id="yellow" name="color" value="yellow">
    <label for="yellow">Yellow</label><br>

    <button name="potvrda">Submit</button>
</form>


<?php

if(isset($_POST["potvrda"]))
{
$odabir=$_POST["color"];
echo "my favorite color is $odabir";
}
?>