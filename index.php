<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<ul>
    <li><a href="status1.html">Status 1</li>
    <li><a href="status2.html">Status 2</li>
    <li><a href="status3.html">Status 3</li>
    <li><a href="status4.html">Status 4</li>
    <li><a href="status5.html">Status 5</li>
    <li><a href="status7.html">Status 7</li>
    <li><a href="status8.html">Status 8</li>
    <li><a href="status9.html">Status 9</li>
    <li><a href="status10.html">Status 10</li>
    <a href="https://github.com/TheJerryCann/status-repo"><i class="fa-brands fa-github"></i></a>
</ul>
<?php
$file = basename($_SERVER['PHP_SELF']);
$mod_date=date("F d Y h:i:s A", filemtime($file));
echo "File last updated $mod_date ";
#cs.neit.edu/~amrea/SE266/site/
?>