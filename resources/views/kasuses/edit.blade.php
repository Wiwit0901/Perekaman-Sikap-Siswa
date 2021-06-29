@extends('kasuses.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Kasus</h2>
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
  
    <form action="{{ route('kasuses.update',$kasus->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Kasus:</strong>
                    <input type="number" name="kode_kasus" value="{{ $kasus->kode_kasus }}" class="form-control" placeholder="Kode Kasus">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kasus:</strong>
                    <input type="text" name="nama_kasus" value="{{ $kasus->nama_kasus }}" class="form-control" placeholder="Kode Kasus">
                </div>
            </div>
          
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poin: </strong>
                        <input class="form-control" name="poin" value="{{ $kasus->poin}}" class="form-control"
                        placeholder="Poin Kasus">
                    </div>
                </div>
        
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
   

@endsection
