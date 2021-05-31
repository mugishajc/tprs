@extends('dashboard.index')

@section('contenteditcalls')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                           Update/ Edit  call
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

<form method="post" action="/Updatecall/<?php echo $calls[0]->id; ?>">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Client's Plate number</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="plate_number" value = '<?php echo$calls[0]->plate_number; ?>' />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Client's Phone number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="phone_number" type="number" value = '<?php echo$calls[0]->phone_number; ?>'/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Names of Client</label>
                                                        <input class="form-control py-4" required id="inputemail" type="text"name="names" value = '<?php echo$calls[0]->names; ?>' />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Technician names </label>
                                                        
                                                        <input class="form-control py-4" required  type="text"name="technician" value = '<?php echo$calls[0]->technician; ?>' />
                                                        

                                                        </div>
                                                </div>
                                            </div>


                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">Date</label>
                                                        <input class="form-control py-4" required  type="text"name="date" value = '<?php echo$calls[0]->date; ?>' />
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputfname"> Choose Query type/ Tag</label>
                                                    <input class="form-control py-4" required  type="text"name="query_tag" value = '<?php echo$calls[0]->query_tag; ?>' />
                                                        
                                                </div>
                                            </div>
                                            
                              
                                            <div class="form-row">
                                                 
                                                <div class="col-md-6">
                                                <label class="small mb-1" for="inputfname">Brief Issue Description</label>
                                                <input class="form-control py-4" required  type="text" name="issue_description" value = '<?php echo$calls[0]->issue_description; ?>' />
                                                        
                                                </div>
                                                </div>

                            </div>
                        </div>

                                            
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Update call') }}</Button>
                                            </div>
                                        </form>

                                        <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Pascal technology (PTY) ltd <?php echo date("Y");?></div>
                            <div>
                                &middot;
                                <a href="https://tracking.pascal.rw/">Tracking</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 

@endsection