@extends('layouts.back.admin')

@section('content')

                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm order-2 order-sm-1">
                                                <div class="d-flex align-items-start mt-3 mt-sm-0">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xl me-3">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle d-block">
                                                        </div>
                                                      
                                                    </div>
                                                    
                                                    <div class="flex-grow-1">
                                                        <div>  
                                                            
                                                                <div class="logo-outer">
                                                                    <div class="logo">
                                                                        <a href="index.html"><img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="Logo" width="15%" title="Logo"></a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="font-size-16 mb-1">{{$company->name}}</h5>
                                                                <p class="text-muted font-size-13">{{$company->motto}}
                                                                   
                                                                </p>
                                                           
                                                            {{-- <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                                @foreach ($service as $item)                                                                 
                                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{$item->name}}</div>
                                                                @endforeach
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>

                                        <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Summary</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">Vision</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Mission</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="tab-content">
                                    <div class="tab-pane active" id="overview" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">About</h5>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <div class="pb-3">
                                                        <div class="row">
                                                            <div class="col-xl-2">
                                                                <div>
                                                                    <h5 class="font-size-15">Motto :</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl">
                                                                <div class="text-muted">
                                                                    <p class="mb-2">{{$company->motto}}</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="py-3">
                                                        <div class="row">
                                                            <div class="col-xl-2">
                                                                <div>
                                                                    <h5 class="font-size-15">About Us :</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl">
                                                                <div class="text-muted">
                                                                    <p>{{$company->about_us}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->

                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Our Services</h5>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <div class="row">
                                                        @foreach ($service as $item)
                                                            
                                                        <div class="col-xl-4">
                                                            <div class="card p-1 mb-xl-0">
                                                                <div class="p-3">
                                                                    <div class="d-flex align-items-start">
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">{{$item->name}}</a></h5>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                
                                                              

                                                                <div class="p-3">
                                                                    
                                                                    <p class="text-muted">{{$item->description}}</p>
    
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- end col -->

                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane" id="about" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Vision</h5>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <div class="pb-3">
                                                        <h5 class="font-size-15">Vision :</h5>
                                                        <div class="text-muted">
                                                            <p class="mb-2">{{$company->vision}}</p>
                                                    
                                                        </div>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>


                                    <div class="tab-pane" id="post" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Mission</h5>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <div class="pb-3">
                                                        <h5 class="font-size-15">Mission :</h5>
                                                        <div class="text-muted">
                                                            <p class="mb-2">{{$company->mission}}</p>
                                                    
                                                        </div>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end tab pane -->

                                   
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-lg-4">
                               
                                <!-- end card -->

                              

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Our Address</h5>

                                        <div class="list-group list-group-flush">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">{{$company->name}}</h5>
                                                            <p class="font-size-13 text-muted mb-0">P.O.BOX {{$company->postal_address}}</p>
                                                            <p class="font-size-13 text-muted mb-0"> Location: {{$company->location}}</p>
                                                            <p class="font-size-13 text-muted mb-0">Phone: {{$company->phone1}},{{$company->phone2}}</p>
                                                            <p class="font-size-13 text-muted mb-0">Email: {{$company->email}}</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            
                                        </div>
                                        <div class="list-group list-group-flush mt-5">
                                            
                                            <a class="btn btn-primary btn-sm edit" title="Edit"  data-bs-toggle="modal"  data-bs-target="#EditModal{{$company['id']}}"> <i class="fas fa-pencil-alt">Edit Profile</i></a>   
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Portfolio</h5>

                                        <div>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="{{URL('/')}}" class="py-2 d-block text-muted " color="blue"><i class="mdi mdi-web text-primary me-1"></i> CCL Website</a>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row --> 
                        <div class="modal fade" id="EditModal{{$company->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-soft-primary">
                                        <h5 class="modal-title" >Edit Company Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('profile-update/'.$company->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf      
                                            <div class="row">                                                            
                                                <div class="col-md-6">
                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Company Name</label>
                                                        <input type="text" class="form-control" name="name" id="formrow-email-input" value="{{$company->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-password-input">Email</label>
                                                        <input type="email" class="form-control" name="email" id="formrow-password-input" value="{{$company->email}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                                            
                                                <div class="col-md-6">
                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Postal Address</label>
                                                        <input type="text" class="form-control" name="postal_address" id="formrow-email-input" value="{{$company->postal_address}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-password-input">Location</label>
                                                        <input type="text" class="form-control" name="location" id="formrow-password-input" value="{{$company->location}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                                            
                                                <div class="col-md-6">
                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Phone1</label>
                                                        <input type="text" maxlength="14" class="form-control" name="phone1" id="formrow-email-input" value="{{$company->phone1}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-password-input">Phone2</label>
                                                        <input type="text" maxlength="14" class="form-control" name="phone2" id="formrow-password-input" value="{{$company->phone2}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                                            
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Motto</label>
                                                        <textarea id="progresspill-address-input" class="form-control" name="motto" rows="2" >{{$company->motto}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Vision</label>
                                                        <textarea id="progresspill-address-input" class="form-control" name="vision" rows="2" >{{$company->vision}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                                            
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Mission</label>
                                                        <textarea id="progresspill-address-input" class="form-control" name="mission" rows="2" >{{$company->mission}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                                            
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">About Us</label>
                                                        <textarea id="progresspill-address-input" class="form-control" name="about_us" rows="2" >{{$company->about_us}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="row">                                                            
                                                <div class="col-md-6">
                                                    @if ($company->image)
                                            <div class="image">
                                                <div class="logo-outer">
                                                    <div class="logo">
                                                        <a href="index.html"><img src="{{asset('adm/assets/images/company/'.$company->image)}}" alt="Logo" width="15%" title="Logo"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="mt-3">
                                                <label for="title" class="form-label">Company's Logo</label>
                                                <input type="file" name="image" id="itemname-field" class="form-control"   />
                                            </div>
                                                </div>
                                                <div class="col-md-6">
                                                    @if ($company->bg)
                                                    <div class="image">
                                                        <div class="logo-outer">
                                                            <div class="logo">
                                                                <a href="index.html"><img src="{{asset('adm/assets/images/company/'.$company->bg)}}" alt="Logo" width="15%" title="Logo"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="mt-3">
                                                        <label for="title" class="form-label">Backgroung Image</label>
                                                        <input type="file" name="bg" id="itemname-field" class="form-control"   />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                                            
                                                <div class="col-md-6">
                                                    @if ($company->image1)
                                            <div class="image">
                                                <div class="logo-outer">
                                                    <div class="logo">
                                                        <a href="index.html"><img src="{{asset('adm/assets/images/company/'.$company->image1)}}" alt="Logo" width="15%" title="Logo"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="mt-3">
                                                <label for="title" class="form-label">Image1 About Us</label>
                                                <input type="file" name="image1" id="itemname-field" class="form-control"   />
                                            </div>
                                                </div>
                                                <div class="col-md-6">
                                                    @if ($company->image2)
                                                    <div class="image">
                                                        <div class="logo-outer">
                                                            <div class="logo">
                                                                <a href="index.html"><img src="{{asset('adm/assets/images/company/'.$company->image2)}}" alt="Logo" width="15%" title="Logo"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="mt-3">
                                                        <label for="title" class="form-label">Image2 About Us</label>
                                                        <input type="file" name="image2" id="itemname-field" class="form-control"   />
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="modal-footer">
                                                 <div class="hstack gap-2 justify-content-end">
                                                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                     <button type="submit" class="btn btn-primary" id="add-btn">Update</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                @endsection