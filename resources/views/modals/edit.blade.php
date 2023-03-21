<!-- Modal Body-->
<div class="modal fade" id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Edit Movie Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            <form action="{{url('edit')}}" method="post">
            @csrf    
            <div class="modal-body">
                
                <div class="container-fluid">      
                    <div class="row">                        
                    <input type="text" class="form-control" name="id" id="id" value="{{$item->id}}" hidden>    
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="title" value="{{$item->title}}" required placeholder="Enter Movie Title">
                    </div>
                    @if (isset($item->actor))
                         <div class="col-sm-12 mt-3">
                        <input type="text" class="form-control" name="actor" value="{{$item->actor}}" placeholder="Enter Actor/Actress Name">           
                        </div>
                    @endif
                   

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




