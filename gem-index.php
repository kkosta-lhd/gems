<?php
//require ('functions.php');

$gems =
    array (
        array(
            "name" => "diamond",
            "structure" => 'octahedral',
            "mohs" => '9',
            "color" => 'white',
            "image" => "https://en.wikipedia.org/wiki/Diamond#/media/File:Diamond.jpg"
        ),
        array (
            "name" => "ruby",
            "structure" => 'hexagonal',
            "mohs" => '10',
            "color" => 'red',
            "image" => "https://en.wikipedia.org/wiki/Ruby#/media/File:Ruby_gem.JPG"

        ),
        array (
            "name" => "emerald",
            "structure" => 'octahedral',
            "mohs" => '8',
            "color" => 'green',
            "image" => "https://en.wikipedia.org/wiki/Emerald#/media/File:Beryl_emeralds_cut_XH.jpg"

        ),
        array (
            "name" => "saphhire",
            "structure" => 'trigonal',
            "mohs" => '9',
            "color" => 'blue',
            "image" => "https://en.wikipedia.org/wiki/Sapphire#/media/File:Yogo2783_Close_crop.JPG"

        ),
    )

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Gemstone Arrays</title>
    <style>
        #gems {margin:0px;padding:0px;border: solid 1px #666;}
        #gems td {padding:10px;border: solid 1px #666;}
        #gems tr.bold {font-weight:bold;background-color: #72fffa;}
    </style>
</head>

<body>

<h1>Gemstones</h1>
<table id="gems" cellspacing="0">
    <tr class="bold">
        <td>Name</td>
        <td>Color</td>
        <td>Moh's</td>
        <td>Structure</td>
        <td>Image</td>

    </tr>
    <?php foreach($gems as $gem) {
        $n[]=$gem['mohs'];
        //the above statement creates an array by saving the moh's number as it loops through each array
        ?>
    <tr>
        <td><?php print $gem ["name"]; ?></td>
        <td><?php print $gem ["color"]; ?></td>
        <td><?php print $gem ["mohs"]; ?></td>
        <td><?php print $gem ["structure"]; ?></td>
        <td><a href ="<?php print $gem ["image"]; ?>">Photo of a <?php print $gem ["name"]; ?></a></td>

    </tr>
   <?php } ?>
</table>
<p>The hardness of the gems ranges from <?php print min($n); ?> to <?php print max($n); ?>.</p>
<p>The gems sorted alphabetically:</p>

<ul>
    <?php //sorts gem name alphabetically
    $gems = ['diamond', 'saphhire', 'ruby', 'emerald'];
    sort($gems);

    foreach ($gems as $gem) {
        echo "<li>$gem</li>";
    }
    ?>
</ul>

</body>
</html>
