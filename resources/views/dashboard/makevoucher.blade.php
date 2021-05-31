@extends('dashboard.index')

@section('contentmakevoucher')
<div class="container-fluid">

<br>
            <div class="card">            
    
            <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert"></button>
        Generate new Voucher
    </div>
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
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif

<form method="post" action="{{ route('addvoucher') }}">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Names of Employee/other person </label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="names" placeholder="Enter names" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">His/Her Phone number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="phone_number" type="number" placeholder="enter phone number" />
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
                                                <label class="small mb-1" for="inputfname"> Amount  <sup>( in RWF ) </sup></label>
                                                <input class="form-control py-4" required  type="number"name="amount" placeholder="Enter amount" />
                                                        
                                                </div>


                                                
                                                <div class="col-md-6">
                                                <label class="small mb-1" for="inputfname"> Description </sup></label>
                                                  
                                                <TextArea required class="form-control py-4" name="description" placeholder="type voucher reason"></TextArea>

                                                </div>
                            </div>
                        </div>

                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Save a voucher') }}</Button>
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