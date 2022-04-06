<!-- Modal Confirm Delete -->
<div class="modal fade" id="modal-delete-<?= $product['id'] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> <?php echo $lang['delete'] ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p> <?php echo $lang['delete_text'] ?> <strong><?= $product['name'] ?></strong> ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal"><?php echo $lang['cancel'] ?> </button>
                <a href="delete.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger btn-sm"><?php echo $lang['delete'] ?></a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->