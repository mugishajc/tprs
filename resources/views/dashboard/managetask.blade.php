@extends('dashboard.index')

@section('contentmanagejob')

<div class="container-fluid">
                    <h2 class="mt-4">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            Manage Tasks
                            </li>
                        </ol>


                        <div class="col-md-15">
            <div class="card">
            
            <div class="card-body">
            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#id</th>
                                                <th>Created By</th>
                                                <th>Task name</th>
                                                <th>Plate Number</th>
                                                <th>Owner Names</th>
                                                <th>Owner Phone number</th>
                                                <th>Driver Names</th>
                                                <th>Driver Phone number</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($tasks as $akazi)

<tr>
<td>#{{ $akazi->id }}</td>
<td>{{ $akazi->user_id }}</td>
<td>{{ $akazi->task_name }}</td>
<td>{{ $akazi->plate_number }}</td>
<td>{{ $akazi->owner_names }}</td>
<td>{{ $akazi->owner_telephone}}</td>
<td>{{ $akazi->driver_names}}</td>
<td>{{ $akazi->driver_telephone}}</td>
<td class="text-primary">{{ $akazi->job_status }}</td>
<td>{{ $akazi->created_at}}</td>


<td> 

   
<a href ='EditJob/{{ $akazi->id }}'> <button class="btn btn-warning btn-md">EDIT</button></a>
    <a href ='DeleteJob/{{ $akazi->id }}' > Remove</a>
    
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