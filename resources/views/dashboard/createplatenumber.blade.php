@extends('dashboard.index')

@section('contentcreateplatenumber')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            </li>
                            Add a Plate number
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

<form method="post" action="{{ route('addplatenumber') }}">
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
                                                        <label class="small mb-1" for="inputLastName">Vehicle make</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="vehicle_make" type="text" placeholder="eg: TOYOTA DYNA" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Vehicle type</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="vehicle_type" placeholder="Enter vehicle type" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Chassis N<sup>o</sup></label>
                                                        <input class="form-control py-4"required id="inputLastName" name="chassis_number" type="text" placeholder="Chasis number" />
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            
                                                 
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Save Plate Number') }}</Button>
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