<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row">
                <div class="col-md mb-md-0 mb-5">
                    <div class="modal-body p-0">
                        <h3 class="mb-4">Sign In</h3>
                        <form id="editform" action="javascript:void(0);" method="post" class="signin-form">
                            @csrf
                            <input type="hidden" id="itemId" name="itemId">
                            <div class="form-group">
                                <label for="item_id">Item ID</label>
                                <input class="form-control" type="text" id="item_id" name="item_id" required>
                            </div>
                            <div class="form-group">
                                <label for="item_name">Item Name</label>
                                <input class="form-control" type="text" id="item_name" name="item_name" required>
                            </div>
                            <div class="form-group">
                                <label for="item_price">Item Price</label>
                                <input class="form-control" type="text" id="item_price" name="item_price" required>
                            </div>
                            <div class="form-group">
                                <label for="item_quantity">Item Quantity</label>
                                <input class="form-control" type="text" id="item_quantity" name="item_quantity" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="editFunction()" class="form-control btn btn-primary rounded submit px-3">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
