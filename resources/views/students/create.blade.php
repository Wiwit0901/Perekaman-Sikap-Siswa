@extends('students.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Student</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

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

   

<form action="{{ route('students.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nis :</strong>

                <input type="text" name="nis" class="form-control" placeholder="Masukan Nis anda">

            </div>

        </div>

      
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama :</strong>

                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama anda">

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin :</strong>

                <select class="form-control" name="jk">
                    <option value = "P"> Perempuan </option>
                    <option value ="L"> Laki-laki </option>
                </select>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rombel :</strong>

                <input type="text" name="rombel" class="form-control" placeholder="Masukan Nama anda">

            </div>

        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Rayon  :</strong>
                <select class="form-control" name="rayon" id="rayon">
                    @foreach ($rayons as $rayon)
                    <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection