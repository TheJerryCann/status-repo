
<p>Alex Rea</p>
<ul>
    <li><a href="status1">Status 1</li>
    <li><a href="status2">Status 2</li>
    <li><a href="status3">Status 3</li>
    <li><a href="status4">Status 4</li>
    <li><a href="status5">Status 5</li>
    <li><a href="status6">Status 6</li>
    <li><a href="status7">Status 7</li>
    <li><a href="status8">Status 8</li>
    <li><a href="status9">Status 9</li>
    <li><a href="status10">Status 10</li>
</ul>
<?php
$file = basename($_SERVER['PHP_SELF']);
$mod_date=date("F d Y h:i:s A", filemtime($file));
echo "File last updated $mod_date ";
#cs.neit.edu/~amrea/SE266/site/
?>