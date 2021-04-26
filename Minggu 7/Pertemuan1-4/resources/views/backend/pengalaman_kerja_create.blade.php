@extends('layouts.nice')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              {{ $data['title']}}
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="{{route('pengalaman_kerja.store')}}">
                  @csrf
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perusahaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan di Perusahaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                        <select name="tahun_masuk" id="tahun_masuk" class="form-control">
                        <option selected="selected">Pilih Tahun</option>
                        @for ($i = 1980; $i < 2050; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tahun Keluar</label>
                    <div class="col-sm-10">
                        <select name="tahun_keluar" id="tahun_keluar" class="form-control">
                        <option selected="selected">Pilih Tahun</option>
                        @for ($i = 1980; $i < 2050; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                        </select>
                    </div>
                  </div>
              </div>
              <div class="panel-footer">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                  </div>
                </form>
            </section>
          </div>
</div>
@endsection