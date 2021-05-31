@extends('dashboard.index')

@section('contentinactivesimcard')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Inactive simcard
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
<td>{{ $tag->user_id}}</td>
<td>{{ $tag->plate_number }}</td>
<td>{{ $tag->phone_number}}</td>
<td>{{ $tag->serial_number }}</td>
<td>{{ $tag->puk }}</td>
<td class="text-danger">{{ $tag->status }}</td>
<td>{{ $tag->created_at}}</td>


    <td> 
    <button class="btn btn-danger btn-sm"> Remove</button>
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