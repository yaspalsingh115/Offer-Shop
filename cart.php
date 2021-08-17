<?php
require './includes/common.php';
// check if logged in
if (!isset($_SESSION["email"])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <?php
    require './includes/header.php';
    $user_id = $_SESSION["id"];
    $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    // this query is to get the address of user 
    $q = "SELECT * FROM users WHERE id='$user_id'";
    $qres = mysqli_query($con, $q) or die(mysqli_error($con));
    $qrow = mysqli_fetch_array($qres);

    if (mysqli_num_rows($result) == 0) {
        if (isset($_GET["removed"])) {
            echo '
                                    <div id="content1">
                                        <div class="container">
                                            <div class="alert alert-success">
                                            ' . $_GET['removed'] . ' </b>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="alert alert-danger">
                                                Before order, add some products to the cart. Go to <a href="home.php">Products</a> page.</h4>
                                            </div>
                                        </div>
                                    </div>';
        } else {
            echo '<div id="content1">
                                            <div class="container">
                                                <div class="alert alert-danger">
                                                    Add products to the cart first. Go to <a href="home.php">Products</a> page.</h4>
                                                </div>
                                            </div>
                                        </div>';
        }
    } else {
        $total = 0;
    ?>

        <!-- cart table  -->
        <div id="content1" class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Shipping Address</th>
                                <th></th>
                            </tr>
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td class="product-id"><?php echo $row["id"] ?></td>
                                    <td class="product-name orange"><?php echo $row["name"] ?></td>
                                    <td class="product-price">&#8377; <?php $total += $row["price"];
                                                                        echo $row["price"] ?></td>
                                    <td class="ship-address" contenteditable="true"><?php echo $qrow["address"] ?></td>
                                    <td class="text-center"><a href="cart-remove.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-trash red-strike"></span></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="green">Total: &#8377; <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                                <td></td>
                                <td class="text-center"><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
    <?php
    }
    require './includes/footer.php';
    ?>

</body>

</html>