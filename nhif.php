
<?php
	$basicpay = 40000;
    $nssf = 200; //national social security insurance fund
	$nhif = 400; //national health insurance fund

	function pension(){
		global $basicpay;	//the variable will be able to access the initialisation
		$rate = 5;
		$pension = ($rate/100)*$basicpay;
		return $pension;
	}
	
	$totaldeductions=$nssf+$nhif+pension();		//total deductions from the salary
	
	echo $totaldeductions;
?>
