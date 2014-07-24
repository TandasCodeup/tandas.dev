@extends('layouts.master')

@section('content')

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <a href="action('HomeController@doAnsibleTest')" class="btn btn-success btn-lg">TEST ANSIBLE</a>
                    </div>
                </div>
                @if (isset($result))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <textarea rows="8" cols="40">{{{ $result }}}</textarea>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@stop
