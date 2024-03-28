<?php
$products=array(

    'paper' => array(

        'copier' =>"Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'Laser' => "Laser Printer",
        'photo' => "Photographic Paper"),

    'pens' => array(
        'ball' =>"Ball Point",
        'hilite' =>"Highlighters",
        'maker' =>"Makers"),

    'mics' =>array(
        'tape'=>"Sticky Tape",
        'glue' =>"Adhessives",
        'clips' =>"Paperclips",
    )
);

echo "<pre>";

foreach($products as $section => $items)
    foreach($items as $key => $value)
        echo"$section:\t$key\t($value)\n";

echo "</pre>";
?>