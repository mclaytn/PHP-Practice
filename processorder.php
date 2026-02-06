<?php
$tireqty = $_POST ['tireqty'];
$oilqty = $_POST ['oilqty'];
$sparkqty = $_POST ['sparkqty'];
echo '<p>Your order is as follows: </p>';
echo htmlspecialchars($tireqty). 'tires'.'<br/>';
echo htmlspecialchars($oilqty). 'oil'.'<br/>';
echo htmlspecialchars($sparkqty). 'spark plugs'. '<br/>';
?>
