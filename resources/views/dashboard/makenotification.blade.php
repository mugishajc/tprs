@extends('dashboard.index')

@section('contentmakenotification')
<div class="container-fluid">
<h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2>
                      <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            Make announcemnt
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
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif

<form method="post" action="{{ route('addnotification') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Title</label>
                                                        <input class="form-control py-4" required type="text"name="title" placeholder="Title" />
                                                    </div>
                                                </div>
                                                
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                   <div class="white-box">
                                                        <label class="small mb-1" >File</label>
                                       <div id="add-messages"></div>
                                        <input type="file" id="input-file-now" class="dropify" name="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                                    </div>
                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Body</label>
                                                        <TextArea class="form-control py-4" required  name="body" type="text"></TextArea>
                                                    </div>
                                                </div>

                                                
                                     </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-info" type="submit">{{ __('POST') }}</Button>
                                            </div>
                                        </form>

<br>

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert"></button>
        All Announcements
    </div>


    
                                        <br>

                                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#id</th>
                                                <th>Announced by</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

                                        
                                        @foreach ($ubutumwa as $ubut)
<tr>
<td>{{ $ubut->id }}</td>
<td>{{ $ubut->uploadedby }}</td>
<td class="text-info">{{ $ubut->title }}</td>
<td>{{ $ubut->body }}</td>
<td>{{ $ubut->created_at}}</td>


<td> 

    <a href ='Deletemessage/{{ $ubut->id }}'><button class="btn btn-danger btn-sm">Remove</button></a>
    
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