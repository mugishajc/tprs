@extends('dashboard.index')

@section('contentmanageuser')

<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->usertype}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                          Our Services
                            </li>
                        </ol>


                        <div class="col-md-15">
            <div class="card">
            
            <div class="card-body">
            
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                <th>#</th>
                                                <th>Service name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>

<tr>
<td>1</td>
<td>GPS only</td>
<td>Replacement of GPS -GMT200</td>
<td>100,000 FRW</td>

   
</tr>

<tr>
<td>2</td>
<td>GPS only</td>
<td>Replacement of GPS -ST01</td>
<td>100,000 FRW</td>

   
</tr>

<tr>
<td>3</td>
<td>Speed Governor and GPS new installation </td>
<td>Mini-bus & Coaster</td>
<td>180,000 FRW</td>
</tr>


<tr>
<td>4</td>
<td>Speed Governor and GPS new installation </td>
<td>Daihatsu & Dyna</td>
<td>220,000 FRW</td>
</tr>

<tr>
<td>5</td>
<td>Support yo mu ntara</td>
<td>mu ntara</td>
<td>50,000 FRW</td>
</tr>


<tr>
<td>6</td>
<td>Support ya Kigali && no hafi ya kigali</td>
<td>Support ya kigali and nearer kigali</td>
<td>10,000 FRW</td>
</tr>

<tr>
<td>7</td>
<td>Renewal of Certificate</td>
<td>renewal of certificate</td>
<td>40,000 FRW</td>
</tr>
             
<tr>
<td>8</td>
<td>Speed Governor new installation Fuso</td>
<td>New installation-Fuso</td>
<td>240,000 FRW</td>
</tr> 
       
<tr>
<td>9</td>
<td>Tracking platform</td>
<td>Access to tracking platform</td>
<td>5,000 FRW</td>
</tr>
  
<tr>
<td>10</td>
<td>Displayer replacement</td>
<td>displayer</td>
<td>20,000 FRW</td>
</tr> 


<tr>
<td>11</td>
<td>Antenae replacement</td>
<td>displayer</td>
<td>20,000 FRW</td>
</tr> 


<tr>
<td>12</td>
<td>Displayer && Antenae +Speed governor replacement</td>
<td>Speed governor full</td>
<td>120,000 FRW</td>
</tr> 


<tr>
<td>13</td>
<td>Fuel Valve </td>
<td>Fuel & Air valve</td>
<td>50,000 FRW</td>
</tr> 

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