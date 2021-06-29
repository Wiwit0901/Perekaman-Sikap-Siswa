@extends('kejadians.layout')
 
@section('content')
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
      
            <div class="pull-left">
                <h2>Laporan</h2>
                <form action="/laporans/cari" method="GET">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="date" class="form-control @error('startDate') is-invalid @enderror mb-3" name="startDate" id="startDate">
                        @error('starDate')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <label class="col-sm-2 mb-3"><b>-</b></label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-contorl @error('endDate')is-invalid @enderror mb-3" name="endDate" id="endDate">
                        @error('endDate')
                        <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                        @php if(isset($startDate) && isset($endDate)){ @endphp
                        <a href="{{ route('laporans.print', ['startDate' => $startDate, 'endDate' => $endDate]) }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php }else{ @endphp
                        <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php } @endphp
                    </div>
            </div>
        </div>
    </div>
  </form>

</form> 
    <table class="table table-bordered">
        <tr>
           
            <th>Kode Kejadian</th>
             <th>Nama</th>
            <th>Kode Kasus</th>
            <th>Nama Kasus</th>
           	<th>poin</th>
            <th>tanggal</th>
            <th>Saksi</th>
           
        </tr>
         @foreach ($kejadians as $kejadian)
        <tr>
          
            <td>{{ $kejadian->id }}</td>
            <td>{{ $kejadian->nama }}</td>
            <td>{{ $kejadian->kode_kasus }}</td>
            <td>{{ $kejadian->nama_kasus }}</td>
            <td>{{ $kejadian->poin }}</td>
            <td>{{ $kejadian->tanggal }}</td>
            <td>{{ $kejadian->saksi }}</td>
            
        </tr>
        @endforeach
   		 </table>
     	
     @endsection
  
