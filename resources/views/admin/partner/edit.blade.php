<div class="modal fade" id="EditModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-soft-primary">
                <h5 class="modal-title" >Edit Partner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{url('partner-update/'.$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="itemName-field" class="form-label">Partner Name</label>
                        <input type="text" name="name" id="itemname-field" class="form-control"  required value="{{$item->name}}" />
                    </div>
                 
                    @if ($item->logo)
                    <div class="image">
                    <img src="{{ asset('adm/assets/images/partner/' . $item->logo) }}" alt="{{ $item->name }}" width="100">
                     </div>
                     @endif
                    <div class="mt-3">
                        <input type="file" name="logo" id="itemname-field" class="form-control"   />
                    </div>
                             </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>