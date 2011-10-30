<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FARFAN</title>
    <link rel="stylesheet" href="/localhost/style.css">
</head>
<body>
<div id="content">
    <?php
// open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
  $dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//  count elements in array
$indexCount = count($dirArray);
$projectCount = count($dirArray) - 1;
Print ("<span>$projectCount Projects</span><br>\n");

// sort 'em
sort($dirArray);
// print 'em
    print('<ul class="list">');
    // loop through the array of files and print them all
    for($index=0; $index < $indexCount; $index++) {
            if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
        print("<li><a href=\"$dirArray[$index]\">$dirArray[$index]</a></li>");
      }
    }
    print("</ul>\n");
?>

</div>
</body>
</html>