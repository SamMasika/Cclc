<div class="modal fade" id="EditModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-soft-primary">
                <h5 class="modal-title" >Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{url('service-update/'.$item->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="itemName-field" class="form-label">Member Name</label>
                        <input type="text" name="name" id="itemname-field" class="form-control"  required value="{{$item->name}}" />
                    </div>
                    <div class="col-lg-12">
                        <label for="title" class="form-label">Description</label>
                        <textarea id="progresspill-address-input" class="form-control" name="description" rows="2" >{{$item->description}}</textarea>
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