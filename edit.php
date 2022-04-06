<?php
//include("inc/common.php");
include('languages/lang_config.php');
?>
<?php
require("inc/db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;

try {
    //Collect products from DB
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

    <?php
    if (isset($_GET['status']) && $_GET['status'] == "updated") : ?>
        <div class="alert alert-success" role="alert">
            <strong> <?php echo $lang['edit_success'] ?> </strong>
        </div>
    <?php endif ?>
    <?php
    if (isset($_GET['status']) && $_GET['status'] == "fail_update") : ?>
        <div class="alert alert-danger" role="alert">
            <strong> <?php echo $lang['edit_fail'] ?> </strong>
        </div>
    <?php endif ?>
    <!-- Create Form -->
    <div class="card">
        <div class="card-header">
            <span class="float-right"><strong><i class="fa fa-edit pr-1"></i> <?= $product['name'] ?></strong></span>
        </div>
        <div class="card-body">
            <form action="update.php" method="post">
                <!-- Updating-->
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <!-- End Updating-->
                <div class="mb-3 row">
                    <label for="barcode" class="col-sm-2 col-form-label"> <strong><?php echo $lang['item_number'] ?> </strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required value="<?= $product['barcode'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label"> <strong><?php echo $lang['name'] ?></strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="<?= $product['name'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label"><strong><?php echo $lang['price'] ?></strong></label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required value="<?= $product['price'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="qty" class="col-sm-2 col-form-label"> <strong><?php echo $lang['qty'] ?></strong></label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required value="<?= $product['qty'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="short_descript" class="col-sm-2 col-form-label"> <strong><?php echo $lang['short_description'] ?></strong></label>
                    <div class="col">
                        <textarea name="short_descript" id="" rows="3" class="form-control" placeholder="Description"><?= $product['short_descript'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="long_descript" class="col-sm-2 col-form-label"> <strong><?php echo $lang['long_description'] ?> </strong></label>
                    <div class="col">
                        <textarea name="long_descript" id="" rows="5" class="form-control" placeholder="Description"><?= $product['long_descript'] ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update item"><i class="fa fa-check-circle pr-1 text-light"></i> <?php echo $lang['update'] ?></button>
                <a href="index.php" class="btn btn-outline-warning float-right mr-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View items"> <?php echo $lang['view'] ?> </a>
            </form>
        </div>
    </div>
    <!-- End create form -->
    <br>
</div><!-- /.container -->
<?php include("inc/footer.php") ?>