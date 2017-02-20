@extends('master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Add a Task</h1>

        <hr style="border-color:dodgerblue">

        <form method="POST" action="/todo">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="event">Task</label>
                <input type="text" id="event" name="event" value="{{old('event')}}" class="form-control" autofocus>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline</label>


                <input type="date" id="deadline" name="deadline" min= <?php
                echo date('Y-m-d');
                ?> max="9999-12-31" value="{{old('deadline')}}" class="form-control">
            </div>



            <div class="form-group">

                <input type="hidden" id="comp" name="comp" value="0">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

            @include('errors')

        </form>

    </div>

@endsection
