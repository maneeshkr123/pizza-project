<?php
if(isset($_POST['btn']))
{
	$icode=$_POST['code'];
	$units=$_POST['units'];
	$size=$_POST['size'];
$tprice=0;
if($size=="Small")
{
switch($icode)
{
	case 'M1':
	$tprice=$units*199;
	break;
	case 'M2':
	$tprice=$units*199;
	break;
	case 'M3':
	$tprice=$units*199;
	break;
	case 'M4':
	$tprice=$units*199;
	break;
	case 'M5':
	$tprice=$units*199;
	break;
	case 'D1':
	$tprice=$units*199;
	break;
	case 'D2':
	$tprice=$units*199;
	break;
	case 'D3':
	$tprice=$units*199;
	break;
	case 'D4':
	$tprice=$units*199;
	break;
	case 'D5':
	$tprice=$units*199;
	break;
	case 'P1':
	$tprice=$units*199;
	break;
	case 'P2':
	$tprice=$units*199;
	break;
	case 'P3':
	$tprice=$units*199;
	break;
	case 'P4':
	$tprice=$units*199;
	break;
	case 'P5':
	$tprice=$units*199;
	break;
}
	}
	if($size=="Medium")
{
switch($icode)
{
	case 'M1':
	$tprice=$units*259;
	break;
	case 'M2':
	$tprice=$units*259;
	break;
	case 'M3':
	$tprice=$units*259;
	break;
	case 'M4':
	$tprice=$units*259;
	break;
	case 'M5':
	$tprice=$units*259;
	break;
	case 'D1':
	$tprice=$units*259;
	break;
	case 'D2':
	$tprice=$units*259;
	break;
	case 'D3':
	$tprice=$units*259;
	break;
	case 'D4':
	$tprice=$units*259;
	break;
	case 'D5':
	$tprice=$units*259;
	break;
	case 'P1':
	$tprice=$units*259;
	break;
	case 'P2':
	$tprice=$units*259;
	break;
	case 'P3':
	$tprice=$units*259;
	break;
	case 'P4':
	$tprice=$units*259;
	break;
	case 'P5':
	$tprice=$units*259;
	break;
}
	}
	if($size=="Large")
{
switch($icode)
{
	case 'M1':
	$tprice=$units*499;
	break;
	case 'M2':
	$tprice=$units*499;
	break;
	case 'M3':
	$tprice=$units*499;
	break;
	case 'M4':
	$tprice=$units*499;
	break;
	case 'M5':
	$tprice=$units*499;
	break;
	case 'D1':
	$tprice=$units*499;
	break;
	case 'D2':
	$tprice=$units*499;
	break;
	case 'D3':
	$tprice=$units*499;
	break;
	case 'D4':
	$tprice=$units*499;
	break;
	case 'D5':
	$tprice=$units*499;
	break;
	case 'P1':
	$tprice=$units*499;
	break;
	case 'P2':
	$tprice=$units*499;
	break;
	case 'P3':
	$tprice=$units*499;
	break;
	case 'P4':
	$tprice=$units*499;
	break;
	case 'P5':
	$tprice=$units*499;
	break;
}
	}
$srv="localhost";
$usr="root";
$psk="";
$db="onlinepurchase";
$con=Mysql_connect($srv,$usr,$psk);
$dat=mysql_select_db($db,$con);
if($dat)
{ 
$pinc=$_POST['pinc'];
	$order_no=rand(10000,90000);
	$icode=$_POST['code'];
	$name=$_POST['custname'];
	$mob=$_POST['mob'];
	$units=$_POST['units'];
	$add=$_POST['add'];
		$senddata=mysql_query("INSERT INTO `sales` (`item_code`, `customer_name`, `mobile_no`, `units`, `total_price`, `pincode`, `Address`, `order_no`,`Size`) VALUES('$icode','$name','$mob','$units','$tprice','$pinc','$add','$order_no','$size')");
		if($senddata)
		{	
		echo "<table border=4>";
		echo "<tr>"."<th>"."ITEMCODE"."</th>"."<th>"."CUSTOMER_NAME"."</th>"."<th>"."mobile_no"."</th>"."<th>"."NO_OF_ITEMS"."</th>"."<th>"."Pincode"."</th>"."<th>"."ADDRESS"."</th>"."<th>"."ORDER_no"."</th>"."<th>"."TOTALPRICE"."</th>"."</tr>";
		echo "<tr>"."<td>".$icode."</td>";
		echo "<td>".$name."</td>";
		echo "<td>".$mob."</td>";
		echo "<td>".$units."</td>";
		echo "<td>".$pinc."</td>";
		echo "<td>".$add."</td>";
		echo "<td>".$order_no."</td>";
		echo "<td>".$tprice."</td>"."</tr>";
		echo "</table>";
		}
	}
	}
?>