@extends('master')

@section('content')

    <div style="margin-top: -20px " class="col-sm-8 blog-main">
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="/todo">Back</a>
        <!-- <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    --></nav>
    </div>


        <div style="margin-top: -60px " class="container">

            <h2>Completed Tasks</h2>
            <hr style="border-color:dodgerblue">

        </div>
    <div class="container">

    @foreach($events as $event)

        @include('comp_event')

    @endforeach

        {!! $events->links() !!}


    </div>



@endsection