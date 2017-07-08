<html>
<body>
 <form action="/action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname"><br>
    Last name:<br>
    <input type="text" name="lastname"><br><br>
    <fieldset>
    	<legend>Gender:</legend>
    	<input type="radio" name="gender" value="male"> Male <br>
  		<input type="radio" name="gender" value="female"> Female<br>
  		<input type="radio" name="gender" value="other"> Other <br>
    </fieldset>
  </fieldset>
</form> 

<!-- READ OUT CSV FILE -->
<!-- <?php
$row = 1;
if (($handle = fopen("LKFB.csv", "r")) !== FALSE) {
    while (($quest = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($quest);
        echo(<p> $num "Felder in Zeile" $row <br/></p>);
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $quest[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>  -->
<!-- https://www.php-einfach.de/experte/php-codebeispiele/loginscript/ -->

<!-- <?php
echo readfile("F:/Schmitz/Trainings-Seite/Page0908/Snippets/swls.txt");
?> -->

<!-- $myfile = fopen("swls.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("swls.txt"));
fclose($myfile); -->



<?php
$date = date("Y/m/d");
$tab = array($date, $firstname, $lastname, $gender);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tab = test_input($_POST["tab"]);
}

echo "First Name:" $tab[0][0].", Lat Name: ".$tab[0][1].", Gender: ".$tab[0][2].".<br>";

?>




    <input type="submit" value="Submit">

<ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>

 <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>
</body>
</html>