@extends('dashboard.index')

@section('contentshowmessages')

<div class="container-fluid">
<br>
<!-- <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2> -->
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                           Notifications
                            </li>
                        </ol>
                        <div class="col-md-15">
            <div class="card">
            
            <div class="card-body">




            @foreach($mail as $f)

            <div class="card" style="width: 30rem;">
    
 
    <img  src="{{ url('') }}/backend/Postfiles/{{$f->file}}" />
    
  <div class="card-body">
  <h7 class="card-title">  {{$f->title}}</h7>
    <p style="color:black">{{$f->body }}  <br> <sub style="color:grey">
    
    <img
            src="<?php echo url('/'); ?>/src/assets/img/pascal.jpg"
            class="rounded-circle z-depth-0"
            alt="avatar image"
            height="30"
            width="30"
            />
    By  {{$f->uploadedby}} - {{Carbon\Carbon::parse($f->updated_at)->diffForHumans() }} </sup> </p>
  </div>
</div>

@endforeach                 
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
                            