@extends('master')

@section('content')

    <div class="col-sm-8 blog-main">

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="/todo">BACK</a>
            <!-- <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        --></nav>

    </div>

    <div class="col-sm-8 blog-main">


            @include('c_event')





    </div><!-- /.blog-main -->

    </div><!-- /.blog-sidebar -->

@endsection