@extends('rayons.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Rayon</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('rayons.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rayon :</strong>

                {{ $rayon->rayon }}

            </div>

        </div>

    </div>

@endsection