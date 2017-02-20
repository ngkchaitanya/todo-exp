@extends('master')

@section('content')

    <div style="margin-top: -60px " class="container">


        <h1>Add a Task</h1> <a style="float:right; margin-top: -55px" class="btn btn-outline-primary" href="/todo/c_tasks">Completed Tasks</a>

        <hr style="border-color:dodgerblue">

        <form method="POST" action="/todo">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="event">Task</label>
                <input type="text" id="event" name="event" value="{{old('event')}}" class="form-control" autofocus>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline</label>

                <input type="date" id="deadline" name="deadline" min="<?php echo date('y-m-d'); ?>" max="2200-12-31" value="{{old('deadline')}}" class="form-control">
            </div>



            <div class="form-group">

                <input type="hidden" id="comp" name="comp" value="0">


                <nav class="blog-pagination">
                    <button type="submit" class="btn btn-outline-primary">ADD</button>
                    <!-- <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                --></nav>

            </div>


            @include('errors')

        </form>




            </div>



    <div style="margin-top: -75px" class="container">
        <hr style="border-color:dodgerblue">



        @foreach($events as $event)


            @include('event')

        @endforeach


    <div style="align-content: center">

        {!! $events->links() !!}

    </div>


    </div><!-- /.blog-main -->



@endsection