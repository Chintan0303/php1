<?php include('header.php') ?>


<?php if ($_SESSION['cartitems']['cart1']=='' &&
$_SESSION['cartitems']['cart2']=='' &&
$_SESSION['cartitems']['cart3']==''&&
$_SESSION['cartitems']['cart4']==''&&
$_SESSION['cartitems']['cart5']==''
) {

    echo "<h3>Sorry no items added</h3>";

}  else {
    ?>
    <div class="container">
<h2>Cart Items</h2>


<form method="post">
    <ul>
        <li> <?php echo $_SESSION['cartitems']['cart1'] ?></li>
        <li> <?php echo $_SESSION['cartitems']['cart2'] ?></li>
        <li> <?php echo $_SESSION['cartitems']['cart3'] ?></li>
        <li> <?php echo $_SESSION['cartitems']['cart4'] ?></li>
        <li> <?php echo $_SESSION['cartitems']['cart5'] ?></li>
    </ul>
</form>

</div>
    <?php
}
?>


</body>
</html>