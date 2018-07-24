<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam.</p>
        <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
      </header>

        <!-- Modal -->
     <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
              {{ Form::open(['method' => 'post', 'route' => 'store', 'class' => 'form-horizontal']) }}
                    @include('home.form')
              {{ Form::close() }}
            </div>

            </div>
          </div>
        </div>

      <!-- Page Features -->
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
                          @include('home.view')
                        </div>
                      </div>
                    </div>
                  

                @endforeach
              </tbody>
            </table>
        </div>
      </div>
      <!-- /.row -->

    </div>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Pramita Firnanda</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
