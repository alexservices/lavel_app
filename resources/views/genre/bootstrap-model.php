 
<!-- boostrap model -->
<div class="modal fade" id="ajax-genre-model" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxGenreModel"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="addEditGenreForm" name="addEditGenreForm" class="form-horizontal" method="POST">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Genre name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Genre Name" value="" maxlength="50" required="">
                </div>
              </div>  

              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewGenre">Save changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
<!-- end bootstrap model -->