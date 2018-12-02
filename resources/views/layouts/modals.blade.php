
{{-- POST MODAL --}}
  <!-- Modal -->
  <div class="modal fade" id="postModal" role="dialog">
    <div class="modal-dialog">
     <form action="/dashboard" method="POST" enctype="multipart/form-data">
      @csrf
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Display Product</h4>
        </div>
        <div class="modal-body" style="background:#f0ffe4;">
          <textarea name="description" class="form-control">
            Post something .. 
          </textarea>

          <h3>Upload Image:</h3>
          
              <input type="file" name="img[]" multiple>
              <br><br>

          @if(Session::has('msg'))
            {{ Session::get('msg') }}
          @endif
        </div>
        <div class="modal-footer" style="background:#d5ffb0;">
          <button type="submit" class="btn btn-info">Post</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>  
    </div>
  </div>

