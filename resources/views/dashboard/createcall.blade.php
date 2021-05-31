@extends('dashboard.index')

@section('contentcreatecall')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Register new call
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

<form method="post" action="{{ route('addcall') }}">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Client's Plate number</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="plate_number" placeholder="Enter client's plate number" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Client's Phone number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="phone_number" type="number" placeholder="Client's phone number" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Names of Client</label>
                                                        <input class="form-control py-4" required id="inputemail" type="text"name="names" placeholder="Enter client name (if any)" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Technician names </label>
                                                        
                                                <select required  name="technician" id="technician" class="form-control">

<option value=""disabled selected>--select Technician --</option>
                                                        @foreach($user as $user)
<option value="{{$user->firstname}}{{$user->lastname}}">{{$user->firstname}} {{$user->lastname}}</option>
@endforeach
 </select>

                                                        </div>
                                                </div>
                                            </div>


                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">Date</label>
                                                        <input class="form-control py-4" required  type="datetime-local"name="date" />
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputfname"> Choose Query type/ Tag</label>
                                                        
                                                <select required  name="query_tag" id="task_name" class="form-control">

<option value=""disabled selected>--select task name / Query tag --</option>
                                                        @foreach($query as $query)
<option value="{{$query->description}}">{{$query->description}}</option>
@endforeach
 </select>

                                                </div>
                                            </div>
                                            
                              
                                            <div class="form-row">
                                                 
                                                <div class="col-md-6">
                                                <label class="small mb-1" for="inputfname"> Issue Description</label>
                                  <TextArea required class="form-control py-4" name="issue_description"></TextArea>

                                                </div>
                                                </div>

                            </div>
                        </div>

                                            
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Save a call') }}</Button>
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

                 

@endsection