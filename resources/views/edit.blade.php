@extends('master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Edit an Event</h1>

        <hr style="border-color:dodgerblue">

        <form method="POST" action="/todo/update">

            {{ csrf_field() }}


            <div class="form-group">

                <input type="text" id="{{ $upd->id }}" name="event" class="form-control" value= " {{ $upd->event }} " required>

            </div>

            <div class="form-group">

                <input type="text" id="{{ $upd->id }}" name="deadline" class="form-control" min= <?php
                echo date('Y-m-d');
                ?> max="2200-12-31" value=" {{ $upd->deadline }} " required>

            </div>




            <div class="form-group">
                <input type="hidden" name="fid" value="{{ $upd->id }}">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

            @include('errors')

        </form>

    </div>



@endsection