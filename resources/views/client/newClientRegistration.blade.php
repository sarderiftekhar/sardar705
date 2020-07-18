@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
            <form class="form" method="POST" action="{{route('clients.store')}}" enctype="multipart/form-data">
               @csrf
               <section class="section">
                  <div class="row" style="margin:auto;">
                     <div class="card card-primary" style="margin:auto;">
                        <div class="card-header">
                        <h4 style="margin:auto;">New client registration</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-row">
                              <div class="form-group col-md-6">
                              <label for="title">Title</label>
                              <select id="title" class="form-control" name="title">
                                 <option selected>Choose...</option>
                                 <option value="mr">Mr</option>
                                 <option value="mrs">Mrs</option>
                                 <option value="ms">Ms</option>
                              </select>
                              
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="first_name">First Name</label>
                                 <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="{{old('first_name')}}" required>
                                 @if($errors->has('first_name'))
                                    <p class="help text-danger">{{$errors->first('first_name')}}</p>
                                 @endif
                              </div>
                           </div>
                           <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="first_name">Middle Name</label>
                              <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name" value="{{old('middle_name')}}">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name" value="{{old('last_name')}}" required>
                              @if($errors->has('last_name'))
                                    <p class="help text-danger">{{$errors->first('last_name')}}</p>
                              @endif
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="address_line_1">Address Line1</label>
                              <input type="text" class="form-control" id="address_line_1" placeholder="1234 Main St" name="address_line_1" value="{{old('address_line_1')}}" required>
                              @if($errors->has('address_line_1'))
                              <p class="help text-danger">{{$errors->first('address_line_1')}}</p>
                        @endif
                           </div>
                           <div class="form-group col-md-6">
                              <label for="address_line_2">Address Line 2</label>
                              <input type="text" class="form-control" id="address_line_2"
                                 placeholder="Apartment, studio, or floor" name="address_line_2" value="{{old('address_line_2')}}">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="address_line_3">Address Line 3</label>
                              <input type="text" class="form-control" id="address_line_1" placeholder="Street name" name="address_line_3" value="{{old('address_line_3')}}">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="city">City</label>
                              <select id="city" class="form-control" name="city" required>
                                 <option selected>Choose...</option>
                                 <option value="Ottawa" {{ old('city') == "Ottawa" ? 'selected' : '' }}>Ottawa</option>
                                 <option value="Edmonton" {{ old('city') == "Edmonton" ? 'selected' : '' }}>Edmonton</option>
                                 <option value="Victoria" {{ old('city') == "Victoria" ? 'selected' : '' }}>Victoria</option>
                                 <option value="Winnipeg" {{ old('city') == "Winnipeg" ? 'selected' : '' }}>Winnipeg</option>
                                 <option value="Fredericton" {{ old('city') == "Fredericton" ? 'selected' : '' }}>Fredericton</option>
                                 <option value="St. John's" {{ old('city') == "St. John's" ? 'selected' : '' }}>St. John's</option>
                                 <option value="Halifax" {{ old('city') == "Halifax" ? 'selected' : '' }}>Halifax</option>
                                 <option value="Toronto" {{ old('city') == "Toronto" ? 'selected' : '' }}>Toronto</option>
                                 <option value="Charlottetown" {{ old('city') == "Charlottetown" ? 'selected' : '' }}>Charlottetown</option>
                                 <option value="Quebec City" {{ old('city') == "Quebec City" ? 'selected' : '' }}>Quebec City</option>
                                 <option value="Regina" {{ old('city') == "Regina" ? 'selected' : '' }}>Regina</option>
                                 <option value="Yellowknife" {{ old('city') == "Yellowknife" ? 'selected' : '' }}>Yellowknife</option>
                                 <option value="Iqaluit" {{ old('city') == "Iqaluit" ? 'selected' : '' }}>Iqaluit</option>
                                 <option value="Whitehorse" {{ old('city') == "Whitehorse" ? 'selected' : '' }}>Whitehorse</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="inputState">State</label>
                              <select id="inputState" class="form-control" name="state">
                              <option selected>Choose...</option>
                              <option value="Alberta" {{ old('state') == "Alberta" ? 'selected' : '' }}>Alberta</option>
                              <option value="British Columbia" {{ old('state') == "British Columbia" ? 'selected' : '' }}>British Columbia</option>
                              <option value="Manitoba" {{ old('state') == "Manitoba" ? 'selected' : '' }}>Manitoba</option>
                              <option value="New Brunswickc" {{ old('state') == "New Brunswickc" ? 'selected' : '' }}>New Brunswickc</option>
                              <option value="Newfoundland and Labrador" {{ old('state') == "Newfoundland and Labrador" ? 'selected' : '' }}>Newfoundland and Labrador</option>
                              <option value="Northwest Territories" {{ old('state') == "Northwest Territories" ? 'selected' : '' }}>Northwest Territories</option>
                              <option value="Nova Scotia" {{ old('state') == "Nova Scotia" ? 'selected' : '' }}>Nova Scotia</option>
                              <option value="Nunavut" {{ old('state') == "Nunavut" ? 'selected' : '' }}>Nunavut</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputZip">Zip</label>
                              <input type="text" class="form-control" id="inputZip" name="zip_code" value="{{old('zip_code')}}">
                              @if($errors->has('zip_code'))
                                    <p class="help text-danger">{{$errors->first('zip_code')}}</p>
                              @endif
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Date of birth</label>
                              <input type="date" class="form-control datepicker" name="date_of_birth" value="{{old('date_of_birth')}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label>Marriage Day </label>
                              <input type="date" class="form-control datepicker" name="marriage_day" value="{{old('marriage_day')}}">
                            </div>
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
                                          <input type="number" class="form-control phone-number" name="phone_number" value="{{old('phone_number')}}">
                                       </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="phone_number">Cell Number</label><br>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <i class="fas fa-phone"></i>
                                       </div>
                                       </div>
                                       <input type="number" class="form-control phone-number" name="mobile_number" value="{{old('mobile_number')}}"> 
                                    </div>
                                    @if($errors->has('mobile_number'))
                                       <p class="help text-danger">{{$errors->first('mobile_number')}}</p>
                                    @endif
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                    <label for="email">Email</label><br>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <i class="fas fa-envelope"></i>
                                       </div>
                                       </div>
                                       <input type="email" class="form-control email" name="email" value="{{old('email')}}" required> 
                                    </div>
                                    @if($errors->has('email'))
                                       <p class="help text-danger">{{$errors->first('email')}}</p>
                                    @endif
                              </div>
                              
                              <div class="form-group col-md-6">
                                 <label for="client_photograph">Client Photograph</label><br>
                                 <div class="input-group" style="border:1px solid rgb(230, 232, 235);padding:0.5em;">
                                    <input type="file" name="client_photograph" id="photograph" name="photograph">
                                 </div>
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="client_type">Client Type</label>
                                 <select id="city" class="form-control" name="client_type" required>
                                    <option selected>Choose...</option>
                                    <option value="Seller" {{ old('client_type') == "Seller" ? 'selected' : '' }}>Seller</option>
                                    <option value="Buyer" {{ old('client_type') == "Buyer" ? 'selected' : '' }}>Buyer</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="city">Agent reference</label>
                                    <select id="city" class="form-control" name="agent_id" required>
                                       <option selected>Choose...</option>
                                       @foreach ($agents as $agent)
                                          <option value="$agent_id">{{$agent->first_name}} {{$agent->last_name}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <label>Notes for the client</label>
                                 <div class="form-group col-md-12">
                                    <textarea type="text" class="form-control" id="note" name="notes" />{{old('notes')}}</textarea>
                                 </div>
                              </div>
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

 