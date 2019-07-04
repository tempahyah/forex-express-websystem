@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-9 float-sm-left">
                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
                        <h1 class="display-4">{{ $bureau->name }}</h1>
                        <p class="lead text-justify">{{ $bureau->description }}</p>
                    </div>
        
                    <div class="card-deck mb-3 text-center">
                    
                    {{--  First Card  --}}
                    <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h4 class="my-0 font-weight-normal"><i class="fas fa-money-check-alt"></i> Buying Rates</h4>
                            </div>
                            <div class="card-body">
                                {{--  <h1 class="card-title pricing-card-title">Rates</h1>  --}}
                                <table class="table table-stripped">
                                    <tr>
                                        <th><h3 class="text-primary text-left">Currency</h3></th>
                                        <th><h3 class="text-primary text-left">Rate</h3></th>
                                    </tr>
                                    @foreach ($rates as $rate)
                                        @if ($bureau->id==$rate->id && $rate->mode=='Buying')
                                            <tr>
                                                <th class="text-primary text-left">{{ $rate->currency }}</th>
                                                <th class="text-danger text-left">{{ $rate->rate }}</th>
                                            </tr>  
                                            
                                        @endif
                                        
                                    @endforeach
                                </table>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary"><a href="#">Convert Currency</a></button>
                            </div>
                        </div>

                        {{--  Second Card  --}}
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-success text-white">
                                <h4 class="my-0 font-weight-normal"><i class="fas fa-coins"></i> Selling Rates</h4>
                            </div>
                            
                            <div class="card-body">
                                    <table class="table table-stripped">
                                            <tr>
                                                <th><h3 class="text-success text-left">Currency</h3></th>
                                                <th><h3 class="text-success text-left">Rate</h3></th>
                                            </tr>
                                            @foreach ($rates as $rate)
                                                @if ($bureau->id==$rate->id && $rate->mode=='Selling')
                                                    <tr>
                                                        <th class="text-success text-left">{{ $rate->currency }}</th>
                                                        <th class="text-danger text-left">{{ $rate->rate }}</th>
                                                    </tr>  
                                                    
                                                @endif
                                                
                                            @endforeach
                                        </table>

                                <button type="button" class="btn btn-lg btn-block btn-outline-primary"><a href="#">Convert Currency</a></button>
                            </div>
                        </div>


                    </div>
                </div>
                
                @if (!Auth::guest())
                    @if (Auth::user()->id==$bureau->user_id)
                        <div class="col-md-3 col-lg-3 col-sm-3 float-sm-right" style="margin-top:70px;">
                            <h3>Actions</h3>
                            <br>
                            <ol class="list-unstyled">
                                <li><a href="/bureaus/{{ $bureau->id }}/edit"><i class="fas fa-edit"></i>  Edit Bureau Details</a></li><br>
                                <li><a href="/bureaus"><i class="fas fa-university"></i>  Forex Bureaus</a></li><br><br>
                                <hr>
                                {{--  Delete  --}}
                                <li>
                                    {!! Form::open(['action'=>['BureausController@destroy',$bureau->id],'method'=>'POST']) !!}
                                        {!! Form::hidden('_method','DELETE') !!}  
                                        {!! Form::submit('Delete Bureau',['class'=>'btn btn-danger'] ) !!}                              
                                    {!! Form::close() !!}
                                    
                                </li><br>

                                
                            </ol>
                        </div>
                    @endif
                @endif
        </div>
    </div> 
@endsection

