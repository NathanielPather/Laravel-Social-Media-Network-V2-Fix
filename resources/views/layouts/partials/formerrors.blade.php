@if(count($errors))
<div class="form-group-post">
    <div class="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
