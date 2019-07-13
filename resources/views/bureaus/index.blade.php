@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card" style="width: 48rem;">
                <div class="card-header bg-primary text-white" >
                    <h2><i class="fas fa-university"></i> Forex Bureaus </h2>
                </div>
                <div class="container" style="margin-top:20px">
                        <form>
                            <div class="form-group has-feedback has-feedback-left">
                                <input  placeholder="&#xF002; Search For Forex Bureau" style="font-family:Arial, FontAwesome"
                                        id="bureaus" 
                                        type="search"
                                        class="form-control"
                                />
                            </div>
                        </form>
                        

                </div>

                
                <ul class="list-group list-group-flush">
                    
                    @foreach ($bureaus as $bureau)
                        <li class="list-group-item"><a  href="/bureaus/{{ $bureau->id }}"><i class="far fa-building"></i> {{  $bureau->name }} </a> </li> 
                    @endforeach
                
                </ul>
            </div>
        </div>
    </div>
    
    
@endsection