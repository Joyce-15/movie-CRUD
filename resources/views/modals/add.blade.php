<!-- Modal Body-->
<div class="modal fade" id="add{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Add Actor/Actress</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            <form action="{{route('update')}}" method="post">
                @csrf
            <div class="modal-body">
                
                <div class="container-fluid">     
                    <div class="form-group">                  
                    <input type="text" class="form-control" name="id" id="id" value="{{$item->id}}" hidden>                    
                    <input type="text" class="form-control" name="actor" required placeholder="Enter Actor/Actress Name">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>




