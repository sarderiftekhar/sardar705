@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
            <form class="form" method="POST" action="{{route('clients.update',$client)}}" enctype="multipart/form-data">
               @csrf @method('PATCH')
               <section class="section">
                  <div class="row" style="margin:auto;">
                     <div class="card card-primary" style="margin:auto;">
                        <div class="card-header">
                        <h4 style="margin:auto;">Edit details of {{$client->first_name}} {{$client->last_name}}</h4>
                        </div>
                     <div class="card-body">
                        <div class="form-row">
                           <div class="form-group col-md-12 text-center" style="margin:auto;">
                              <img src= "{{ Storage::disk('public')->url($client->client_photograph) }}" alt="Photograph not present" width="250px" height="250px" style="border:1px solid cornflowerblue;">
                           </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                    <div class="section-title">Title</div>
                                    <div class="pretty p-default p-round">
                                       <input type="radio" name="title" value="Mr" {{ $client->title == 'Mr' ? 'checked' : ''}}>
                                       <div class="state">
                                          <label>Mr</label>
                                       </div>
                                    </div>
                                    <div class="pretty p-default p-round">
                                       <input type="radio" name="title" value="Mrs" {{ $client->title == 'Mrs' ? 'checked' : ''}}>
                                       <div class="state">
                                          <label>Mrs</label>
                                       </div>
                                    </div>
                                    <div class="pretty p-default p-round">
                                       <input type="radio" name="title" value="Ms" {{ $client->title == 'Ms' ? 'checked' : ''}}>
                                       <div class="state">
                                          <label>Ms</label>
                                       </div>
                                    </div>
                              </div>
                              <div class="form-group col-md-6">
                                    <div class="section-title">Marital status</div>
                                    <div class="pretty p-icon p-round p-plain p-smooth">
                                       <input type="radio" name="marital_status" value="Single" {{ $client->marital_status == 'Single' ? 'checked' : ''}}>
                                       <div class="state p-primary-o">
                                          <i class="icon material-icons">accessibility</i>
                                          <label>Single</label>
                                       </div>
                                    </div>
                                    <div class="pretty p-icon p-round p-plain p-smooth">
                                       <input type="radio" name="marital_status" value="Married" {{ $client->marital_status == 'Married' ? 'checked' : ''}}>
                                       <div class="state p-info-o">
                                          <i class="icon material-icons">supervisor_account</i>
                                          <label>Married</label>
                                       </div>
                                    </div>
                                    <div class="pretty p-icon p-round p-plain p-smooth">
                                       <input type="radio" name="marital_status" value="In relation" {{ $client->marital_status == 'In relation' ? 'checked' : ''}}>
                                       <div class="state p-success-o">
                                          <i class="icon material-icons">favorite</i>
                                          <label>In relation</label>
                                       </div>
                                    </div>
                              </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="first_name">First Name</label>
                              <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="{{$client->first_name}}" required>
                              @if($errors->has('first_name'))
                                 <p class="help text-danger">{{$errors->first('first_name')}}</p>
                              @endif
                           </div>
                           <div class="form-group col-md-6">
                              <label for="first_name">Middle Name</label>
                              <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name" value="{{$client->middle_name}}">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name" value="{{$client->last_name}}" required>
                              @if($errors->has('last_name'))
                                    <p class="help text-danger">{{$errors->first('last_name')}}</p>
                              @endif
                           </div>
                           <div class="form-group col-md-6">
                              <label for="address_line_1">Address Line1</label>
                              <input type="text" class="form-control" id="address_line_1" placeholder="1234 Main St" name="address_line_1" value="{{$client->address_line_1}}" required>
                              @if($errors->has('address_line_1'))
                              <p class="help text-danger">{{$errors->first('address_line_1')}}</p>
                            @endif
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="address_line_2">Address Line 2</label>
                              <input type="text" class="form-control" id="address_line_2"
                                 placeholder="Apartment, studio, or floor" name="address_line_2" value="{{$client->address_line_2}}">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="address_line_3">Address Line 3</label>
                              <input type="text" class="form-control" id="address_line_1" placeholder="Street name" name="address_line_3" value="{{$client->address_line_3}}">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="inputState">Province</label>
                              <select id="inputProvince" class="form-control" name="province">
                              <option value="Alberta" {{ $client->province == "Alberta" ? 'selected' : '' }}>Alberta</option>
                              <option value="British Columbia" {{ $client->province == "British Columbia" ? 'selected' : '' }}>British Columbia</option>
                              <option value="Manitoba" {{ $client->province == "Manitoba" ? 'selected' : '' }}>Manitoba</option>
                              <option value="New Brunswickc" {{ $client->province == "New Brunswickc" ? 'selected' : '' }}>New Brunswickc</option>
                              <option value="Newfoundland and Labrador" {{ $client->province == "Newfoundland and Labrador" ? 'selected' : '' }}>Newfoundland and Labrador</option>
                              <option value="Northwest Territories" {{ $client->province == "Northwest Territories" ? 'selected' : '' }}>Northwest Territories</option>
                              <option value="Nova Scotia" {{ $client->province == "Nova Scotia" ? 'selected' : '' }}>Nova Scotia</option>
                              <option value="Nunavut" {{ $client->province == "Nunavut" ? 'selected' : '' }}>Nunavut</option>
                              </select>
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
                              <label for="inputZip">Zip</label>
                              <input type="text" class="form-control" id="inputZip" name="zip_code" value="{{$client->zip_code}}">
                              @if($errors->has('zip_code'))
                                    <p class="help text-danger">{{$errors->first('zip_code')}}</p>
                              @endif
                           </div>
                           <div class="form-group col-md-6">
                              <label for="country">Country</label>
                              <select id="country" class="form-control" name="country">
                              <option value="Canada" {{ $client->country == "Canada" ? 'selected' : '' }} selected>Canada</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Date of birth</label>
                              <input type="date" class="form-control datepicker" name="date_of_birth" value="{{$client->date_of_birth}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label>Marriage Day </label>
                              <input type="date" class="form-control datepicker" name="marriage_day" value="{{$client->marriage_day}}">
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
                                          <input type="text" class="form-control phone-number" name="phone_number" value="{{$client->phone_number}}">
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
                                       <input type="text" class="form-control phone-number" name="mobile_number" value="{{$client->mobile_number}}"> 
                                    </div>
                                    @if($errors->has('mobile_number'))
                                       <p class="help text-danger">{{$errors->first('mobile_number')}}</p>
                                    @endif
                              </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                                    <label for="work_phone_number">Work Telephone</label><br>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text">
                                             <i class="fas fa-phone"></i>
                                          </div>
                                       </div>
                                       <input type="text" class="form-control phone-number" name="work_phone_number" value="{{$client->work_phone_number}}">
                                    </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Extension">Extension</label><br>
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fas fa-phone"></i>
                                    </div>
                                    </div>
                                    <input type="text" class="form-control extension" name="extension" value="{{$client->extension}}">
                                 </div>
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
                                       <input type="email" class="form-control email" name="email" value="{{$client->email}}" required> 
                                    </div>
                                    @if($errors->has('email'))
                                       <p class="help text-danger">{{$errors->first('email')}}</p>
                                    @endif
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="client_photograph">Client Photograph</label><br>
                                    <div class="input-group" style="border:1px solid rgb(230, 232, 235);padding:0.5em;">
                                       <input type="file" name="client_photograph" id="photograph" value="{{ Storage::disk('public')->url($client->client_photograph) }}">
                                    </div>
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="client_type">Client Type</label>
                                 <select id="city" class="form-control" name="client_type" required>
                                    <option value="Seller" {{ $client->client_type == "Seller" ? 'selected' : '' }}>Seller</option>
                                    <option value="Buyer" {{ $client->client_type == "Buyer" ? 'selected' : '' }}>Buyer</option>
                                    <option value="Lease Land Lord" {{ $client->client_type == "Lease-Land-Lord" ? 'selected' : '' }}>Lease Land Lord</option>
                                    <option value="Lease Tenant" {{ $client->client_type == "Lease-Tenant" ? 'selected' : '' }}>Lease Tenant</option>
                                    <option value="Commercial Seller" {{ $client->client_type == "Commercial Seller" ? 'selected' : '' }}>Commercial Seller</option>
                                    <option value="Commercial Buyer" {{ $client->client_type == "Commercial Buyer" ? 'selected' : '' }}> Commercial Buyer</option>
                                    <option value="Commercial Lease Land Lord " {{ $client->client_type == "Commercial Lease Land Lord" ? 'selected' : '' }}>Commercial Lease Land Lord</option>
                                    <option value="Commercial Lease Tenant" {{ $client->client_type == "Commercial Lease Tenant" ? 'selected' : '' }}>Commercial Lease Tenant</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="city">Agent reference</label>
                                    <select id="city" class="form-control" name="agent_id" required>
                                       @foreach ($agents as $agent)
                                          <option value="{{$agent->id}}" {{ $client->agent_id == $agent->id ? 'selected':''}}>{{$agent->first_name}} {{$agent->last_name}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <label for="city">Source of origin</label>
                                    <div class="form-group col-md-12">
                                       <div class="pretty p-default p-curve">
                                          <input type="radio" name="source_of_origin" value="Agent Reference" {{ $client->source_of_origin == 'Agent Reference' ? 'checked' : ''}} required/>
                                          <div class="state p-primary-o">
                                             <label>Agent Reference</label>
                                          </div>
                                 </div>
                                 <div class="pretty p-default p-curve">
                                    <input type="radio" name="source_of_origin" value="Facebook" {{ $client->source_of_origin == 'Facebook' ? 'checked' : ''}}/>
                                    <div class="state p-success-o">
                                       <label>Facebook</label>
                                    </div>
                                 </div>
                                 <div class="pretty p-default p-curve">
                                    <input type="radio" name="source_of_origin" value="Word of Mouth" {{ $client->source_of_origin == 'Word of Mouth' ? 'checked' : ''}}/>
                                    <div class="state p-info-o">
                                       <label>Word of Mouth</label>
                                    </div>
                                 </div>
                                 <div class="pretty p-default p-curve">
                                    <input type="radio" name="source_of_origin" value="Website" {{ $client->source_of_origin == 'Website' ? 'checked' : ''}}/>
                                    <div class="state p-warning-o">
                                       <label>Website</label>
                                    </div>
                                 </div>
                                 <div class="pretty p-default p-curve">
                                    <input type="radio" name="source_of_origin" value="Search engine" {{ $client->source_of_origin == 'Search engine' ? 'checked' : ''}}/>
                                       <div class="state p-danger-o">
                                          <label>Search engine</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <label>Notes for the client</label>
                                 <div class="form-group col-md-12">
                                    <textarea type="text" class="form-control" id="note" name="notes" />{{$client->notes}}</textarea>
                                 </div>
                              </div>
                        </div>
                     <div class="card-footer">
                        <button class="btn btn-primary" type="submit" style="float:right;">Confirm</button>
                        <button class="btn btn-danger" style="float:left;">Cancel</button>
                        </div>
                     </div>
                  </div>
               </section>
            </form>
      </div>

   @if(Session::has('message'))
         <script>
               swal("Client details edited successfully!");
         </script>
   @endif
@stop

 