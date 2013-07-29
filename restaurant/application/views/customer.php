
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../stylesheets/base.css">
	<link rel="stylesheet" href="../stylesheets/skeleton.css">
	<link rel="stylesheet" href="../stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
		<table class="customer">
		<tr>
			<td>Name</td>
			<td><?php echo $customer['name']; ?></td>
		</tr>
		
		<tr>
			<td><strong>Order</strong></td>
			<td></td>
		</tr>
		
		<tr>
			<td>Meal</td>
			<td><?php echo $customer['meal']; ?></td>
		</tr>
		
		<tr>
			<td>Drinks</td>
			<td><?php echo $customer['drinks']; ?></td>
		</tr>
		
		<tr>
			<td>Special Instructions</td>
			<td><?php echo $customer['special_instructions']; ?></td>
		</tr>
		
		<tr>
			<td>Time</td>
			<td><?php echo $customer['time']; ?></td>
		</tr>
		
		<tr>
			<td><strong>Paid</strong></td>
			<td></td>
		</tr>
		
		<tr>
			<td>CC Type</td>
			<td><?php echo $customer['payment']['cc_type']; ?></td>
		</tr>
		
		<tr>
			<td>CC Number</td>
			<td><?php echo $customer['payment']['cc_number']; ?></td>
		</tr>
		
		<tr>
			<td>CC Month</td>
			<td><?php echo $customer['payment']['cc_month']; ?></td>
		</tr>
		
		<tr>
			<td>CC Year</td>
			<td><?php echo $customer['payment']['cc_year']; ?></td>
		</tr>
		
		<tr>
			<td>Paid</td>
			<td><?php echo $customer['payment']['pay_now']; ?></td>
		</tr>
		</table>
		
		<form action="../customer/submit" method="post">
		<table class="customer">
		<tr>
			<td><label for="table_number">Table Number</label></td>
			<td>
			
  <select id="table_number" name="table_number">
    <option value="1"<?php echo (@$customer['table']['table_number'] == '1') ? 'selected="selected"' : ''; ?>>Table 1</option>
    <option value="2"<?php echo (@$customer['table']['table_number'] == '2') ? 'selected="selected"' : ''; ?>>Table 2</option>
    <option value="3"<?php echo (@$customer['table']['table_number'] == '3') ? 'selected="selected"' : ''; ?>>Table 3</option>
    <option value="4"<?php echo (@$customer['table']['table_number'] == '4') ? 'selected="selected"' : ''; ?>>Table 4</option>
    <option value="5"<?php echo (@$customer['table']['table_number'] == '5') ? 'selected="selected"' : ''; ?>>Table 5</option>
    <option value="6"<?php echo (@$customer['table']['table_number'] == '6') ? 'selected="selected"' : ''; ?>>Table 6</option>
    <option value="7"<?php echo (@$customer['table']['table_number'] == '7') ? 'selected="selected"' : ''; ?>>Table 7</option>
    <option value="8"<?php echo (@$customer['table']['table_number'] == '8') ? 'selected="selected"' : ''; ?>>Table 8</option>
    <option value="9"<?php echo (@$customer['table']['table_number'] == '9') ? 'selected="selected"' : ''; ?>>Table 9</option>
    <option value="10"<?php echo (@$customer['table']['table_number'] == '10') ? 'selected="selected"' : ''; ?>>Table 10</option>
    <option value="11"<?php echo (@$customer['table']['table_number'] == '11') ? 'selected="selected"' : ''; ?>>Table 11</option>
    <option value="12"<?php echo (@$customer['table']['table_number'] == '12') ? 'selected="selected"' : ''; ?>>Table 12</option>
  </select></td>
		</tr>
		</table>
		<input name="customer_id" type="hidden" value="<?php echo $customer['customer_id']; ?>"/>
		<button type="submit">Update</button>
		</form>
		</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>