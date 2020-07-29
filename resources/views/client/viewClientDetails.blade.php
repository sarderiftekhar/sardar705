@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
               <section class="section">
                  <div class="row" style="margin:auto;">
                     <div class="card card-primary col-md-6" style="margin:auto;">
                        <div class="card-header">
                           <h4 style="margin:auto;margin-left:17em;">{{$client->first_name}} {{$client->last_name}}</h4>
                           <a style="float:right;" class="btn btn-primary" href="{{route('clients.index')}}">
                              Back
                           </a>
                        </div>
                     <div class="card-body">
                        <div class="form-row">
                           <div class="form-group col-md-12 text-center" style="margin:auto;">
                              <img src= "{{ Storage::disk('public')->url($client->client_photograph) }}" width="250px" height="250px" style="border:1px solid cornflowerblue;">
                           </div>
                        </div>
                        <br>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" id="title" value="{{$client->title}}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="marital_status">Marital status</label>
                              <input type="text" class="form-control" id="marital_status" value="{{$client->marital_status}}" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="first_name">First Name</label>
                              <input type="text" class="form-control" id="first_name" value="{{$client->first_name}}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="middle_name">Middle Name</label>
                              <input type="text" class="form-control" id="middle_name" value="{{$client->middle_name}}" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control" id="last_name" value="{{$client->last_name}}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="address_line_1">Address Line1</label>
                              <input type="text" class="form-control" id="address_line_1" value="{{$client->address_line_1}}" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="address_line_2">Address Line 2</label>
                              <input type="text" class="form-control" id="address_line_2" value="{{$client->address_line_2}}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="address_line_3">Address Line 3</label>
                              <input type="text" class="form-control" id="address_line_3" value="{{$client->address_line_3}}" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="province">Province</label>
                              <input type="text" class="form-control" id="province" value="{{$client->province}}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="city">City</label>
                              <input type="text" class="form-control" id="city" value="{{$client->city}}" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="zip_code">Zip</label>
                              <input type="text" class="form-control" id="zip_code" value="{{$client->zip_code}}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="country">Country</label>
                              <input type="text" class="form-control" id="country" value="{{$client->country}}" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Date of birth</label>
                              <input type="date" class="form-control datepicker" name="date_of_birth" value="{{$client->date_of_birth}}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                              <label>Marriage Day </label>
                              <input type="date" class="form-control datepicker" name="marriage_day" value="{{$client->marriage_day}}" readonly>
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
                                          <input type="text" class="form-control phone-number" name="phone_number" value="{{$client->phone_number}}" readonly>
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
                                       <input type="text" class="form-control phone-number="mobile_number" value="{{$client->mobile_number}}" readonly>
                                    </div>
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
                                       <input type="text" class="form-control phone-number" name="work_phone_number" value="{{$client->work_phone_number}}" readonly>
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
                                    <input type="text" class="form-control extension" name="extension" value="{{$client->extension}}" readonly>
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
                                       <input type="email" class="form-control email" name="email" value="{{$client->email}}" readonly> 
                                    </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="source_of_origin">Source of origin</label>
                                 <input type="text" class="form-control" name="source_of_origin" value="{{$client->source_of_origin}}" readonly> 
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="client_type">Client Type</label>
                                 <input type="text" class="form-control client_type" name="client_type" value="{{$client->client_type}}" readonly> 
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="agent">Agent reference</label>
                                    <input type="text" class="form-control" name="agent" value="{{$client->agent->first_name}}" readonly> 
                              </div>
                             </div>

                              <div class="form-row">
                                 <label>Notes for the client</label>
                                 <div class="form-group col-md-12">
                                    <textarea type="text" class="form-control" id="note" name="notes" rows="12" cols="50" readonly/> {{$client->notes}}</textarea>
                                 </div>
                              </div>
                        </div>
                     <div class="card-footer">
                           <a style="float:right;" class="btn btn-primary" href="{{route('clients.index')}}">
                              Go back
                           </a>
                     </div>
                     </div>
                  </div>
               </section>
      </div>
@stop

 