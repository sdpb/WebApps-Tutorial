<?php
require_once "matrix.php";
// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1 ) {
    die('Username parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: login.php');
    return;
}

$m1_1 = isset($_POST["1_1"]) ? $_POST["1_1"] : (int) 0;
$m1_2 = isset($_POST["1_2"]) ? $_POST["1_2"] : (int) 0;
$m1_3 = isset($_POST["1_3"]) ? $_POST["1_3"] : (int) 0;

$m2_1 = isset($_POST["2_1"]) ? $_POST["2_1"] : (int) 0;
$m2_2 = isset($_POST["2_2"]) ? $_POST["2_2"] : (int) 0;
$m2_3 = isset($_POST["2_3"]) ? $_POST["2_3"] : (int) 0;

$m3_1 = isset($_POST["3_1"]) ? $_POST["3_1"] : (int) 0;
$m3_2 = isset($_POST["3_2"]) ? $_POST["3_2"] : (int) 0;
$m3_3 = isset($_POST["3_3"]) ? $_POST["3_3"] : (int) 0;

$matrix = [
    [$m1_1, $m1_2, $m1_3],
    [$m2_1, $m2_2, $m2_3],
    [$m3_1, $m3_2, $m3_3]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Samuel Palacios Bernate</title>
</head>
    <body>
        <div class="container">
        <h1>Matrix determinant calculator</h1>
        <?php
        if ( isset($_REQUEST['name']) ) {
            echo "<p>Welcome: ";
            echo htmlentities($_REQUEST['name']);
            echo "</p>\n";
        }
        ?>

        <form method="post">
            <table>
                <tr>
                    <td><label><input type="text" name="1_1" size="7" maxlength="10" value="0"></label></td>
                    <td><label><input type="text" name="1_2" size="7" maxlength="10" value="0"></label></td>
                    <td><label><input type="text" name="1_3" size="7" maxlength="10" value="0"></label></td>
                </tr>
                <tr>
                    <td><label><input type="text" name="2_1" size="7" maxlength="10" value="0"></label></td>
                    <td><label><input type="text" name="2_2" size="7" maxlength="10" value="0"></label></td>
                    <td><label><input type="text" name="2_3" size="7" maxlength="10" value="0"></label></td>
                </tr>
                <tr>
                    <td><label><input type="text" name="3_1" size="7" maxlength="10" value="0"></label></td>
                    <td><label><input type="text" name="3_2" size="7" maxlength="10" value="0"></label></td>
                    <td><label><input type="text" name="3_3" size="7" maxlength="10" value="0"></label></td>
                </tr>
            </table>

            <br>
            <br>

            <label>
                <select name="operation">
                    <option value="-1">Select one</option>
                    <option value="0">Determinant</option>
                    <option value="1">Scalar multiplication</option>
                </select>
                <label>Scalar<input type="text" name="scalar" value="0"></label>
            </label>
            <input type="submit" name="calculate" value="Calculate">
            <input type="submit" name="logout" value="Logout">
        </form>
        <pre>
        <?php
            if ( isset($_REQUEST['scalar']) && isset($_REQUEST['operation']) && $_REQUEST['operation'] === "1" && is_numeric($_REQUEST['scalar'])) {
                $matrix = scalar_multiply($matrix, $_REQUEST['scalar']);
            }
            if ( isset($_POST["operation"]) && $_POST['operation'] === "0") {
                echo "Determinant: " . determinant($matrix);
            }
            print_matrix($matrix);
        ?>
        </pre>
        </div>
    </body>
</html>
