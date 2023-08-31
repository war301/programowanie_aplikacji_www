<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Arkadiusz Kulesza" />
    <link href='../stronahtml/css/style_prod.css' type='text/css' rel='stylesheet' />
    <title>ta zakładka</title>
	<script src="../stronahtml/js/kolorujtło.js" type="text/javascript"></script>
    <script src="../stronahtml/js/timedata.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<BODY>
<div >
<h1>KOSZYK:</h1>

<a id="przycisk" href="koszyk.php?action=empty">Wyczyść koszyk</a>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Nazwa</th>
<th style="text-align:left;">Kod</th>
<th style="text-align:right;" width="5%">Ilość</th>
<th style="text-align:right;" width="10%">Cena od sztuki</th>
<th style="text-align:right;" width="10%">Cena</th>
<th style="text-align:center;" width="5%">Usuń</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>"  /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo $item["price"]." zł"; ?></td>
				<td  style="text-align:right;"><?php echo number_format($item_price,2)." zł"; ?></td>
				<td style="text-align:center;"><a href="koszyk.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Usuń" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Suma:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo number_format($total_price, 2)." zł"; ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div>Twój koszyk jest pusty.</div>
<?php 
}
?>
</div>

<div id="product-grid">
	<h1 class="txt-heading">Produkty</h1>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="flexbox-conteiner">
			<form method="post" action="koszyk.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div ><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div ><?php echo $product_array[$key]["name"]; ?></div>
			<div ><?php echo $product_array[$key]["price"]."zł"; ?></div>
			<div ><input type="text" class="przycisk" name="quantity" value="1" size="2" /><input type="submit" value="Dodaj do koszyka" class="przycisk" /></div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</BODY>
</HTML>