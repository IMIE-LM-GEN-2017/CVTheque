@extends('layouts.master')



@section('content')

    <div class="head-bg">
        <div class="head-bg-img"></div>
        <div class="head-bg-content">
            <div
                    class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-6">
                <input class="form-control" type="text" placeholder="Recherche de cv">
                <br>
                <div><button type="submit" class="btn btn-primary">Soumettre</button></div>
            </div>
        </div>
    </div>



    @include('layouts.footer')

@stop 
