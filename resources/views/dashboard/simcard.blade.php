@extends('dashboard.index')

@section('contentsimcard')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Record new simcard
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

<form method="post" action="{{ route('addsimcard') }}">
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
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="serial_number" placeholder="1000036xxxxxxx" />
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Vehicle Plate Number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="plate_number" type="text" placeholder="eg: RAZ 001 A" />
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Phone Number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="phone_number" type="text" placeholder="eg:078xxxxxxx" />
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName"> Simacard PUK</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="puk" type="number" placeholder="eg:87xxxx" />
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
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Register simacard') }}</Button>
                                            </div>
                                        </form>

                                        <br>

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
        Manage simcards

        @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(session()->has('messages'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">Close</button>
        {{ session()->get('messages') }}
    </div>
@endif
    </div>

              <br>

                                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#id</th>
                                                <th>Telco</th>
                                                <th>Recorded by</th>
                                                <th>Plate number</th>
                                                <th>Phone number</th>
                                                <th>Serial number</th>
                                                <th>Puk</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($simcards as $tag)
<tr>
<td>#{{ $tag->id }}</td>
<td>{{ $tag->telco }}</td>
<td>{{ $tag->doneby}}</td>
<td>{{ $tag->plate_number }}</td>
<td>{{ $tag->phone_number}}</td>
<td>{{ $tag->serial_number }}</td>
<td>{{ $tag->puk }}</td>
<td class="text-danger">{{ $tag->status }}</td>
<td>{{ $tag->created_at}}</td>


    <td> 
    <a href = 'EditSimcard/{{ $tag->id }}'><button class="btn btn-warning btn-sm">Edit</button></a>
    <a href = 'deletesimcard/{{ $tag->id }}'> Remove</a>
    </td> 
   
</tr>
@endforeach

                                        </tbody>
                                    </table>
                            </div>


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