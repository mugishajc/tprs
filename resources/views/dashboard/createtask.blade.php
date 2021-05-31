@extends('dashboard.index')

@section('contentcreatetask')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Create a new task
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


<form method="post" action="{{ route('createjob') }}">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                        <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Plate number</label>
                                                        
                                                <select required  name="plate_number"  class="form-control">

<option value=""disabled selected>--select plate number --</option>
                                                        @foreach($plate as $plates)
<option value="{{$plates->plate_number}}">{{$plates->plate_number}}</option>
@endforeach
 </select>

                                                        </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Name of Service name / Query tag </label>
                                                        
                                                <select required  name="task_name" id="task_name" class="form-control">

<option value=""disabled selected>--select task name / Query tag --</option>
                                                        @foreach($tags as $tags)
<option value="{{$tags->description}}">{{$tags->description}}</option>
@endforeach
 </select>

                                                        </div>
                                                </div>
                                            </div>

                                          
                                          
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Vehicle's Owner Names</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="owner_names" placeholder="Enter vehicle owner name" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Owner Phone number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="owner_telephone" type="number" placeholder="Enter owner names" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Vehicle's Driver names</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="driver_names" placeholder="Enter driver names" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Driver's Phone number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="driver_telephone" type="number" placeholder="Driver telephone" />
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            
                              
                                            
                            </div>
                        </div>

                                            
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Create a task') }}</Button>
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