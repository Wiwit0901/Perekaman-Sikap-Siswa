@extends('kejadians.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DAFTAR Kejadian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kejadians.create') }}"> Tambah kejadian</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Kejadian</th>
            <th>Nama</th>
            <th>Kode Kasus</th>
            <th>Nama Kasus</th>
            <th>Poin</th>
            <th>Tanggal</th>
            <th>Saksi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kejadians as $kejadian)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kejadian->kode_kejadian }}</td>
            <td>{{ $kejadian->nama }}</td>
            <td>{{ $kejadian->kode_kasus }}</td>
            <td>{{ $kejadian->nama_kasus }}</td>
            <td>{{ $kejadian->poin }}</td>
            <td>{{ $kejadian->tanggal }}</td>
            <td>{{ $kejadian->saksi }}</td>
            <td>
                <form action="{{ route('kejadians.destroy',$kejadian->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kejadians.show',$kejadian->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kejadians.edit',$kejadian->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
  
    {!! $kejadians->links() !!}
      
@endsection