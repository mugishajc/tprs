@extends('dashboard.index')

@section('contentmanagecalls')

<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            View all Calls
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
    <button type="button" class="close" data-dismiss="alert">close</button>
        {{ session()->get('message') }}
    </div>
@endif

                                <div class="table-responsive">
                                <table class="table table table-striped table-sm table-responsive-sm" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>#CallId</th>
                                                <th>Done by</th>
                                                <th>Plate number</th>
                                                <th>Client Names</th>
                                                <th>Client Phone number</th>
                                                <th>Assigned Technician</th>
                                                <th>Date of call</th>
                                                <th>Query Tag</th>
                                                <th>Issue Description</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($calls as $call)
<tr >
<td>#{{ $call->id }}</td>
<td>{{ $call->doneby }}</td>
<td>{{ $call->plate_number }}</td>
<td>{{ $call->names }}</td>
<td>{{ $call->phone_number}}</td>
<td>{{ $call->technician}}</td>
<td>{{ $call->date}}</td>
<td>{{ $call->query_tag}}</td>
<td>{{ $call->issue_description}}</td>


<td> 

<a href = 'Editcall/{{ $call->id }}'> <button class="btn btn-warning btn-md">MANAGE</button></a>
    <a href = 'deletecall/{{ $call->id }}'> Remove</a>
    
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
                                <a href="https://tracking.pascal.rw/">Tracking</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 
                            @endsection