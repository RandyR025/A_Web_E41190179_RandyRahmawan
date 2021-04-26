@extends('layouts.nice')
@section('content')
<a href="{{url('pengalaman_kerja/create')}}" class="btn btn-success"><i class="fa fa-plus "></i>Tambah</a>
    <table class="table table-striped table-advance table-hover">
        <thead>
            <tr>
                <th class="icon-bag"><i class="fa fa-user"></i> Nama</th>
                <th class="icon-document"><i class="fa fa-file"></i> Jabatan</th>
                <th class="icon-calender"><i class="fa fa-calendar"></i> Tanggal Masuk</th>
                <th class="icon-calender"><i class="fa fa-calendar"></i> Tanggal Keluar</th>
                <th class="icon-gear"><i class="fa fa-gear"></i> Tanggal Keluar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data['pengalaman_kerja'] as $pengalaman_kerja)
            <tr>
                <td>{{ $pengalaman_kerja->nama}}</td>
                <td>{{ $pengalaman_kerja->jabatan}}</td>
                <td>{{ $pengalaman_kerja->tahun_masuk}}</td>
                <td>{{ $pengalaman_kerja->tahun_keluar}}</td>
                <td><a href="{{route('pengalaman_kerja.edit', $pengalaman_kerja->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                <form action="{{route('pengalaman_kerja.destroy', $pengalaman_kerja->id)}}" method="post">
                    @csrf
                    @method('delete')
                <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda ingin menghapusnya ?')"><i class="fa fa-trash"></i> Hapus</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection