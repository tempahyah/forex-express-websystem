@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
                <div class="col-md-9 col-sm-12">
                    <h1>Edit Single Rate</h1><br><br>
                        <div class="bg-white">
                            <h3>Old Rate Details</h3>
                            <table class="table table-stripped">
                                <tr>
                                    <th>Forex Bureau</th>
                                    <th>Currency</th>
                                    <th>Old Rate</th>
                                    <th>Mode</th>
                                </tr>

                                @foreach ($rates as $item)
                                    @if ($rate->id==$item->id)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->currency }}</td>
                                            <td>{{ $item->rate }}</td>
                                            <td>{{ $item->mode }}</td>
                                        </tr>
                                        
                                    @endif
                                @endforeach
                            </table>
                        </div>

                        <div>
                            <form method="POST" action="{{ route('rates.update',[$rate->id]) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <input type="hidden" name="bureau_id" value="{{ $rate->bureau_id }}">
                                        
                                        <div class="form-group">
                                            <label for="rate"> Rate <span class="required" style="color:red">*</span></label>
                                            <input placeholder="Enter Rate"
                                                    id="rate"
                                                    required
                                                    name="rate"
                                                    style="width:600px"
                                                    spellcheck="false"
                                                    class="form-control"
                                                    type="number"
                                                    value="{{ $rate->rate }}"
                                                    />
                                        </div>

                                        <div class="form-group">
                                                <input id="currency_id" required name="currency_id" class="form-control" type="hidden" value="{{ $rate->currency_id }}"/>
                                        </div>

                                        <div class="form-group">
                                                <input id="mode_id" required name="mode_id" class="form-control" type="hidden" value="{{ $rate->mode_id }}"/>
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