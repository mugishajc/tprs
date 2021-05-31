@extends('dashboard.index')

@section('contentribcases')

<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                           Declare new Lost Devices
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

<form method="post" action="{{ route('lostdevices') }}">
                                        {{ csrf_field() }}
            
                                             
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Vehicle Plate Number</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="plate_number" placeholder="Enter vehicle plate number" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Driver's Names</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="driver_names" type="text" placeholder="Enter owner names" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >N<sup>o</sup> of Device IMEI 1</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="imei1" placeholder="Enter Device IMEI number 1" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Serial number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="serial_number" type="number" placeholder="Serial number" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Telephone</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="phone_number" placeholder="Enter phone_number" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Isue Description</label>
                                                        <TextArea required class="form-control py-4" name="description"></TextArea>

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