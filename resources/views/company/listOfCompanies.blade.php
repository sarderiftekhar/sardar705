@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
               <section class="section">
                 <div class="section-body">
                        <div class="col-12">
                           <div class="card card-secondary">
                              <div class="card-header">
                                 <h4>List of Companies</h4>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                 <table class="table table-striped display" id="company_list"  style="width:100%">
                                    <thead>
                                       <tr>
                                             <th>ID</th>
                                             <th>Company Name</th>
                                             <th>Address Line1</th>
                                             <th>Address Line 2</th>
                                             <th>Address Line 3</th>
                                             <th>City</th>
                                             <th>State</th>
                                             <th>Zip</th>
                                             <th>Phone</th>
                                             <th>Fax</th>
                                             <th>Email</th>
                                             <th>Website</th>
                                             <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($companies as $company)
                                             <tr>
                                                <td>{{$company->id}}</td>
                                                <td>{{$company->name}}</td>
                                                <td>{{$company->address_line_1}}</td>
                                                <td>{{$company->address_line_2}}</td>
                                                <td>{{$company->address_line_3}}</td>
                                                <td>{{$company->city}}</td>
                                                <td>{{$company->state}}</td>
                                                <td>{{$company->zip_code}}</td>
                                                <td>{{$company->phone}}</td>
                                                <td>{{$company->fax}}</td>
                                                <td>{{$company->email}}</td>
                                                <td>{{$company->website}}</td>
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
         $('#company_list').DataTable({
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