@extends('teachers.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Teacher</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row " align="center">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama : </strong>

                {{ $teacher->nama }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin : </strong>

                {{ $teacher->jk }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rayon : </strong>

                {{ $teacher->rayon }}

            </div>

        </div>


    </div>

@endsection