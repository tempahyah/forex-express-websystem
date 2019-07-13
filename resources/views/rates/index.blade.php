@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">All Forex Bureaus Rates <a href="/rates/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add Rate</a></div>
                <div class="card-body">
                    <form action="">
                            <div class="form-group">
                                    <input placeholder= "&#xF002; Search For Forex Bureau" style="font-family:Arial, FontAwesome"
                                            id="rate"
                                            class="form-control"
                                            />
                                </div>
                    </form>
                        <table class="table table-stripped">
                                <tr>
                                    <th><h4 class="text-primary">Bureau</h4></th>
                                    <th><h4 class="text-primary">Currency</h4></th>
                                    <th><h4 class="text-primary">Rate</h4></th>
                                    <th><h4 class="text-primary">Mode</h4></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($rates as $rate)
                                    <tr>
                                        <th>{{ $rate->name }}</th>
                                        <td>{{ $rate->currency }}</td>
                                        <td>{{ $rate->rate }}</td>
                                        <td>{{ $rate->mode }}</td>
                                        <td><a href="/rates/{{ $rate->id }}/edit" class="btn btn-primary">Edit</a></td>
                                        <td>
                                               
                                            {!! Form::open(['action'=>['RatesController@destroy',$rate->id],'method'=>'POST']) !!}
                                                {!! Form::hidden('_method','DELETE') !!}  
                                                {!! Form::submit('Delete',['class'=>'btn btn-danger'] ) !!}                              
                                            {!! Form::close() !!}

                                            
                                        </td>
                                    </tr>
                                    
                                @endforeach
                
                            </table>

                </div>
            </div>
            
        </div>
    </div>
</div>
    
@endsection