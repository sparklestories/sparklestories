<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style>
	body {
		font-family: 'Bitter', serif;
	}

	.data {
		margin: 300px auto 0;
		width: 960px;
	}
</style>
</head>
<body>

<div class="data">
<?php
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(-1);

require_once('vendor/autoload.php');
use Bigcommerce\Api\Client as Bigcommerce;

Bigcommerce::configure(array(
    'store_url' => 'https://store-zm0qhx.mybigcommerce.com',
    'username'  => 'sparklestories',
    'api_key'   => '07f0ce7c145a0f462e220bbc4ead8d4fb66b1711'
));

$filter = $filter = array("category" => 17, "limit" => 200);
$product = Bigcommerce::getProducts($filter);
echo var_dump($product);
echo $product->name;
echo $product->price;

if($_GET) {
	$queryStr = $_SERVER['QUERY_STRING'];
	parse_str($queryStr, $queryArr);
	$queryArr['want']($queryArr['num']);
} else {
	print "what do you want?";
}

function products() {
	$products = Bigcommerce::getProducts();
	// print_r($products);
	// foreach ($products as $product) {
	// 	echo $product->name . '<br>';
	// 	echo $product->price . '<br><br>';
	// }
}

function product($num) {
	printName('Product');
	$product = Bigcommerce::getProduct($num);
	echo $product->name . '<br>';
	echo $product->price . '<br><br>';
}

function printName($s) {
	print '<h1>' . $s . '</h1>';
}


?>
</div>

</body>
</html>