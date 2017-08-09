<?php

echo $conn->connect_error;
if($conn->connect_errno)
{
echo "Error in connecting to database";
}


echo "<input type=\"text\" placeholder=\"Tester ID\" name=\"ID\">";
echo "<input type=\"submit\" value=\"Go\">";
echo "</form><br>";
$tester_id = isset($_POST['ID'])? $_POST['ID'] : '';
$isSearch = false;
if($tester_id!="") {
    $sql = "select * from users where id ='$tester_id'";
    $result = $conn->query($sql);
    $isSearch = true;


    if ($isSearch) {
        $rows = $result->fetch_assoc();
        if ($rows) {
            echo "<div class=\"output\"><b>Name : </b><span>" . $rows['Name'] . "</span><br>";
            echo "<b>Role : </b><span>" . $rows['Role'] . "</span><br>";
            echo "<b>Security Clearance : </b><span>" . $rows['Access'] . "</span><br></div>";
        } else {
            echo "<div class=\"err\"><b>Please Enter Correct ID :)</b></div>";
            die($conn->connect_error);
        }

    }

}
else
{
    echo "<div class=\"err\"><b>Please Enter Tester ID :)</b></div>";


}

?>


