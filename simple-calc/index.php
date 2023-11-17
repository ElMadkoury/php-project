<?php
$sum = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (float) $_POST["num1"];
    $num2 = (float) $_POST["num2"];
    $opr = $_POST["opperation"];

    switch ($opr) {
        case '+':
            $sum = $num1 + $num2;
            break;
        case '-':
            $sum = $num1 - $num2;
            break;
        case 'x':
            $sum = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $sum = $num1 / $num2;
            } else {
                $sum = "Cannot divide by zero";
            }
            break;
        default:
            $sum = "Invalid operator";
    }

    
}
?>
<div class="container" style="display:flex;justify-content:center;align-items:center;height:100%">
    <form action="" method="post">
        <input type="text" name="num1" placeholder="input the first number"><br>
        <input type="text" name="opperation" placeholder="choose the operator + - / x"><br>
        <input type="text" name="num2" placeholder="input the second number"><br>
        <button type="submit">submit</button>
        <?php echo "= " . $sum ?>
    </form>
</div>