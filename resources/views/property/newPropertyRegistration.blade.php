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
                        <h4 style="margin:auto;">New Property registration</h4>
                        </div>
                        <div class="card-body">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="mls">MLS Number</label>
                                 <input type="text" class="form-control" id="mls" placeholder="MLS" name="mls" value="{{old('mls')}}" required>
                                 @if($errors->has('mls'))
                                 <p class="help text-danger">{{$errors->first('mls')}}</p>
                              @endif
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="price">Price</label>
                                 <input type="number" class="form-control" id="price"
                                    placeholder="$ Price of the property" name="price" value="{{old('price')}}">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="bedrooms">Number of bedrooms</label>
                                 <input type="number" class="form-control" id="bedrooms" placeholder="Number of bedrooms" name="bedrooms" value="{{old('bedrooms')}}" required>
                                 @if($errors->has('bedrooms'))
                                    <p class="help text-danger">{{$errors->first('bedrooms')}}</p>
                                  @endif
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="bathrooms">Bathrooms</label>
                                 <input type="number" class="form-control" id="bathrooms"
                                    placeholder="Number of bathrooms" name="bathrooms" value="{{old('bathrooms')}}">
                                 @if($errors->has('bathrooms'))
                                    <p class="help text-danger">{{$errors->first('bathrooms')}}</p>
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
                                       <input type="text" class="form-control" id="address_line_3" placeholder="Street name" name="address_line_3" value="{{old('address_line_3')}}">
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
                                 <label for="document1">Upload document 1</label><br>
                                 <div class="input-group" style="border:1px solid rgb(230, 232, 235);padding:0.5em;">
                                    <input type="file" name="document1" id="document1" name="document1">
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="document2">Upload document 2</label><br>
                                 <div class="input-group" style="border:1px solid rgb(230, 232, 235);padding:0.5em;">
                                    <input type="file" name="document2" id="document2" name="document2">
                                 </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="document3">Upload document 3</label><br>
                                 <div class="input-group" style="border:1px solid rgb(230, 232, 235);padding:0.5em;">
                                    <input type="file" name="document3" id="document3" name="document3">
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="city">Agent responsible</label>
                                    <select id="city" class="form-control" name="agent_id" required>
                                       <option selected>Choose...</option>
                                       @foreach ($agents as $agent)
                                          <option value="$agent_id">{{$agent->first_name}} {{$agent->last_name}}</option>
                                       @endforeach
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
                                 <label>Notes for the property</label>
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
               swal("Agent saved successfully!");
         </script>
   @endif
@stop

 