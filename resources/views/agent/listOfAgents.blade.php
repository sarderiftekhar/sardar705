@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
               <section class="section">
                 <div class="section-body">
                        <div class="col-12">
                           <div class="card card-secondary">
                              <div class="card-header">
                                 <h4>List of Agents</h4>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                 <table class="table table-striped display" id="agent_list"  style="width:100%">
                                    <thead>
                                       <tr>
                                             <th>ID</th>
                                             <th>Title</th>
                                             <th>First Name</th>
                                             <th>Middle Name</th>
                                             <th>Last Name</th>
                                             <th>Phone</th>
                                             <th>Cell</th>
                                             <th>Email</th>
                                             <th>Type</th>
                                             <th>Company</th>
                                             <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($agents as $agent)
                                             <tr>
                                                <td>{{$agent->id}}</td>
                                                <td>{{$agent->title}}</td>
                                                <td>{{$agent->first_name}}</td>
                                                <td>{{$agent->middle_name}}</td>
                                                <td>{{$agent->last_name}}</td>
                                                <td>{{$agent->phone}}</td>
                                                <td>{{$agent->mobile}}</td>
                                                <td>{{$agent->email}}</td>
                                                <td>{{$agent->type}}</td>
                                                <td>{{$agent->company->name}}</td>
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
@section('datatable')
   <script>
      $(document).ready(function () {
            $('#agent_list').DataTable({
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
 