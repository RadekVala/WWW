@extends('layouts.app')


@section('main-menu')
    @each('partials.menu-item', $menuArray, 'category')
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Category: {{ $title }}</div>

                    <div class="panel-body">
                        @each('partials.content-prev-item', $ContentArray, 'content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
