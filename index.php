<?php
//include("inc/common.php");
include('languages/lang_config.php');
?>
<?php
//Include database connection
require("inc/db.php");
try {
    //Create sql statement
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
} catch (Exception $e) {
    //throw an error message
    echo "Error" . $e->getMessage();
    exit();
}
?>
<?php include("inc/header.php") ?>
<div class="container mt-2">
    <!--Start container-->
    <?php
    if (isset($_GET['status']) && $_GET['status'] == "deleted") : ?>
        <div class="alert alert-success" role="alert">
            <strong><?php echo $lang['delete_success'] ?></strong>
        </div>
    <?php endif ?>
    <?php
    if (isset($_GET['status']) && $_GET['status'] == "fail_delete") : ?>
        <div class="alert alert-danger" role="alert">
            <strong><?php echo $lang['delete_fail'] ?></strong>
        </div>
    <?php endif ?>
    <!-- Start table product -->
    <div class="card">
        <div class="card-header">
            <strong><i class="fa fa-globe pr-1" aria-hidden="true"></i>
                <a href="index.php?lang=den" style="text-decoration : none; color:#FFC106"><?php echo $lang['danish'] ?></a> |
                <a href="index.php?lang=en" style="text-decoration : none; color:#FFC106"><?php echo $lang['english'] ?></a>
            </strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left"><?php echo $lang['product Data'] ?></h5>
                    <a href="create.php" class="btn btn-sm btn-warning float-right mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add new item">
                        <i class="fa fa-plus pr-1 text-light"></i><?php echo $lang['add'] ?> </a>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th> <strong><?php echo $lang['item_number'] ?></strong></th>
                        <th> <strong><?php echo $lang['product name'] ?></strong></th>
                        <th> <strong><?php echo $lang['price'] ?></strong></th>
                        <th> <strong><?php echo $lang['qty'] ?></strong></th>
                        <th style="width: 20%;"> <strong><?php echo $lang['actions'] ?></strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->rowCount() > 0) : ?>
                        <?php foreach ($result as $product) : ?>
                            <tr>
                                <td><?= $product['barcode'] ?> </td>
                                <td> <?= $product['name'] ?> </td>
                                <td> <?= number_format($product['price'], 2) ?></td>
                                <td><?= $product['qty'] ?></td>
                                <td>
                                    <a href="show.php?id=<?= $product['id'] ?>" class="text-dark mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View item">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="edit.php?id=<?= $product['id'] ?>" class="text-dark mr-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit item">
                                        <i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-dark" data-toggle="modal" data-target="#modal-delete-<?= $product['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete item">
                                        <i class="fa fa-trash"></i></a>
                                    <?php include("inc/modal.php") ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End table product -->
    <br>
</div><!-- /.end container -->
<?php include("inc/footer.php") ?>