@extends('layouts.body')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
            <form class="form" method="POST" action="{{route('agents.store')}}" enctype="multipart/form-data">
               @csrf
               <section class="section">
                  <div class="row" >
                     <div class="col-md-6" style="margin:auto;">
                        <div class="card card-primary" style="margin:auto;">
                           <div class="card-header">
                           <h4 style="margin:auto;">New Agent Registration</h4>
                           </div>
                        <div class="card-body">
                        <div class="form-row">
                              <div class="form-group col-md-6">
                              <label for="title">Title*</label>
                              <select id="title" class="form-control" name="title">
                                 <option selected>Choose...</option>
                                 <option value="mr">Mr</option>
                                 <option value="mrs">Mrs</option>
                                 <option value="ms">Ms</option>
                              </select>
                              
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="first_name">First Name*</label>
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
                              <label for="last_name">Last Name*</label>
                              <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name" value="{{old('last_name')}}" required>
                                 @if($errors->has('last_name'))
                                       <p class="help text-danger">{{$errors->first('last_name')}}</p>
                                 @endif
                           </div>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                       <label for="phone">Phone Number</label><br>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                             </div>
                                          </div>
                                          <input type="number" class="form-control phone" name="phone" value="{{old('phone')}}">
                                       </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="mobile">Cell Number*</label><br>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <i class="fas fa-phone"></i>
                                       </div>
                                       </div>
                                       <input type="number" class="form-control mobile" name="mobile" value="{{old('mobile')}}" required> 
                                    </div>
                                    @if($errors->has('mobile'))
                                       <p class="help text-danger">{{$errors->first('mobile')}}</p>
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
                                 <label for="photograph">Agent Photograph</label><br>
                                 <div class="input-group" style="border:1px solid rgb(230, 232, 235);padding:0.5em;">
                                    <input type="file" name="photograph" id="photograph">
                                 </div>
                              </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="designation">Designation*</label>
                              <select id="designation" class="form-control" name="designation" required>
                                 <option selected>Choose...</option>
                                 <option value="Seller" {{ old('designation') == "Sales Person" ? 'selected' : '' }}>Sales Person</option>
                                 <option value="Buyer" {{ old('designation') == "Broker" ? 'selected' : '' }}>Broker</option>
                                 <option value="Both" {{ old('designation') == "Broker of record" ? 'selected' : '' }}>Broker of record</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="city">Area Covers* (Multiple selection available)</label>
                              <select class="form-control selectric" multiple="" name="area" required>
                              {{-- <select id="area" class="form-control" name="area" required> --}}
                                 <option value="" selected>Choose...</option>
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
                              @if($errors->has('city'))
                                       <p class="help text-danger">{{$errors->first('city')}}</p>
                              @endif
                           </div>
                     </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="type">Agent Type*</label>
                              <select id="type" class="form-control" name="type" required>
                                 <option selected>Choose...</option>
                                 <option value="Seller" {{ old('type') == "Seller" ? 'selected' : '' }}>Seller</option>
                                 <option value="Buyer" {{ old('type') == "Buyer" ? 'selected' : '' }}>Buyer</option>
                                 <option value="Both" {{ old('type') == "Both" ? 'selected' : '' }}>Both</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                                 <label for="company_id">Company registered with*</label>
                                 <select id="company_id" class="form-control" name="company_id" required>
                                    <option selected>Choose...</option>
                                    @foreach ($companies as $company)
                                       <option value="{{$company->id}}">{{$company->name}}</option>
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
                           <a class="btn btn-danger" href="/agents" style="float:left;">Cancel</a>
                           <button class="btn btn-primary" type="submit" style="float:right;">Submit</button>
                           </div>
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

 