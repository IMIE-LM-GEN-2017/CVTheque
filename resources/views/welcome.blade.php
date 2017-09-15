@extends('layouts.master')



@section('content')

    <div class="head-bg">
        <div class="head-bg-img"></div>
        <div class="head-bg-content">
            <div
                class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-6">
                <div class="ui category search">
                    <div class="ui icon massive input">
                        <input class="prompt" type="text" placeholder="Recherche de CV...">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Qui veut de la limonade?</button>
                </div>
            </div>
        </div>
    </div>
    </div>

@include('layouts.footer')

@endsection


