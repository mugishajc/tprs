@extends('dashboard.index')

@section('contentviewplatenumber')

<div class="container-fluid">
                    <h2 class="mt-4">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            List of plate numbers / vehicles
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


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#ID</th>
                                                <th>Created by</th>
                                                <th>Created at</th>
                                                <th>Plate Number</th>
                                                <th>Vehicle make</th>
                                                <th>Vehicle type</th>
                                                <th>Chasis N<sup>o</sup></th>
                                                <th>Updated at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($platenumbers as $platenumber)
<tr>
<td>#{{ $platenumber->id }}</td>
<td>{{ $platenumber->doneby }}</td>
<td>{{ $platenumber->created_at }}</td>
<td>{{ $platenumber->plate_number}}</td>
<td>{{ $platenumber->vehicle_make}}</td>
<td>{{ $platenumber->vehicle_type}}</td>
<td>{{ $platenumber->chassis_number}}</td>
<td>{{ $platenumber->updated_at}}</td>


<td>

<a href = 'UpdatePlateNumber/{{ $platenumber->id }}'><button class="btn btn-info btn-sm">Manage</button></a>
    <a href = 'DeletePlatenumber/{{ $platenumber->id }}'>Delete</a>
   
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
                            <div class="text-muted">Copyright &copy; Pascal technology (PTY) ltd 2020</div>
                            <div>
                                &middot;
                                <a href="https://pascal.rw/">Pascal website</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 
                            @endsection