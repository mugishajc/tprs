@extends('dashboard.index')

@section('contentmanageuser')

<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            Manage users
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
                                <table class="table table  table-striped table-sm table-responsive-sm" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="thead-dark">
                                            <tr>
                                            
                                                <th>#id</th>
                                                <th >Firsname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Level</th>
                                                <th>Created at</th>
                                                <th>Updated at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($users as $user)
<tr>
<td>#{{ $user->id }}</td>
<td>{{ $user->firstname }}</td>
<td>{{ $user->lastname }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone_number }}</td>
<td>{{ $user->usertype}}</td>
<td>{{ $user->created_at}}</td>
<td>{{ $user->updated_at}}</td>


<td>

<a href = 'EditUser/{{ $user->id }}'><button class="btn btn-info btn-sm">Manage</button></a>
    <a href = 'deleteuser/{{ $user->id }}'>Delete</a>
   
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