@extends('layouts.app')

@section('content')


    <div class="container mt-5">
        <div class="row">
        @foreach($posts as $post)


                <div class="card-deck col-md-6  mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">{{$post['name']}}</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-title pricing-card-title">{{$post['desc']}}</p>

                        </div>
                    </div>
                </div>

        @endforeach
        </div>

    </div>

@stop


