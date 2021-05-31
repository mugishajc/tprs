<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/jpg" href="<?php echo url('/'); ?>/src/assets/img/logopascal.jpg" />         
        <title>PTRS - Pascal Technology Reporting system</title>
 
        <link href="<?php echo url('/'); ?>/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    
</head>

       
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-info">
            <a class="navbar-brand" href="<?php echo url('/v1/admin/dashboard/home'); ?>">
            <img src="/src/assets/img/logo.jpg"  height="50" style="border-radius:0px 0px 5px 5px" alt="CoolBrand">
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for clients" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary bg-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a style="color:#006400;" class="dropdown-item" href="#">
                        {{ auth()->user()->email}}
                    </a>
                        <a class="dropdown-item" data-toggle="modal" id="mediumButton" data-target="#mediumModal">My Profile</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}" style="color:#FF0000">
                            
                        
                        Logout
                    
                    </a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav bg-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    
                    <div class="nav">
        
                            <a class="nav-link" href="<?php echo url('/Messages'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Announcement
                            </a>
                            
                            <a class="nav-link" href="<?php echo url('/Ourservices'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Services
                            </a>
                            <a class="nav-link" href="<?php echo url('/Attend'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Attendance
                            </a>
                            

                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsvoucher" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Vouchers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsvoucher" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a  class="nav-link" href="{{url('/makevoucher')}}">Generate a voucher</a>
                                    <a  class="nav-link" href="{{url('/viewvouchers')}}">Manage vouchers</a>
                                </nav>
                            </div>

                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsusers" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsusers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a  class="nav-link" href="{{url('/registeruser')}}">Add new user</a>
                                    <a  class="nav-link" href="{{url('/manageuser')}}">Manage users</a>
                                    <a  class="nav-link" href="{{url('/createnotification')}}">Make nofitication</a>
                                
                                </nav>
                            </div>

<!-- 
                            <div  class="sb-sidenav-menu-heading">Units / Departments</div>
                             -->
                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsreception" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Customer Executive
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsreception" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                 <a  class="nav-link" href="{{url('/addplatenumber')}}">Add Plate number</a>
                                 <a  class="nav-link" href="{{url('/viewplatenumber')}}">View Plate number</a>
                                 <a  class="nav-link" href="{{url('/createtask')}}">Create Task</a>
                                    <a  class="nav-link" href="{{url('/managejob')}}">Manage Tasks</a>
                                </nav>
                            </div>
                            
                            

                            
                            
                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Call center
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a  class="nav-link" href="{{url('/addquerytag')}}">Add Query Tag</a>
                                    <a  class="nav-link" href="{{url('/createcall')}}">Create calls</a>
                                    <a  class="nav-link" href="{{url('/managecall')}}">Manage Calls</a>
                                </nav>
                            </div>


                         
                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsstock" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Inventory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsstock" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a  class="nav-link" href="#">Stock in</a>
                                    <a  class="nav-link" href="#">Stock out</a>
                                    <a class="nav-link" href="{{url('/Managesimcard')}}">Register Simcard</>
                                            
                                </nav>
                            </div>

                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data Entry
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Lost Devices
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{url('/Lostdevices')}}">New</a>
                                            <a class="nav-link" href="{{url('/Inactivesimcard')}}">Inactive simcard</a>
                                            <a class="nav-link" href="{{url('/ViewLost')}}">Manage</a>
                                        </nav>
                                    </div>
                    
                                
                                </nav>
                            </div>
                            
                    
                            <a  class="nav-link collapsed" href="#" data-toggle="collapse"  aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-closed"></i></div>
                                Technical Unit
                                <div class="sb-sidenav-collapse-arrow">T</div>
                            </a>
                    
                        </div>
                    
                    </div>



                    <div class="sb-sidenav-footer " >


                        <div class="small" style="color:#000">
                        <img
            src="<?php echo url('/'); ?>/src/assets/img/pascal.jpg"
            class="rounded-circle z-depth-0"
            alt="avatar image"
            height="30"
            width="30"
            />
                            {{ auth()->user()->firstname}}  {{ auth()->user()->lastname}} 
                        
                    </div>
                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
        
            <main>
                  
            @section('contentmaindashboard')
            @show


            @section('contentadduser')
            @show
 
            @section('contentedituser')
            @show

            @yield('contentmanageuser')
            @show
            
            @yield('contentcreatecall')
            @show
            
            @yield('contentmanagecalls')
            @show
            
            @yield('contenteditcalls')
            @show
            
            @yield('contentaddquerytag')
            @show
            

            @yield('contentmakevoucher')
            @show
            
            @yield('contentmanagevouchers')
            @show

            
            @yield('contentcreatetask')
            @show
            @yield('contenteditjob')
            @show

            
            @yield('contentattendance')
            @show

            
            @yield('contentcreateplatenumber')
            @show

            
            @yield('contentviewplatenumber')
            @show

            
            @yield('contentmanagejob')
            @show

            
            @yield('contentsimcard')
            @show


            @section('contenteditsimcard')
            @show
            
            @yield('contentinactivesimcard')
            @show

            @yield('contentmakenotification')
            @show

            @yield('contentshowmessages')
            @show
            
            @yield('contentviewvoucher')
            @show


            
            @yield('contentribcases')
            @show

            
            @yield('contentviewlost')
            @show
            
            
           </div>


                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo url('/'); ?>/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo url('/'); ?>/dist/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo url('/'); ?>/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo url('/'); ?>/dist/assets/demo/datatables-demo.js"></script>

                 
      
  <!--profile modal  -->
  
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                   
                <div>
                 
                <!-- the result to be displayed apply here -->
                 <h7 style="color:#000;"> My Profile  
                
                          <img
            src="<?php echo url('/'); ?>/src/assets/img/pascal.jpg"
            class="rounded-circle z-depth-0"
            alt="avatar image"
            height="30"
            width="30"
            />
                
                </h7> <br> <label style="color:#FF0000;"> Unit -> {{ auth()->user()->usertype}} </label> 
                <form method="post" action="#">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="firstname" value="{{ auth()->user()->firstname}}" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="lastname" type="text" value="{{ auth()->user()->lastname}}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Email</label>
                                                        <input class="form-control py-4" required id="inputemail" type="text"name="Email" value="{{ auth()->user()->email}}" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Phone number</label>
                                                        <input class="form-control py-4"required id="inputphone" name="Phone number" value="{{ auth()->user()->phone_number}}" type="text" placeholder="{{ auth()->user()->phone_number}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                              
  @error('level')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                            
                                                
                                            <!-- </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-primary" name="update">update</Button>
                                            </div> -->
                                        </form>
        


                        <!-- end of result from DB> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
      
        <script>
    // display a modal (medium modal)
        $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

    </script>
        
        <!-- end of profile modal-->
    
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.3.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.3.3/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


    </body>
</html>
