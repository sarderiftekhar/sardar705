@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
            <form class="form" method="POST" action="{{route('companies.store')}}" enctype="multipart/form-data">
               @csrf
               <section class="section">
                  <div class="row" style="margin:auto;">
                     <div class="card card-primary" style="margin:auto;">
                        <div class="card-header">
                        <h4 style="margin:auto;">New Company Registration</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="name">Company Name*</label>
                              <input type="text" class="form-control" id="name" placeholder="Company Name" name="name" value="{{old('name')}}" required>
                              @if($errors->has('name'))
                               <p class="help text-danger">{{$errors->first('name')}}</p>
                              @endif
                           </div>
                       </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="address_line_1">Address Line1*</label>
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
                              <input type="text" class="form-control" id="address_line_3" placeholder="Street name" name="address_line_3" value="{{old('address_line_3')}}">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="city">City*</label>
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
                              <label for="inputProvince">Province</label>
                              <select id="inputProvince" class="form-control" name="province">
                              <option selected>Choose...</option>
                              <option value="Alberta" {{ old('province') == "Alberta" ? 'selected' : '' }}>Alberta</option>
                              <option value="British Columbia" {{ old('province') == "British Columbia" ? 'selected' : '' }}>British Columbia</option>
                              <option value="Manitoba" {{ old('province') == "Manitoba" ? 'selected' : '' }}>Manitoba</option>
                              <option value="New Brunswickc" {{ old('province') == "New Brunswickc" ? 'selected' : '' }}>New Brunswickc</option>
                              <option value="Newfoundland and Labrador" {{ old('province') == "Newfoundland and Labrador" ? 'selected' : '' }}>Newfoundland and Labrador</option>
                              <option value="Northwest Territories" {{ old('province') == "Northwest Territories" ? 'selected' : '' }}>Northwest Territories</option>
                              <option value="Nova Scotia" {{ old('province') == "Nova Scotia" ? 'selected' : '' }}>Nova Scotia</option>
                              <option value="Nunavut" {{ old('province') == "Nunavut" ? 'selected' : '' }}>Nunavut</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputZip">Zip*</label>
                              <input type="text" class="form-control" id="inputZip" name="zip_code" value="{{old('zip_code')}}" required>
                              @if($errors->has('zip_code'))
                                    <p class="help text-danger">{{$errors->first('zip_code')}}</p>
                              @endif
                           </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                       <label for="phone_number">Phone Number*</label><br>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                             </div>
                                          </div>
                                          <input type="number" class="form-control phone-number" name="phone_number" value="{{old('phone_number')}}" required>
                                       </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="fax">Fax Number</label><br>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <i class="fas fa-phone"></i>
                                       </div>
                                       </div>
                                       <input type="number" class="form-control phone-number" name="fax" value="{{old('fax')}}">
                                    </div>
                                    @if($errors->has('fax'))
                                       <p class="help text-danger">{{$errors->first('fax')}}</p>
                                    @endif
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                    <label for="email">Email*</label><br>
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
                                 <label for="website">Website*</label>
                                 <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" required>
                                 @if($errors->has('website'))
                                       <p class="help text-danger">{{$errors->first('website')}}</p>
                                 @endif
                              </div>
                           </div>
                           <div class="form-row">
                              <label>Notes</label>
                              <div class="form-group col-md-12">
                              <textarea type="text" class="form-control" id="note" name="notes" />{{old('notes')}}</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer">
                              <button class="btn btn-danger" href="#" style="float:left;">Cancel</button>
                              <button class="btn btn-primary" type="submit" style="float:right;">Submit</button>
                        </div>
                     </div>
                  </div>
               </section>
            </form>
      </div>

   @if(Session::has('message'))
         <script>
               swal("Company saved successfully!");
         </script>
   @endif
@stop

 