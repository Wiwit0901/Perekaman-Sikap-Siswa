@extends('kasuses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Kasus</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kasuses.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Kasus:</strong>
                {{ $kasus->kode_kasus }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kasus:</strong>
                {{ $kasus->nama_kasus }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Poin:</strong>
                {{ $kasus->poin }}
            </div>
        </div>
        
        </div>
        
    </div>
@endsection
