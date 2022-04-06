<?php
require("inc/db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;
try {
    //Select a product from DB
    $sql = "SELECT * FROM products WHERE id =  :id LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
} catch (Exception $e) {
    //throw an error message
    echo "Error" . $e->getMessage();
    exit();
}

if (!$stmt->rowCount()) {
    header("Location: index.php");
    exit();
}
$product = $stmt->fetch();
?>
<?php include("inc/header.php") ?>
<div class="container mt-2">
    <!-- Show a product -->
    <div class="card">
        <div class="card-header">
            <strong><?= $product['name'] ?></strong>
            <a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-light float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit item"><i class="fa fa-edit"></i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <div class="container">
                        <div class="row mb-3 text-bold">
                            <div class="col">
                                <strong><?php echo $lang['item_number'] ?></strong>
                            </div>
                            <div class="col">
                                <?= $product['barcode'] ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <strong><?php echo $lang['name'] ?></strong>
                            </div>
                            <div class="col">
                                <?= $product['name'] ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <strong><?php echo $lang['price'] ?></strong>
                            </div>
                            <div class="col">
                                <?= number_format($product['price'], 2) ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <strong><?php echo $lang['qty'] ?></strong>
                            </div>
                            <div class="col">
                                <?= $product['qty'] ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <strong> <?php echo $lang['short_description'] ?></strong>
                            </div>
                            <div class="col">
                                <?= $product['short_descript'] ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <strong><?php echo $lang['long_description'] ?></strong>
                            </div>
                            <div class="col">
                                <?= $product['long_descript'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="img-fluid" style="height: 150px; width:auto;">
                </div>
            </div>
        </div>
    </div>
    <a href="index.php" class="btn btn-light float-right text-dark mt-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View items"> <?php echo $lang['back'] ?></a>
    <!-- End Show a product -->
</div><!-- /.container -->
<br>
<?php include("inc/footer.php") ?>