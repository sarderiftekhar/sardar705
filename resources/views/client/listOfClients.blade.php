@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
               <section class="section">
                 <div class="section-body">
                        <div class="col-12">
                           <div class="card card-primary">
                              <div class="card-header">
                                 <h4>Client list</h4>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                 <table class="table table-striped display" id="client_list"  style="width:100%">
                                    <thead>
                                       <tr>
                                             <th>First Name</th>
                                             <th>Last Name</th>
                                             <th>Address Line 1</th>
                                             <th>Address Line 2</th>
                                             <th>City</th>
                                             <th>Zip</th>
                                             <th>Cell</th>
                                             <th>Email</th>
                                             <th>Agent</th>
                                             <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($clients as $client)
                                             <tr>
                                                <td>{{$client->first_name}}</td>
                                                <td>{{$client->last_name}}</td>
                                                <td>{{$client->address_line_1}}</td>
                                                <td>{{$client->address_line_2}}</td>
                                                <td>{{$client->city}}</td>
                                                <td>{{$client->zip_code}}</td>
                                                <td>{{$client->mobile_number}}</td>
                                                <td>{{$client->email}}</td>
                                                <td>{{$client->agent->first_name}}</td>
                                                <td>
                                                   <a href="{{route('clients.show',['client'=>$client])}}" class="btn btn-primary">Details</a>
                                                   <a href="{{route('clients.edit',['client'=>$client])}}" class="btn btn-danger">Modify</a>
                                                </td>
                                             </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
             </section>
      </div>
@stop
@section('datatable')
   <script>
      $(document).ready(function () {
            $('#client_list').DataTable({
               responsive: true,
               colReorder: true,
               dom: 'Bfrtip',
               buttons: [
                  'csv', 'excel', 'pdf'
               ]
            });
      });
   </script>
@stop
 