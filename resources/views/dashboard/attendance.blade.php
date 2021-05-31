
@extends('dashboard.index')

@section('contentattendance')
<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
        Attendance
    </div>

                        <div class="col-md-15">
            <div class="card">
            
            <div class="card-body">
            

  
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
        This feature is still under development
    </div>

                                        <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Pascal technology (PTY) ltd <?php echo date("Y");?></div>
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

                 

                                        @overwrite