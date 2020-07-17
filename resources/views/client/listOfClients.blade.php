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
                                             <th>ID</th>
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
                                                <td>{{$client->id}}</td>
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
                                                   <a href="" class="btn btn-primary">Details</a>
                                                   <a href="" class="btn btn-info">Modify</a>
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

 