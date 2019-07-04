@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
        <div class="col-md-9 col-lg-9 col-sm-9 float-sm-left">
            <h2>Edit {{ $bureau->name }} Details</h2>
            {!! Form::open(['action'=> ['BureausController@update', $bureau->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                 <div class="form-group">
                     {{ Form::label('name','Name of Forex Bureau') }}
                     {{ Form::text('name', $bureau->name,['class' => 'form-control', 'placeholder'=>'Enter the name of the Forex Bureau'])}}
                 </div>
         
                 <div class="form-group">
                         {{ Form::label('description','Bureau Details') }}
                         {{ Form::textarea('description', $bureau->description,['class' => 'form-control', 'placeholder'=>'Bureau Information'])}}
                 </div>
         
                             
                 {{--  {!! Form::file('cover_image') !!} <br><br><br>  --}}
         
                 {!! Form::hidden('_method','PUT') !!}
                 {!! Form::submit('Update Bureau Details', ['class'=>'btn btn-primary']) !!}
         
            {!! Form::close() !!}
         
        </div>
    </div>
</div>

    
@endsection