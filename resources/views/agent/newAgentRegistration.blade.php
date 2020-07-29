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
                        <h4 style="margin:auto;">New Agent registration</h4>
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
                              <div class="form-group col-md-12">
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
                        </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="client_type">Agent Type</label>
                                       <select id="city" class="form-control" name="client_type" required>
                                          <option selected>Choose...</option>
                                          <option value="Seller" {{ old('client_type') == "Seller" ? 'selected' : '' }}>Seller</option>
                                          <option value="Buyer" {{ old('client_type') == "Buyer" ? 'selected' : '' }}>Buyer</option>
                                          <option value="Both" {{ old('client_type') == "Both" ? 'selected' : '' }}>Both</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="city">Company registered with</label>
                                          <select id="city" class="form-control" name="agent_id" required>
                                             <option selected>Choose...</option>
                                             @foreach ($companies as $company)
                                                <option value="$company_id">{{$company->name}}</option>
                                             @endforeach
                                          </select>
                                    </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="client_type">Agent Type</label>
                              <select id="city" class="form-control" name="client_type" required>
                                 <option selected>Choose...</option>
                                 <option value="Seller" {{ old('client_type') == "Seller" ? 'selected' : '' }}>Seller</option>
                                 <option value="Buyer" {{ old('client_type') == "Buyer" ? 'selected' : '' }}>Buyer</option>
                                 <option value="Both" {{ old('client_type') == "Both" ? 'selected' : '' }}>Both</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                                 <label for="city">Company registered with</label>
                                 <select id="city" class="form-control" name="agent_id" required>
                                    <option selected>Choose...</option>
                                    @foreach ($companies as $company)
                                       <option value="$company_id">{{$company->name}}</option>
                                    @endforeach
                                 </select>
                           </div>
                        </div>
                        <div class="form-row">
                                 <label>Notes for the agent</label>
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

 