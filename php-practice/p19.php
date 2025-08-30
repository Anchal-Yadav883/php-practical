<?php
$name = "XYZ";
$subjects = [
    "Sub1" => 40,
    "Sub2" => 30,
    "Sub3" => 45,
    "Sub4" => 48,
    "Sub5" => 34
];

$maxMarks = 50;
$totalMax = count($subjects) * $maxMarks;
$totalObtained = array_sum($subjects);
$percentage = ($totalObtained / $totalMax) * 100;

// Result
if($percentage >= 75){
    $result = "Passed with Distinction";
} elseif($percentage >= 33){
    $result = "Passed";
} else {
    $result = "Failed";
}
?>

<html>
<head>
    <title>Marksheet</title>
</head>
<body border="1">
    <h2>Name : <?php echo $name; ?></h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
        </tr>
        <?php
        foreach($subjects as $sub=>$marks){
            echo "<tr>
                    <td>$sub</td>
                    <td>$maxMarks</td>
                    <td>$marks</td>
                  </tr>";
        }
        ?>
        <tr>
            <td><b>Total</b></td>
            <td><?php echo $totalMax; ?></td>
            <td><?php echo $totalObtained; ?></td>
        </tr>
        <tr>
            <td><b>Percentage</b></td>
            <td colspan="2"><?php echo number_format($percentage,2); ?> %</td>
        </tr>
        <tr>
            <td><b>Result</b></td>
            <td colspan="2"><?php echo $result; ?></td>
        </tr>
    </table>
</body>
</html>