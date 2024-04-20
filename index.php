<!DOCTYPE html>
<html>
<head>
<title>firecable Music HTML music database and downloader. [LAN]</title>
<link rel="icon" type="image/x-icon" href="/crap/favicon.png">

<style>
table {
  border-collapse: collapse;
  border: 1px solid black;
  background-color: lightgrey;
  font-family: "Arial";
}

tr {
  border-bottom: 2px groove white;
}

img {

  image-rendering: pixelated;
}

td {
  padding: 1px 4px 1px 4px;
  border-right: 1px solid grey;
}

header {
  background-color: lightblue;
}
body {
  margin: 0px;
  background-color: lightyellow;
}
.morons {
  font-weight: bold;
}
.sticky {
  position: sticky;
}
.relative {
  font-family: Times New Roman;
  position: absolute;
  top: 60px;
  right: 0px;
  width: 250px;
  border: 3px solid #73AD21;
  background-color: white;
  z-index: -1;
}
</style>
</head>
<body>
<header class="sticky" style="top: 0px;">
<img src="crap/banner.png"/>
<img src="crap/favicon.png" height="60px" style="float: right;"/>
</header>
<div class="relative">
<h1>firecable music</h1><hr>
<p>Music database and downloader.</p>
<h2>Step 1</h2>
<p>Upload your music by clicking on the Upload Music button.</p>
<h2>Step 2</h2>
<p>Index your music by clicking on the Index Music button.</p>
<h2>Step 3</h2>
<p>Look at your song added to the list!</p>
</div>
<table>
<tbody>
<tr class="sticky" style="top: 60px; background-color: white;"><td class="morons">Artist</td><td class="morons">Track</td><td class="morons">Album</td><td class="morons">Download</td></tr>
<?php
// (A) OPEN CSV FILE
$stream = fopen("data.csv", "r");

// (B) EXTRACT ROWS & COLS
while (($row = fgetcsv($stream)) !== false) {
    echo "<tr>";
    foreach ($row as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

// (C) CLOSE CSV FILE
fclose($stream);
?>
</tbody>
</table>

</body>
</html>