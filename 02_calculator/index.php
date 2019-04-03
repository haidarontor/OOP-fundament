<?php 
include "function.php";
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the Second Numnber</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="calculate"> </td>
        </tr>
    </table>
</form>
<?php 
if (isset($_POST['calculation'])) {
    $numone = $_POST['num1'];
    $numtwo = $_POST['num2'];
    if (empty($numone) or empty($numtwo)) {
        echo "<span style='color:red'> Field must not be empty !!</span>";
    } else {
        $calculationobject = new Calculator;
        $calculationobject->add($numone, $numtwo);
        $calculationobject->sub($numone, $numtwo);
        $calculationobject->mul($numone, $numtwo);
        $calculationobject->div($numone, $numtwo);
        $calculationobject->rem($numone, $numtwo);
    }
}
?> 