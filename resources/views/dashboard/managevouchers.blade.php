@extends('dashboard.index')

@section('contentmanagevouchers')

<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            Manage Vouchers
                            </li>
                        </ol>


                        <div class="col-md-15">
            <div class="card">
            
            <div class="card-body">
            <Button class="btn btn-danger">Export to PDF</Button> 
                                           
                            <div class="table-responsive">
                                <table class="table table table-striped table-sm table-responsive-sm" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#VoucherId</th>
                                                <th>Generate by</th>
                                                <th>Receiver</th>
                                                <th>Phone Number</th>
                                                <th>Amount</th>
                                                <th>Voucher_status</th>
                                                <th>Done at</th>
                                                <th>Reason</th>
                                                <th>Staff Approval Status</th>
                                                <th>Staff Verification Status</th>
                                                <th>Receiver approval status</th>
                                                <th>Recorded at</th>
                                                <th>Actions</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>


                                        @foreach ($vouch as $vuca)
<tr >
<td>#{{ $vuca->id }}</td>
<td>{{ $vuca->doneby }}</td>
<td>{{ $vuca->names }}</td>
<td>{{ $vuca->phone_number}}</td>
<td>{{ $vuca->amount}}<sup> FRW</sup></td>
<td>{{ $vuca->voucher_status}}</td>
<td>{{ $vuca->date}}</td>
<td>{{ $vuca->description}}</td>
<td>{{ $vuca->approval_status }}</td>
<td>{{ $vuca-> verification_status}}</td>
<td>{{ $vuca-> employee_approval}}</td>
<td>{{ $vuca->created_at}}</td>


<td> 
<a href = 'ManageVoucher/{{ $vuca->id }}'> <button class="btn btn-warning btn-sm">MANAGE</button></a>
   
   
    <a href = 'DeleteVoucher/{{ $vuca->id }}'> Remove</a>
    
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