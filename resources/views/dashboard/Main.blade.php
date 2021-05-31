@extends('dashboard.index')

@section('contentmaindashboard')

<div class="container-fluid">
<br>
<!-- <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2> -->

                                        
                        <ol class="breadcrumb mb-4">
                             
                            <li class="breadcrumb-item active">
                            
                           Dashboard
                            </li>
                            
                        </ol>
                            

                        <div class="col-md-15"> 
            <!-- <div class="card"> -->

<!--start static -->


<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-body">Calls <h7 style="color:#000"> -- {{$callu}} </h7></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="{{url('/managecall')}}">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    
                                    <div class="card-body">Jobs <h7 style="color:#000"> -- {{$alljob}} </h7></div> 
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="{{url('/managejob')}}">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-body">Data entry</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="#">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-body">Client <h7 style="color:#000"> -- {{$plate}} </h7></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="{{url('/viewplatenumber')}}">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Calls
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Jobs
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>


<!-- 
end of static -->


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
                            