<?php
//
include('languages/lang_config.php');
?>
<?php include("inc/header_create.php") ?>
<div class="container mt-2">

    <?php
    if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong> <?php echo $lang['add_success'] ?> </strong>

        </div>
    <?php endif ?>
    <?php
    if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong><?php echo $lang['Mislykket'] ?> </strong>
        </div>
    <?php endif ?>
    <!-- Create Form -->
    <div class="card">
        <div class="card-header text-dark">
            <span class="float-right"><strong> <i class="fa fa-plus pr-1 text-warning"></i> <?php echo $lang['add new product'] ?></strong></span>
        </div>
        <div class="card-body">
            <form action="add.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"><strong><?php echo $lang['item_number'] ?></strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="barcode" name="barcode" placeholder=" <?php echo $lang['enter_item_number']; ?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"><strong><?php echo $lang['price'] ?></strong></label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="price" name="price" placeholder=" <?php echo $lang['enter_product_price']; ?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label"> <strong><?php echo $lang['name'] ?></strong> </label>
                    <div class="col">
                        <input type="text" class="form-control" id="name" name="name" placeholder=" <?php echo $lang['enter_product_name']; ?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="qty" class="col-sm-2 col-form-label"> <strong><?php echo $lang['qty'] ?></strong> </label>
                    <div class="col">
                        <input type="number" class="form-control" id="qty" name="qty" placeholder=" <?php echo $lang['enter_product_qty']; ?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="short_descript" class="col-sm-2 col-form-label"> <strong><?php echo $lang['short_description'] ?></strong> </label>
                    <div class="col">
                        <textarea name="short_descript" id="short_descript" rows="3" class="form-control" placeholder=" <?php echo $lang['short_descript_text']; ?>"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="long_descript" class="col-sm-2 col-form-label"> <strong><?php echo $lang['long_description'] ?></strong> </label>
                    <div class="col">
                        <textarea name="long_descript" id="long_descript" rows="5" class="form-control" placeholder=" <?php echo $lang['long_descript_text']; ?>"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to submit"><i class="fa fa-check-circle pr-1 text-light"></i> <?php echo $lang['save'] ?> </button>
                <a href="index.php" class="btn btn-outline-warning float-right mr-4"><?php echo $lang['view'] ?> </a>
            </form>
        </div>
    </div>
    <!-- End create form -->
    <br>
</div><!-- /.container -->
<?php include("inc/footer.php") ?>