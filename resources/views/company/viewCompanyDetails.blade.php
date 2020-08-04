@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
              <section class="section">
                  <div class="row">
                     <div class="col-md-6" style="margin:auto;">
                        <div class="card card-primary" style="margin:auto;">
                           <div class="card-header">
                           <h4 style="margin:auto;">Details of {{$company->name}}</h4>
                           </div>
                           <div class="card-body">
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="name">Company Name*</label>
                                 <input type="text" class="form-control" id="name" placeholder="Company Name" name="name" value="{{$company->name}}" readonly>
                              </div>
                        </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="address_line_1">Address Line1*</label>
                                 <input type="text" class="form-control" id="address_line_1" placeholder="1234 Main St" name="address_line_1" value="{{$company->address_line_1}}" readonly> 
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="address_line_2">Address Line 2</label>
                                 <input type="text" class="form-control" id="address_line_2"
                                    placeholder="Apartment, studio, or floor" name="address_line_2" value="{{$company->address_line_2}}"" readonly>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="address_line_3">Address Line 3</label>
                                 <input type="text" class="form-control" id="address_line_3" placeholder="Street name" name="address_line_3" value="{{$company->address_line_3}}" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="city">City*</label>
                                 <select id="city" class="form-control" name="city" readonly>
                                    <option value="Ottawa" {{ $company->city == "Ottawa" ? 'selected' : '' }}>Ottawa</option>
                                    <option value="Edmonton" {{ $company->city == "Edmonton" ? 'selected' : '' }}>Edmonton</option>
                                    <option value="Victoria" {{ $company->city == "Victoria" ? 'selected' : '' }}>Victoria</option>
                                    <option value="Winnipeg" {{ $company->city == "Winnipeg" ? 'selected' : '' }}>Winnipeg</option>
                                    <option value="Fredericton" {{ $company->city == "Fredericton" ? 'selected' : '' }}>Fredericton</option>
                                    <option value="St. John's" {{ $company->city == "St. John's" ? 'selected' : '' }}>St. John's</option>
                                    <option value="Halifax" {{ $company->city == "Halifax" ? 'selected' : '' }}>Halifax</option>
                                    <option value="Toronto" {{ $company->city == "Toronto" ? 'selected' : '' }}>Toronto</option>
                                    <option value="Charlottetown" {{ $company->city == "Charlottetown" ? 'selected' : '' }}>Charlottetown</option>
                                    <option value="Quebec City" {{ $company->city == "Quebec City" ? 'selected' : '' }}>Quebec City</option>
                                    <option value="Regina" {{ $company->city == "Regina" ? 'selected' : '' }}>Regina</option>
                                    <option value="Yellowknife" {{ $company->city == "Yellowknife" ? 'selected' : '' }}>Yellowknife</option>
                                    <option value="Iqaluit" {{ $company->city == "Iqaluit" ? 'selected' : '' }}>Iqaluit</option>
                                    <option value="Whitehorse" {{ $company->city == "Whitehorse" ? 'selected' : '' }}>Whitehorse</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputProvince">Province</label>
                                 <select id="inputProvince" class="form-control" name="province" readonly>
                                 <option value="Alberta" {{ $company->province}} == "Alberta" ? 'selected' : '' }}>Alberta</option>
                                 <option value="British Columbia" {{ $company->province}} == "British Columbia" ? 'selected' : '' }}>British Columbia</option>
                                 <option value="Manitoba" {{ $company->province}} == "Manitoba" ? 'selected' : '' }}>Manitoba</option>
                                 <option value="New Brunswickc" {{ $company->province}} == "New Brunswickc" ? 'selected' : '' }}>New Brunswickc</option>
                                 <option value="Newfoundland and Labrador" {{ $company->province}} == "Newfoundland and Labrador" ? 'selected' : '' }}>Newfoundland and Labrador</option>
                                 <option value="Northwest Territories" {{ $company->province}} == "Northwest Territories" ? 'selected' : '' }}>Northwest Territories</option>
                                 <option value="Nova Scotia" {{ $company->province}} == "Nova Scotia" ? 'selected' : '' }}>Nova Scotia</option>
                                 <option value="Nunavut" {{ $company->province}} == "Nunavut" ? 'selected' : '' }}>Nunavut</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputZip">Zip*</label>
                                 <input type="text" class="form-control" id="inputZip" name="zip" value="{{$company->zip}}" readonly>
                              </div>
                           </div>
                           <div class="form-row">
                                 <div class="form-group col-md-6">
                                          <label for="phone">Phone Number*</label><br>
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                   <i class="fas fa-phone"></i>
                                                </div>
                                             </div>
                                             <input type="number" class="form-control phone" name="phone" value="{{$company->phone}}" readonly>
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
                                          <input type="number" class="form-control phone-number" name="fax" value="{{$company->fax}}" readonly>
                                       </div>
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
                                          <input type="email" class="form-control email" name="email" value="{{$company->email}}" readonly>
                                       </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="website">Website*</label>
                                    <input type="text" class="form-control" id="website" name="website" value="{{$company->website}}" readonly>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <label>Notes</label>
                                 <div class="form-group col-md-12">
                                 <textarea type="text" class="form-control" id="note" name="notes" readonly/>{{$company->notes}}</textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <div style="float:right;">
                                 <a class="btn btn-danger" href="/companies">Go back</a>
                              </div>
                           </div>
                        </div>
                  </div>
                  </div>
               </section>
            </form>
      </div>
@stop

 