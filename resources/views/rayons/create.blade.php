@extends('rayons.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Rayon</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('rayons.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('rayons.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rayon :</strong>

                <select class="form-control" name="jk">
                    <option value> Cicurug </option>
                    <option value> Cisarua </option>
                    <option value> Ciawi </option>
                    <option value> Cibedug </option>
                    <option value> Wikrama </option>
                    <option value> Sukasari </option>
                    <option value> Tajur </option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection