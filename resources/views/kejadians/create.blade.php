@extends('kejadians.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Kejadian</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('kejadians.index') }}"> Back</a>

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

   

<form action="{{ route('kejadians.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kode Kejadian :</strong>

                <input type="text" name="kode_kejadian" class="form-control">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama  :</strong>
                <select class="form-control" name="nama" id="nama">
                    @foreach ($students as $student)
                    <option value="{{$student->nama}}">{{$student->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama kasus: </strong>
                        <input class="form-control" name="nama_kasus" id="nama_kasus" readonly="readonly"/>
                    </div>
                </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poin: </strong>
                        <input class="form-control" name="poin" id="poin" readonly="readonly"/>
                    </div>
                </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Kejadian :</strong>

                <input type="date" name="tanggal" class="form-control" >

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Saksi:</strong>
                 <select name="saksi" class="form-control">
                 @foreach ($teachers as $data)
                <option value="{{ $data->nama}}"  >{{$data->nama}}</rayon>
                @endforeach
                </select>
            </div>
        </div>






        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>
 <script type="text/javascript">
         <?php echo $jsArray; ?>
        function changeValue(id){
            console.log(id);
            document.getElementById('nama_kasus').value = prdName[id].nama_kasus;
            document.getElementById('poin').value = prdName[id].poin;
        }
        </script> -->
@endsection