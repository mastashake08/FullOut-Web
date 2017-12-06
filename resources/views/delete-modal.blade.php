<div class="modal fade bs-delete-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this <span class="delete-modal-content"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form action="" method="post" class="d-inline-block delete-modal-form">
                    {{csrf_field()}}
                    <input type="hidden" name="product_id" value="" class="delete-modal-form-input-hidden">
                    <button type="submit" class="btn btn-danger ml-10">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>