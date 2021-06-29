@extends('kasuses.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Kasus</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('kasuses.index') }}"> Back</a>

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

   

<form action="{{ route('kasuses.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kode Kasus :</strong>

                <input type="text" name="kode_kasus" class="form-control">

            </div>

        </div>


       <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Kasus :</strong>

                <input type="text" name="nama_kasus" class="form-control" placeholder="Nama Kasus...">

            </div>

        </div>
            
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Poin Kasus :</strong>

                <input type="text" name="poin" class="form-control" placeholder="Poin Kasus...">

            </div>

        </div>



       





        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection
