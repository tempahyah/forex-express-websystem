@extends('layouts.app')

@section('content')
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-9 float-sm-left">
                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-justify">
                        <h1 class="display-4">Add Forex Rate</h1>
                    </div>
                    <div class="container-fluid col-md-12 col-lg-12 col-sm-12">
                        <form method="POST" action="{{ route('rates.store') }}">
                            {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label for="bureau-content"><strong> Select Forex Bureau </strong><span class="required" style="color:red">*</span></label>
                                    <select name="bureau_id" class="form-control" style="width:600px">
                                      <option>--Select Forex Bureau--</option>
                                      @foreach ($bureaus as $bureau)
                                        <option value="{{ $bureau->id }}">{{ $bureau->name }}</option>
                                      @endforeach
                                      
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                        <label for="bureau-content"><strong> Select Currency </strong><span class="required" style="color:red">*</span></label>
                                        <select name="currency_id" class="form-control" style="width:600px">
                                          <option>--Select Currency--</option>
                                          @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}">{{ $currency->currency }}</option>
                                          @endforeach
                                          
                                        </select>
                                </div>

                                <br>
                                <div class="form-group">
                                        <label for="bureau-content"><strong> Buying or Selling </strong><span class="required" style="color:red">*</span></label>
                                        <select name="mode_id" class="form-control" style="width:600px">
                                          <option>--Select Either Buying or Selling--</option>
                                          @foreach ($modes as $mode)
                                            <option value="{{ $mode->id }}">{{ $mode->mode }}</option>
                                          @endforeach
                                          
                                        </select>
                                </div>
                                <br>
                                <div class="form-group">
                                        <label for="rate"><strong> Forex Rate</strong><span class="required" style="color:red">*</span></label>
                                        <input placeholder="Input Rate. . ."
                                                id="rate"
                                                required
                                                name="rate"
                                              
                                                style="width:600px"
                                                spellcheck="false"
                                                class="form-control"
                                        
                                                />
                                    </div>
            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </div>
                        </form>
                </div>
            </div>
        </div>    
    </div>
@endsection