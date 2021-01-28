<?php
// If the user clicked the add to cart button on the product page we can check for the form data
// echo 1;

include("../dbconnection.php");

// echo $_POST['name'];
if (isset($_POST['product_id'], $_POST['quantity'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $subtotal = $_POST['subtotal'];
    $id = $_SESSION['id'];

    // Set the post variables so we easily identify them, also make sure they are integer
    
    mysqli_query($con,"INSERT INTO `cart`(`id`, `user_id`, `product_id`, `name`, `price`, `quantity`, `subtotal`) VALUES (NULL,'$id','$productId','$name','$price','$quantity','$subtotal')");
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    $_SESSION['cart{$productId}'] = $productId;
    echo $product_id;
    // Prepare the SQL statement, we basically are checking if the product exists in our database
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    
    echo $_GET;
    if(isset($_GET['mc'])) {
    echo 1;
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}

// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}


// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: index.php?page=placeorder');
    exit;
}

// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
If(isset($_POST['submit'])) {

   // $stmt = $db->prepare("INSERT INTO order (id,name,price,quantity,subtotal)
   // VALUES ('$product[id]','$product[name]','$product[price]','$product[quantity]','subtotal')");
}
if(isset($_GET['status'])) {

    foreach ($products as $product) {
      
        // $_SESSION['msg']="Successfully made an order with us";
        // $stmt = $pdo->prepare("INSERT INTO order (id,name,price,quantity,subtotal) 
//    VALUES (:id,:name,:price,:quantity,:subtotal)");
   $id = $product['id'];
   $name = $product['name'];
   $desc= $product['desc'];
   $price = $product['price'];
   $quantity = $product['quantity'];
   $uid = $_SESSION['id'];
   $user_email =$_SESSION['login'];

//    mysqli_query($con,"insert into order(id,name,price,quantity,subtotal) values('$id','$name','$price','$quantity','$subtotal')");
   mysqli_query($con,"INSERT INTO `order`(`id`, `uid`, `user_email`, `product_id`, `name`, `desc`, `price`, `quantity`, `subtotal`) VALUES (NULL,'$uid','$user_email','$id','$name','$desc','$price','$quantity','$subtotal')");
   //INSERT INTO `order`(`id`, `uid`, `product_id`, `name`, `desc`, `price`, `quantity`, `subtotal`) VALUES (NULL,'$uid','$id','$name','$desc','$price','$quantity','$subtotal');
   mysqli_query($con,"DELETE FROM `cart` WHERE `product_id`=$id AND `user_id` = $uid");
   
   
}
$subtotal = 0.00;
$products = array();
unset($_SESSION['cart']);
    }
$fields = array("live"=> "0",
"oid"=> "112",
"inv"=> "112020102292999",
"ttl"=> "$subtotal",
"tel"=> "0700583879",
"eml"=> "kikiruidenis@gmail.com",
"vid"=> "demo",
"curr"=> "KES",
"p1"=> "airtel",
"p2"=> "020102292999",
"p3"=> "",
"p4"=> "900",
"cbk"=> "http://localhost/CRM_Project/product?page=cart",
"cst"=> "1",
"crl"=> "2"
);

$datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['p1'].$fields['p2'].$fields['p3'].$fields['p4'].$fields['cbk'].$fields['cst'].$fields['crl'];
$hashkey ="demoCHANGED";//use "demoCHANGED" for testing where vid is set to "demo"

$generated_hash = hash_hmac('sha1',$datastring , $hashkey);
?>

<?=template_header('Cart')?>

<div class="cart content-wrapper">
    <h1>Shopping Cart</h1>
    <form action="https://payments.ipayafrica.com/v3/ke" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="imgs/<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Remove</a>
                    </td>
                    <td class="price">&dollar;<?=$product['price']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">&dollar;<?=$product['price'] * $products_in_cart[$product['id']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
        <div class="buttons">
            <FORM action="https://localhost/CRM_Project/product?page=orders" metod='POST'>
            <input type="submit" value="Make Payment" name="Make PAyment">
            </FORM>
            <INPUT name="hsh" type="hidden" value="<?php echo $generated_hash ?>">
            <!-- <button type="submit">Make Payment</button> -->
            <?php  
                 foreach ($fields as $key => $value) {
                    //  echo $key;
                     //  echo ' :<input name="\'.$key.\'" type="text" value="\'.$value.\'"></br>';
                     echo '<input type="hidden" name="'.$key.'" value="'.$value.'"></br>';                     
                    }
                    ?>

http://localhost/CRM_Project/product/?page=products&status=aei7p7yrx4ae34&txncd=757118850812&msisdn_id=JOHN+DOE&msisdn_idnum=0700583879&p1=airtel&p2=020102292999&p3=&p4=900&uyt=195172763&agt=1930482332&qwh=1880952879&ifd=1223602478&afd=755997815&poi=257479690&id=112&ivm=112&mc=69.99&channel=MPESA
            
            <!-- <input value="Make Payment" type="submit" name="Make Payment" class="btn btn-primary pull-right">
                                   -->
        </div>
    </form>
</div>


