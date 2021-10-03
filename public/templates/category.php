
<!-- New Order start here Modal -->
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- CATEGORY FORM START HERE -->
        <form id="category_form" onsubmit="return false" autocomplete="off">
  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp">
    <small id="cat_error" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="parent_cat">Parent Cateogry</label>
    <select name="parent_cat" id="parent_cat"  name="parent_cat" class="form-control">

    <!-- ADD OPTION FROM MAIN.JS -->
      <!-- <option value="0">Root</option>
        <option value="1"></option>
        <option value="2"></option> -->
    </select>
    <small id="cat_error" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          <!-- CATEGORY FORM  ENDS HERE-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- New Order end here Modal -->