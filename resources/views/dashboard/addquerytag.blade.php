@extends('dashboard.index')

@section('contentaddquerytag')
<div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Add Query Tags
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

<form method="post" action="{{ route('addquerytag') }}">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Query tag</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="query_tag" placeholder="Enter query tag" />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Description of a Query tag</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="description" type="text" placeholder="Desription" />
                                                    </div>
                                                </div>
                                                
                                     </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('Save tag') }}</Button>
                                            </div>
                                        </form>

<br>

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
        View Query Tags
    </div>


    
                                        <br>

                                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#id</th>
                                                <th>Recorded by</th>
                                                <th>Querytag</th>
                                                <th>Description</th>
                                                <th>Created at</th>
                                                <th>Updated at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($tags as $tag)
<tr>
<td>#{{ $tag->id }}</td>
<td>{{ $tag->user_id}}</td>
<td>#{{ $tag->query_tag }}</td>
<td>{{ $tag->description }}</td>
<td>{{ $tag->created_at}}</td>
<td>{{ $tag->updated_at}}</td>

    <td> 
    <button class="btn btn-danger btn-sm">Remove</button>
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