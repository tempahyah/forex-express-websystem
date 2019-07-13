@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-sm-12 col-xl-6 ">
                <div class="card">
                    <div class="card-header bg-primary text-white">Convert Currency</div>
                    <div class="card-body">
                            <form method="POST" action="">
                                    {{ csrf_field() }}
                                    
                                        <div class="form-group">
                                            <label for="bureau-content"><strong> Select Forex Bureau </strong></label>
                                            <select name="bureau_id" class="form-control">
                                              <option>--Select Forex Bureau--</option>
                                              @foreach ($bureaus as $bureau)
                                                <option value="{{ $bureau->id }}">{{ $bureau->name }}</option>
                                              @endforeach
                                              
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                                <label for="bureau-content"><strong> Select Currency </strong></label>
                                                <select name="currency_id" class="form-control">
                                                  <option>--Select Currency--</option>
                                                  @foreach ($currencies as $currency)
                                                    <option value="{{ $currency->id }}">{{ $currency->currency }}</option>
                                                  @endforeach
                                                  
                                                </select>
                                        </div>
        
                                        <br>
                                        <div class="form-group">
                                                <label for="bureau-content"><strong> Buying or Selling </strong></label>
                                                <select name="mode_id" class="form-control">
                                                  <option>--Select Either Buying or Selling--</option>
                                                  @foreach ($modes as $mode)
                                                    <option value="{{ $mode->id }}">{{ $mode->mode }}</option>
                                                  @endforeach
                                                  
                                                </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                                <label for="rate"><strong> Current Rate </strong></label>
                                                <input placeholder="Current Rate"
                                                        id="rate"
                                                        required
                                                        name="rate"
                                                        type="number"
                                                        disabled="false"
                                                        class="form-control"
                                                        value=""
                                                        />
                                        </div> <br>

                                        <div class="form-group">
                                                <label for="amount"><strong> Amount </strong></label>
                                                <input placeholder="Input Amount to be converted. . ."
                                                        id="amount"
                                                        required
                                                        name="amount"
                                                        type="number"
                                                        spellcheck="false"
                                                        class="form-control"
                                                
                                                        />
                                            </div> <br>
                                        
                                            <div class="form-group">
                                                <label for="convert"><strong> Converted Amount</strong></label>
                                                <input  placeholder="Results"
                                                        id="convert"
                                                        required
                                                        name="convert"
                                                        disabled="disabled"
                                                        type="number"
                                                        spellcheck="false"
                                                        class="form-control"/>
                                            </div>
                    
                                    <div class="form-group float-right">
                                        <input type="button" class="btn btn-primary" value="Convert"/>
                                    </div>
                                </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
@endsection