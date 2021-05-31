
@extends('dashboard.index')

@section('contentadduser')
<div class="container-fluid">
                    <h2 class="mt-4">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            Register new system user 
                            </li>
                        </ol>


                        <div class="col-md-15">
            <div class="card">
            
            <div class="card-body">
            @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(session()->has('message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif

            <form method="POST" action="{{ route('adduser') }}">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">First Name</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="firstname" placeholder="Enter Firstname" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="lastname" type="text" placeholder="Lastname" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Email</label>
                                                        <input class="form-control py-4" required id="inputemail" type="text"name="email" placeholder="Email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Phone number</label>
                                                        <input class="form-control py-4"required id="inputphone" name="Phone_number" type="number" placeholder="Phone number" />
                                                    </div>
                                                </div>
                                            </div>


                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">Password</label>
                                                        <input class="form-control py-4" required id="inputpassword" type="password"name="password" placeholder="Enter password" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputfname"> Choose user Level</label>
                                                        
                                                <select required  name="usertype" id="usertype" class="form-control">

<option value=""disabled selected>--select User type--</option>
<option value="1">Reception</option>
<option value="2">Data Entry</option> 
<option value="3">Call center</option>
<option value="4">Inventory</option>
<option value="5">Technician</option>
<option value="6">Corporate level</option>
 </select>
                                                </div>
                                            </div>
                            </div>
                        </div>

                                            
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button type="submit" class="btn btn-primary" >{{ __('Create a new User') }}</Button>
                                            
                                            </div>
                                        </form>
        
                                        <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Pascal technology (PTY) ltd <?php echo date("Y");?></div>
                            <div>
                                &middot;
                                <a href="https://pascal.rw/">Pascal technology</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 

                                        @overwrite