<!DOCTYPE html>
<head><title>Samuel Palacios Bernate MD5 Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit
pin and check all 10,000 possible four digit PINs
to determine the PIN.</p>
<pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    $show = 15;

    // Iter from 0 to 9999 and use str_pad to
    // catch numbers from 0000 to 0999
    for($i=0; $i<=9999; $i++ ) {
        if ( $i <= 999 ) {
            $try = str_pad($i,4,"0",STR_PAD_LEFT);
        } else {
            $try = (string) $i;
        }
            // Run the hash and then check to see if we match
            $check = hash('md5', $try);
            if ( $check == $md5 ) {
                $goodtext = $try;
                break;   // Exit the inner loop
            }

            // Debug output until $show hits 0
            if ( $show > 0 ) {
                print "$check $try\n";
                $show = $show - 1;
            }
        
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>Original Text: <?= htmlentities($goodtext); ?></p>
<form method="get">
<input type="text" name="md5" size="40" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>
</body>
</html>

