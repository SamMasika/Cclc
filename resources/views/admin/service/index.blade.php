@extends('layouts.back.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Services
                    <a href="" class="btn btn-primary waves-effect waves-light float-end" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal" ><i class="fas fa-plus"></i> Add Service</a>
                </h4>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($service as $item)
                    <tr>
                        @include('admin.service.activate')
                        <td>{{$item['name']}}</td>
                        <td>{{$item['description']}}</td>
                        @if ($item['flug'] ==0)
                        <td><span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">Inactive</span></td>
                        @else
                        <td ><span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">Active</span></td>
                        @endif
                        @include('admin.service.delete')
                        @include('admin.service.edit')
                        <td>
                            {{-- <a href="{{url('role-edit/'.$item->id)}}" class="btn btn-outline-warning btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>                                        --}}
                            <a class="btn btn-outline-warning btn-sm edit" title="Edit"  data-bs-toggle="modal"  data-bs-target="#EditModal{{$item['id']}}"> <i class="fas fa-pencil-alt"></i></a>
                                @if($item->flug==0)                              
                                <a class="btn btn-outline-primary btn-sm edit" title="Activate"  data-bs-toggle="modal" id="create-btn" 
                                data-bs-target="#ActivateModal{{$item['id']}}">
                                <i class="fas fa-toggle-off"></i>
                            </a>
                            @else                          
                            <a class="btn btn-outline-primary btn-sm edit" title="Deactivate"  data-bs-toggle="modal" id="create-btn" 
                            data-bs-target="#ActivateModal{{$item['id']}}">
                            <i class="fas fa-toggle-on"></i>
                        </a>
                        @endif
                        <a class="btn btn-outline-danger btn-sm edit" title="Delete"  data-bs-toggle="modal"  data-bs-target="#ModalDelete{{$item['id']}}"> <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- end cardaa -->
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-primary">
                <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{url('service-store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="tasksId" />
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label for="Member" class="form-label">Service Name</label>
                            <input type="text" name="name" id="Member" class="form-control" placeholder="Service name" required />
                        </div>
                        <div class="col-lg-12">
                                <label for="title" class="form-label">Description</label>
                                <textarea id="progresspill-address-input" class="form-control" name="description" rows="4" placeholder="Enter Service Desc...."></textarea>
                        </div>
                      
                     
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Add Service</button>
                        {{-- <button type="button" class="btn btn-success" id="edit-btn">Update Task</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection