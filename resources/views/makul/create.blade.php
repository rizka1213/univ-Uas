@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><center>
                Input Data Makul</center>
                </div>

                <div class="card-body">   
                    <form action="{{ route('simpan.makul') }}" method="post" class="form-item">
                    @csrf
                    <div class="form-group">
                    <label for="kd_makul">Kode Makul</label>
                    <input type="text" name="kd_makul" class="form-control col-md-12" placeholder="Masukkan Kode Makul">
                    </div>

                    <div class="form-group">
                    <label for="nama_makul">Nama Makul</label>
                    <input type="text" name="nama_makul" class="form-control col-md-12" placeholder="Masukkan Nama Makul">
                    </div>

                    <div class="form-group">
                    <label for="sks">SKS</label>
                    <input type="number" name="sks" class="form-control col-md-4" placeholder="Masukkan SKS">
                    </div>

                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                <a href="{{route('makul')}}" class="btn btn-md btn-danger" >Batal</a>
                
                </form>
                    @foreach ($makul as $mk)
                    
                    @endforeach

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
