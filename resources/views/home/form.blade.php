<div class="form-group row has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
    <div class="col-sm-9">
      {!!Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Nama Lengkap'])!!}
        @if($errors->has('name'))
            <span class="help-block">
                <p>{{ $errors->first('name') }}</p>
            </span>
        @endif
    </div>
</div>
<div class="form-group row has-feedback {{ $errors->has('jk') ? ' has-error' : '' }}">
    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-9">
        {{ Form::radio('jk', 'Laki-laki', false, array('id'=>'jk-0')) }}
        {{ Form::label('jk-0', 'Laki-laki') }}

        {{ Form::radio('jk', 'Perempuan', false, array('id'=>'jk-1')) }}
        {{ Form::label('jk-1', 'Perempuan') }}

        @if($errors->has('jk'))
        <span class="help-block">
            <p>{{ $errors->first('jk') }}</p>
        </span>
        @endif
    </div>
</div>
<div class="form-group row has-feedback {{ $errors->has('birthdate') ? ' has-error' : '' }}">
    <label for="birthdate" class="col-sm-3 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-9">
      {!!Form::date('birthdate',null,['id'=>'birthdate','class'=>'form-control','placeholder'=>'Tanggal Lahir'])!!}

      @if($errors->has('birthdate'))
        <span class="help-block">
            <p>{{ $errors->first('birthdate') }}</p>
        </span>
        @endif
    </div>
</div>
<div class="form-group row has-feedback {{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-sm-3 col-form-label">No. Telp</label>
    <div class="col-sm-9">
      {!!Form::text('phone',null,['id'=>'phone','class'=>'form-control','placeholder'=>'Phone'])!!}
      @if($errors->has('phone'))
        <span class="help-block">
            <p>{{ $errors->first('phone') }}</p>
        </span>
        @endif
    </div>
</div>

<div class="form-group row has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      {!!Form::email('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Email'])!!}
      @if($errors->has('email'))
        <span class="help-block">
            <p>{{ $errors->first('email') }}</p>
        </span>
        @endif
    </div>
</div>

<div class="form-group row has-feedback {{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
    <div class="col-sm-9">
      {!!Form::textarea('address',null,['id'=>'address','class'=>'form-control','placeholder'=>'Alamat'])!!}
      @if($errors->has('address'))
        <span class="help-block">
            <p>{{ $errors->first('address') }}</p>
        </span>
        @endif
    </div>
</div>
  
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button class="btn btn-primary">Submit</button>
</div>