
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
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

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
		<table class="customers">
		<tr>
			<th>Customer Name</th>
			<th>Time</th>
			<th>Paid</th>
			<th>Table Number</th>
		</tr>
		<?php foreach($customers as $customer) : ?>
		<tr>
			<td><a href="customer/<?php echo $customer['customer_id']; ?>"><?php echo $customer['name']; ?></a></td>
			<td><?php echo $customer['time']; ?></td>
			<td><?php echo $customer['payment']['pay_now']; ?></td>
			<td><?php echo (isset($customer['table']['table_number'])) ? '<a href="tables">Table' . $customer['table']['table_number'] . '</a>' : '<a href="customer/' .$customer["customer_id"] . '>Assign Table</a>'; ?></td>
		</tr>
		<? endforeach; ?>
		</table>
		</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>