@extends('dashboard.index')

@section('contenteditsimcard')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Edit simcard
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

<form method="post" action="/InactiveSimcard/<?php echo $simcards[0]->id; ?>">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                
                                          <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Telco's</label>
                                                        
                                                <select required  name="telco" id="telco" class="form-control">

<option value=""disabled selected>--select Telco--</option>
<option value="MTN">MTN</option>
<option value="TIGO">TIGO</option>
<option value="AIRTEL">AIRTEL</option>
 </select>

                                                        </div>
                                                
                                                
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Simcard Serial number</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number" name="serial_number" value = '<?php echo$simcards[0]->serial_number; ?>'/>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Vehicle Plate Number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="plate_number" type="text" value = '<?php echo$simcards[0]->plate_number; ?>' />
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Phone Number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="phone_number" type="text" value = '<?php echo$simcards[0]->phone_number; ?>' />
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName"> Simacard PUK</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="puk" type="number" value = '<?php echo$simcards[0]->puk; ?>' />
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Choose status</label>
                                                    
                                                <select required  name="status" id="status" class="form-control">

<option value=""disabled selected>--select simcard status--</option>
<option value="ACTIVE">ACTIVE</option>
<option value="INACTIVE">INACTIVE</option>
<option value="BLOCKED">BLOCKED</option>
<option value="LOST">LOST</option>
 </select>

                                                    </div>
                                                </div>


                                            </div>

                                            </div>
                                                
                                            </div>
    
    
    
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Update simacard') }}</Button>
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