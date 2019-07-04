@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-9 col-lg-9 col-sm-9 float-sm-left">
            <h2>Create Forex Bureau</h2>
            {!! Form::open(['action'=> 'BureausController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                 <div class="form-group">
                     {{ Form::label('name','Name of Forex Bureau') }}
                     {{ Form::text('name', '',['class' => 'form-control', 'placeholder'=>'Enter the name of the Forex Bureau'])}}
                 </div>
         
                 <div class="form-group">
                         {{ Form::label('description','Bureau Details') }}
                         {{ Form::textarea('description', '',['class' => 'form-control', 'placeholder'=>'Bureau Information'])}}
                 </div>
         
                             
                 {{--  {!! Form::file('cover_image') !!} <br><br><br>  --}}
         
                 
                 {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
         
            {!! Form::close() !!}
         
        </div>
    </div>

    
@endsection