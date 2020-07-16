@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
            <form class="form" method="POST" action="{{route('saveClient')}}">
               @csrf
               <section class="section">
                  <div class="row" style="margin:auto;">
                     <div class="card card-primary" style="margin:auto;">
                        <div class="card-header">
                        <h4 style="margin:auto;">New client registration</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-row">
                              <div class="form-group col-md-4">
                              <label for="title">Title</label>
                              <select id="title" class="form-control" name="title">
                                 <option selected>Choose...</option>
                                 <option value="mr">Mr</option>
                                 <option value="mrs">Mrs</option>
                                 <option value="ms">Ms</option>
                              </select>
                              </div>
                           </div>
                           <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="first_name">First Name</label>
                              <input type="text" class="form-control" id="first_name" placeholder="First_name" name="first_name">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address_line_1">Address Line1</label>
                           <input type="text" class="form-control" id="address_line_1" placeholder="1234 Main St" name="address_line_1">
                        </div>
                        <div class="form-group">
                           <label for="address_line_2">Address Line 2</label>
                           <input type="text" class="form-control" id="address_line_2"
                              placeholder="Apartment, studio, or floor" name="address_line_2">
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                       <label for="phone_number">Phone Number</label><br>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                          <div class="input-group-text">
                                             <i class="fas fa-phone"></i>
                                          </div>
                                          </div>
                                          <input type="number" class="form-control phone-number" name="phone_number">
                                       </div>
                                 </div>
                              <div class="form-group col-md-6">
                                       <label for="email">Email</label><br>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                          <div class="input-group-text">
                                             <i class="fas fa-envelope"></i>
                                          </div>
                                          </div>
                                          <input type="email" class="form-control email" name="email">
                                       </div>
                              </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="city">City</label>
                              <select id="city" class="form-control" name="city">
                                 <option selected>Choose...</option>
                                 <option value="Ottawa">Ottawa</option>
                                 <option value="Edmonton">Edmonton</option>
                                 <option value="Victoria">Victoria</option>
                                 <option value="Winnipeg">Winnipeg</option>
                                 <option value="Fredericton">Fredericton</option>
                                 <option value="St. John's">St. John's</option>
                                 <option value="Halifax">Halifax</option>
                                 <option value="Halifax">Toronto</option>
                                 <option value="Charlottetown">Charlottetown</option>
                                 <option value="Quebec City">Quebec City</option>
                                 <option value="Regina">Regina</option>
                                 <option value="Yellowknife">Yellowknife</option>
                                 <option value="Iqaluit">Iqaluit</option>
                                 <option value="Whitehorse">Whitehorse</option>
                              </select>
                           </div>
                           <div class="form-group col-md-4">
                              <label for="inputState">State</label>
                              <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option value="Alberta">Alberta</option>
                              <option value="British Columbia">British Columbia</option>
                              <option value="Manitoba">Manitoba</option>
                              <option value="New Brunswickc">New Brunswick</option>
                              <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                              <option value="Northwest Territories">Northwest Territories</option>
                              <option value="Nova Scotia">Nova Scotia</option>
                              <option value="Nunavut">Nunavut</option>
                              </select>
                           </div>
                           <div class="form-group col-md-2">
                              <label for="inputZip">Zip</label>
                              <input type="text" class="form-control" id="inputZip" name="zip">
                           </div>
                        </div>
                        {{-- <div class="form-group mb-0">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                              Check me out
                              </label>
                           </div>
                        </div> --}}
                        </div>
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit" style="float:right;">Submit</button>
                        </div>
                     </div>
                  </div>
               </section>
            </form>
      </div>

   @if(Session::has('message'))
         <script>
               swal("Client saved successfully!");
         </script>
   @endif
@stop

 