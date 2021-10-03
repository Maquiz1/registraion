
<!-- New Order start here Modal -->
<div class="modal fade" id="brand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <!-- BRAND FORM START HERE -->
       <form id="brand_form" onsubmit="return false" autocomplete="off">
  <div class="form-group">
    <label for="brand_name">Brand Name</label>
    <input type="text" class="form-control" name="brand_name" id="brand_name" aria-describedby="emailHelp">
    <small id="brand_error" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          <!-- BRAND FORM  ENDS HERE-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- New Order end here Modal -->