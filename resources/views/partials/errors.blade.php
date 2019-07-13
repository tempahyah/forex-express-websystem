@if (isset($errors) && count($errors)>0)
    <div class="alert alert-dismissable alert-danger fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li><strong>{!! $error !!}</strong></li>         
            @endforeach
        </ul>
    </div>
    
@endif