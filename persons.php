<?php
$persons=[
    ["name"=>'ahmed','age'=>23,'color'=>'red'],
    ["name"=>'mohamed','age'=>43,'color'=>'blue'],
    ["name"=>'sara','age'=>18,'color'=>'pink'],
    ["name"=>'mosaad','age'=>73,'color'=>'orange']
];


foreach ($persons as $person){ ?>
<h1 style="color:<?= $person['color']; ?>"><?= $person['name']; ?></h1>
<h2><?= $person['age']; ?></h2>

<?php
}
?>