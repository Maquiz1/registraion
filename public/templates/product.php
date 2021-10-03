
<!-- New Order start here Modal -->
<div class="modal fade" id="product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <!-- PRODUCT FORM START HERE  -->

      <form id="product_form" onsubmit="return false" autocomplete="off">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="added_date">Date</label>
      <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo date('Y-m-d'); ?>" readonly>
    </div>
    <div class="form-group col-md-6">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="Enter Product Name">
  </div>
  </div>

    <div class="form-group">
      <label for="select_cat">Category</label>
      <select id="select_cat" class="form-control" name="select_cat" required>

      <!-- GET CATEGORY FORM MAIN JS  -->

      <!-- <option selected>Choose...</option>
      
      <option>...</option> -->

      </select>
    </div>
    <div class="form-group">
      <label for="select_cat">Brand</label>
      <select id="select_brand" class="form-control" name="select_brand" required>

      <!-- GET BRAND FROM MAIN JS  -->

      <!-- <option selected>Choose...</option>
      
      <option>...</option> -->
      
      </select>
    </div>
    <div class="form-group">
    <label for="product_price">Product Price</label>
    <input type="text" class="form-control" id="product_price" name="product_price"  placeholder="Enter Product Price">
  </div>
  <div class="form-group">
    <label for="product_qty">Quantinty</label>
    <input type="text" class="form-control" id="product_qty" name="product_qty"  placeholder="Enter Product Quantinty">
  </div>
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>
      <!-- PRODUCT FORM ENDS HERE  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- New Order end here Modal -->