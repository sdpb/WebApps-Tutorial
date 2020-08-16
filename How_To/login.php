<?php // Do not put any HTML above this line

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: login.php");
    return;
}

$failure = false;  // If we have no POST data

// Check to see if we have some POST data, if we do process it
if ( isset($_POST['who']) ) {
    if ( strlen($_POST['who']) < 1 ) {
        $failure = "Username is required";
    } else {
        // Redirect the browser to game.php
        header("Location: game.php?name=" . urlencode($_POST['who']));
        return;
    }
}
// Fall through into the View
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Samuel Palacios Bernate</title>
    </head>
    <body>
        <div class="container">
            <h1>Please Set an Username</h1>
            <?php
                // Note triple not equals and think how badly double
                // not equals would work here...
                if ( $failure !== false ) {
                    // Look closely at the use of single and double quotes
                    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
                }
            ?>
            <form method="POST">
            <label for="nam">Username</label>
                <input type="text" name="who" id="nam"><br/>
                <input type="submit" value="Set username">
                <input type="submit" name="cancel" value="Cancel">
            </form>
        </div>
    </body>
</html>