<!DOCTYPE HTML!>
<html>
<head>
	<title>harjutus - 7 tsüklid</title>
	<meta charset="UTF-8">
	<style>.contact{
			border:solid black 1px;
			background: pink;
		}
    </style>
</head>
<body>
	<h1>While tsükkel</h1>
		<?php
    $count = 1;
    while ($count <= 10) {
        echo $count;
        $count += 1;
    }
?><br>
<?php
    $count = 1;
    while ($count <= 100) {
        echo $count . ', ';
        $count += 1;
    }
?><br>
<?php
    $count = 100;
    while ($count <= 1000) {
        echo $count . ', ';
        $count += 100;
    }
?>
		<h3>Infinite while loop</h3>
		 <?php
    /* $count = 1;
    while ($count <= 10) {
        echo $count;
    }
*/?>
<?php
    $count = 1;
    $number = 10;
    while ($count < 10) {
        while ($number > 0) {
            echo $number;
            $number -= 1;
        }
        $count += 1;
    }
?><br>
<?php
    $count = 0;
    while ($count < 15) {
        if ($count == 5) {
           // echo "<script>alert('Number viie kord');</script>";
        } else {
            echo $count;
        }
        $count += 1;
    }
?><br>
	<h3>Conditional statements in while loop</h3>
		<?php
    $count = 0;
    while ($count < 10) {
        if ($count == 3) {
            echo 'kolm' . ' ';
        } 
        if ($count == 7) {
        	echo 'seitse' . ' ';
        }
        else {
            echo $count . ' ';
        }
        $count += 1;
    }
?><br>
	<h2>For loop</h2>
		<?php
    for ($count = 1; $count <= 20; $count += 2) {
        echo "Number {$count} on paaritu arv.<br>";
    }
?> 
	<?php
    for ($count = 2; $count <= 20; $count += 2) {
        echo "Number {$count} on paaris arv.<br>";
    }
?> 
	<?php
		$count = 2;
		echo $count % 2;
	?>
<h2>Foreach loop</h2>
	<?php
    $students = array("Marko", "Fränk", "Merili", "Merili", "Triinu", "Veronika", "Silja", "Kristi", "Markus", "Cärolin", "Heiko", "Ingrid", "Syret", "Mihkel", "Eve", "Anneli", "Ants", "Risto", "Marge", "Aile");
    foreach ($students as $student) {
        echo "Õpilase nimi on: {$student}<br>"; 
    }
?>
	<br>
	<?php
		$subjects = array('Serveripoolsete veebirakenduste programmeerimine', 'Veebitehnoloogiad', 'Veebiarendus', 'Sisuhaldussüsteemide kasutamine', '3D alused');
		$number = 1;
		foreach ($subjects as $subject) {
			echo "{$number}. {$subject}<br>";
			$number+=1;
		}
	?>
	<br>
	<?php
		$animals = array("elephant", "dog", "cat", "fox");
		$number = 1;
		foreach ($animals as $animal) {
			echo "{$number}. {$animal}<br>";
			$number+=1;
		}
	?>
	<br><br>
<table class="contact">
	<tbody>
<?php
    $contact = array(
        "first_name" => "Marko",
        "last_name" => "Aia",
       	"e-mail" => "marko.aia@khk.ee",
        "age" => 20
         );
    foreach ($contact as $attribute => $value ) {
    	$attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
        echo "<tr><td>{$attribute_formatted}</td> <td>{$value}<br><td></tr>";
    }
?>
</tbody>
</table>
</body>
</html>