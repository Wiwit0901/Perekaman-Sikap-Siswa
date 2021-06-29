@extends('kasuses.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DAFTAR Kasus</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kasuses.create') }}"> Tambah Kasus</a>
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
            <th> No </th>
            <th>Kode Kasus</th>
            <th>Nama Kasus</th>
            <th>Poin</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kasuses as $kasus)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kasus->kode_kasus }}</td>
            <td>{{ $kasus->nama_kasus }}</td>
            <td>{{ $kasus->poin }}</td>
            <td>
                <form action="{{ route('kasuses.destroy',$kasus->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kasuses.show',$kasus->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kasuses.edit',$kasus->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kasuses->links() !!}
      
@endsection
