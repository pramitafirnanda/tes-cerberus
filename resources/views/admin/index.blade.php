@extends('layouts.base')

@section('content')
<!-- Page Features -->
<div>
  <a href="{{ url('admin/create') }}" class="btn btn-primary btn-lg">Tambah Data</a>
</div>

<div class="row text-center">

  <div class="col-lg-12 col-md-12">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama lengkap</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Tgl lahir</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">email</th>
            <th scope="col">Alamat</th>
            <th scope="col">##</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->jk}}</td>
            <td>{{date('d-m-Y', strtotime($data->birthdate))}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target=".view_{{$data->id}}">
                  View
                </button>
                
              </div>
            </td>
          </tr>

          <!-- Modal View-->
              <div class="modal fade view_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    @include('admin.view')
                  </div>
                </div>
              </div>
          @endforeach
        </tbody>
      </table>
  </div>
</div>
<!-- /.row -->
@endsection