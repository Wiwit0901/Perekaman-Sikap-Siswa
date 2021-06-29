@extends('kejadians.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit kejadian</h2>
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
  
    <form action="{{ route('kejadians.update',$kejadian->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>KODE Kejadian:</strong>
                    <input type="number" name="kode_kejadian" value="{{ $kejadian->kode_kejadian }}" class="form-control" placeholder="Kode_kejadian">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama: </strong>
                        <input class="form-control" name="nama" value="{{ $kejadian->nama}}" id="nama" readonly="readonly"/>
                    </div>
                </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Kasus:</strong>
                 <select name="kode_kasus" class="form-control"class="form-control form-control-md" id="" onchange='changeValue(this.value)' required="required">>
                            <option value="" disabled="disabled" selected="selected"></option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "cbt");
                                $query=mysqli_query($con, "select * from kops order by kode_kasus asc");
                                $result = mysqli_query($con, "select * from kops");
                                $jsArray = "var prdName = new Array();\n";
                                echo "<option name='kode_kasus'  value='$kejadian->kode_kasus' selected>" . $kejadian->kode_kasus . '</option>';
                                while ($row = mysqli_fetch_array($result)) {
                                echo '<option name="kode_kasus"  value="' . $row['kode_kasus'] . '">' . $row['kode_kasus'] . '</option>';
                                $jsArray .= "prdName['" . $row['kode_kasus'] . "'] = {nama_kasus:'" . addslashes($row['nama_kasus']) . "',poin:'".addslashes($row['poin'])."'};\n";
                                }
                            ?>
                </select>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama kasus: </strong>
                        <input class="form-control" name="nama_kasus" value="{{ $kejadian->nama_kasus}}" id="nama_kasus" readonly="readonly"/>
                    </div>
                </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poin: </strong>
                        <input class="form-control" name="poin" value="{{ $kejadian->poin}}" id="poin" readonly="readonly"/>
                    </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <input type="date" name="tanggal" value="{{ $kejadian->tanggal }}" class="form-control" placeholder="Tanggal">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Saksi:</strong>
                 <select name="saksi" class="form-control">
                 @foreach ($baps as $data)
                <option value="{{ $data->kode}}"  >{{$data->nama}}</rayon>
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
        <?php echo $jsArrayNama; ?>
        function changeValueNama(id){
            console.log(id);
            console.log(nisName);
            document.getElementById('nama').value = nisName[id].nama;
        }
        </script>

        <script type="text/javascript">
        <?php echo $jsArray; ?>
        function changeValue(id){
            console.log(id);
            document.getElementById('nama_kasus').value = prdName[id].nama_kasus;
            document.getElementById('poin').value = prdName[id].poin;
        }
        </script>

@endsection