<div class="form-group row">
    <label class="col-3 col-form-label">Nama Lengkap: </label>
    <label class="col-9 col-form-label"><strong>{{$data->name}}</strong></label>

    <label class="col-3 col-form-label">Jenis Kelamin: </label>
    <label class="col-9 col-form-label"><strong>{{$data->jk}}</strong></label>

    <label class="col-3 col-form-label">Tanggal lahir: </label>
    <label class="col-9 col-form-label"><strong>{{date('d-m-Y', strtotime($data->birthdate))}}</strong></label>

    <label class="col-3 col-form-label">No.Telp : </label>
    <label class="col-9 col-form-label"><strong>{{$data->phone}}</strong></label>

    <label class="col-3 col-form-label">E-Mail : </label>
    <label class="col-9 col-form-label"><strong>{{$data->email}}</strong></label>

    <label class="col-3 col-form-label">Alamat : </label>
    <label class="col-9 col-form-label"><strong>{{$data->address}}</strong></label>
</div>