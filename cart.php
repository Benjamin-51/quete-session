<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>

<?php if (!isset($_SESSION["login"]))
    {
        header("location:login.php");
    }
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $id => $amount) { ?>
            <p>
                <?php echo ($catalog[$id]['name'] . " => " . $amount)?>
            </p>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
