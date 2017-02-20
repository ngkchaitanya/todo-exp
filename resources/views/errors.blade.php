@if(count($errors))

    <div style="margin-top: -50px" class="form-group">
        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    </div>

@endif