<?php
$students=[
    ['name'=>'ahmed','result'=>54],
    ['name'=>'hossam','result'=>89],
    ['name'=>'sara','result'=>78],
    ['name'=>'medhat','result'=>35],
];

?>
<style>
    table,td,th{
        border: 1px solid #333;
    }
    table{
        border-collapse: collapse;
        width: 100%;
    }
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Result</th>
        <th>Grade</th>
    </tr>
<?php foreach ($students as $student){ ?>

    <tr>
        <th><?= $student['name'] ?></th>
        <th><?= $student['result'] ?></th>
        <th>
            <?php
            if($student['result'] >= 85){
                echo '<span style="color:blue">A</span>';
            }elseif($student['result'] >= 75){
                echo '<span style="color:orange">B</span>';
            }elseif($student['result'] >= 65){
                echo '<span style="color:brown">C</span>';
            }elseif($student['result'] >= 50){
                echo '<span style="color:green">D</span>';
            }else{
                echo '<span style="color:red">F</span>';
            }
            ?>
        </th>
    </tr>
<?php } ?>
</table>
