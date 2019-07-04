@extends('layouts.app')

@section('content')
    <div class="container scrollspy">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <a href="/bureaus/create" class="btn btn-primary float-right">Add Forex Bureau</a>
                        <h3 style="color:blue"><strong> Forex Bureaus Created by you</strong></h3><br>
                        @if (count($bureaus))
                            
                       

                            <table class="table table-stripped">
                                <tr>
                                    <th>Forex Bureau</th>
                                    <th>Created On</th>
                                    <th>Created by</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                @foreach ($bureaus as $bureau)
                                    <tr>
                                        <td>{{ $bureau->name }}</td>
                                        <td>{{ $bureau->created_at }}</td>
                                        <td>{{ $bureau->user->name}}</td>
                                        <td><a href="/bureaus/{{ $bureau->id }}" class="btn btn-success">View</a></td>
                                        <td><a href="/bureaus/{{ $bureau->id }}/edit" class="btn btn-primary">Edit</a></td>
                                        <td>
                                            {!! Form::open(['action'=>['BureausController@destroy',$bureau->id],'method'=>'POST']) !!}
                                                {!! Form::hidden('_method','DELETE') !!}  
                                                {!! Form::submit('Delete',['class'=>'btn btn-danger'] ) !!}                              
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>                                                                
                                @endforeach
                            </table>
                        @else
                            <br><br><br>
                            <h5 style="color:red">No Forex Bureaus created by you</h5>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
