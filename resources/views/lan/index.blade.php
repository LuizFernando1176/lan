<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios </title>
    <link rel="stylesheet" href="{{ asset('css/boots.css') }}" >

</head>
<body>
    <script src="{{asset('js/jquery.js')}}"></Script>
    <script src="{{asset('js/script.js')}}"></Script>
        <div class="container">
            <div class="container-fluid">
                <div class="block p-3 mb-2 pt-2 m-2">
                    <form class="p-3" method="GET" action="{{ url('/saveUsuario') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nome</label><br>
                                <input type="text" name="nome" id="nome" autocomplete="off" class="form-control"><br>
                                <label>Email</label><br>
                                <input type="email" name="email" id="email" autocomplete="off" class="form-control"><br>
                                <label>Telefone</label><br>
                                <input type="text" name="telefone" id="telefone" autocomplete="off" class="form-control"><br>
                            </div>
                            <div class="col-md-6">
                                <label>Data de Nascimento</label><br>
                                <input type="date" name="data_nascimento" id="data" autocomplete="off" class="form-control"><br>
                                <label>Idade</label><br>
                                <input type="text" name="idade" id="idade" autocomplete="off" onblur="myFunction()" class="form-control" readonly><br>
                                <div class="alert alert-danger" style="display:none;" id="menor">
                                    Atenção e menor de idade em casa de Madrugão pedir a assinatura da Autorização . Download no <a href="google.com"> Link</a>
                                </div>
                                <div class="alert alert-success" style="display:none;" id="maior">
                                    Atenção e menor de idade em casa de Madrugão pedir a assinatura da Autorização . Download no <a href="google.com"> Link</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                <button type="reset" class="btn btn-danger">Corrigir</button>
                            </div>
                        </div>
                        </div>
                        <div class="block">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Idade</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $users)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                @endforeach


                            </tbody>
                          </table>
                        </div>
            </div>
        </div>

            </body>
</html>

