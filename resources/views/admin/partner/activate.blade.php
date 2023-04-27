
<form action="{{route('activate.partner',$item->id)}}"  method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
  <div class="modal fade" id="ActivateModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-light p-3">
          <h5 class="modal-title" id="exampleModalLabel">Activate Partner</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        @if($item->flug==0)
        <div class="modal-body">
            Are you sure you want to activate <b>{{$item->name}}</b>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Activate</button>
        </div>
        @else
        <div class="modal-body">
            Are you sure you want to deactivate <b>{{$item->name}}</b>?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Deactivate</button>
          </div>
        @endif
      </div>
    </div>
  </div>
  </form>