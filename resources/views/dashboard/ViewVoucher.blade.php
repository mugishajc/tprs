@extends('dashboard.index')

@section('contentviewvoucher')

<div class="container-fluid">
<br>
<!-- <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2> -->

@foreach ($voca as $voc)                                            
                        <ol class="breadcrumb mb-4">
                             
                            <li class="breadcrumb-item active">
                            
                           Payment Voucher
                            </li>
                            
                            <li class="breadcrumb-item active">
                            
                            <h7 class="btn btn-info">Voucher status > {{$voc->voucher_status}}</h7>
                            
                                     Company Name: Pascal Technology Ltd  Tel:+250787859259 / 4888
                            </li>
                        </ol>
                            

                        <div class="col-md-15"> 
            <div class="card">
            
            <div class="card-body">
             <p style="color:#000;">
            </p>
            <div class="table-responsive">
                                <table class="table table  table-striped table-sm table-responsive-sm" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="thead-dark">
                                            <tr>

                                                <th>PV N<sup>o</sup>: (#{{ $voc->id }}) </th>
                                                <th >Date: {{ $voc->date }}</th>
                                                <th>Amount: {{ $voc->amount }}  FRW </th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

<tr>
<td>Receiver:</td>   
<td>{{ $voc->names }}</td>
   
</tr>

<tr>
<td>The sum of:</td>   
<td>{{ $voc->amount }}<sup> RWF</sup></td>
   
</tr>


<tr>
<td>Phone Number: </td>
<td>{{$voc->phone_number}}</td>
</tr>
<tr>
<td>Payment method:</td>   
<td>Cash:{{$voc->amount}}Rwf</td>
<td>Check#:(000)</td>
   
</tr>


<tr>
<td>Approved By:{{$voc->approved_by}} </td>
<td>Date:{{$voc->staff_approved_at}}</td>
<td>Digital Signature:{{$voc->approval_signature}}</td>
</tr>


<tr>
<td>Verified By:{{$voc->verified_by}} </td>
<td>Date:{{$voc->staff_verified_at}}</td>
<td>Digital Signature:{{$voc->verification_signature}}</td>
</tr>


<tr>
<td>Paid By:{{$voc->doneby}} </td>
<td>Date:{{$voc->created_at}}</td>
<td>Digital Signature:{{$voc->approval_signature}}</td>
</tr>

<tr>
<td>Receiver Approval: {{$voc->employee_approval}}</td>
<td>Date{{$voc->employee_approved_at}}</td>
</tr>

<tr>
<td> Staff Verification status: </td>
<td>{{$voc->verification_status}}</td>
</tr>


<tr>
<td>Staff Approval  status: </td>
<td>{{$voc->approval_status}}</td>
</tr>

<tr>
<td>Description: </td>
<td>{{$voc->description}}</td>
</tr>


@endforeach

                                        </tbody>
                                    </table>
                            </div>

<p class="btn btn-warning">Export to PDF</p>

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
                            