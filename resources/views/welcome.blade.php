<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel EventStream</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
            
            <div class="card-table">

                <div class="header-table">
                    <h1>Emitir Notas em Lote</h1>

                    <div class="buttons">
                        <button class="button-blue" id="button-emit">Emitir Novas Notas</button>
                        <button class="button-grey" id="button-files">Baixar Arquivos</button>
                    </div>
                </div>


                <div class="content-infos">
                    <div class="card-info">
                        <div class="card-texts">
                            <h1>Total de Notas</h1>
                            <p id="total-invoices">0</p>
                        </div>
                        <i class="fas fa-file-alt" style="color: #0A0055;"></i>
                    </div>

                    <div class="card-info">
                        <div class="card-texts">
                            <h1>Notas Emitidas</h1>
                            <p id="emitted-invoices">0</p>
                        </div>
                        <i class="fas fa-file-upload" style="color: #01A78D" id="img-emmited-invoices"></i>
                    </div>

                    <div class="card-info">
                        <div class="card-texts">
                            <h1>Gerando Notas</h1>
                            <p id="generated-invoices">0</p>
                        </div>
                        <i class="fas fa-redo" style="color: #4F4F4F" id="img-generate-invoices"></i>
                    </div>

                    <div class="card-info">
                        <div class="card-texts">
                            <h1>Erro</h1>
                            <p id="error-invoices">0</p>
                        </div>
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>

                </div>


                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Status</th>
                        <th scope="col">Tomador</th>
                        <th scope="col">CPF/CNPJ</th>
                        <th scope="col">Competência</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="status-success">Emitido</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>
                        <tr>
                            <th scope="row" id="status-error">Erro</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>
                        <tr>
                            <th scope="row" id="status-success">Emitido</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>
                        <tr>
                            <th scope="row" id="status-error">Erro</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr><tr>
                            <th scope="row" id="status-success">Emitido</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>
                        <tr>
                            <th scope="row" id="status-error">Erro</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr><tr>
                            <th scope="row" id="status-success">Emitido</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>
                        <tr>
                            <th scope="row" id="status-error">Erro</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr><tr>
                            <th scope="row" id="status-success">Emitido</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>
                        <tr>
                            <th scope="row" id="status-error">Erro</th>
                            <td>ALESSANDRA VASCONCELOS SUCKOW</td>
                            <td>277.117.608-41</td>
                            <td>08/08/2022 17:53:14</td>
                            <td>R$ 50,00</td>
                            <td>35794-460</td>
                            <td>SERVIÇOS PRESTADOS REF, 10/2020</td>
                        </tr>

                    </tbody>
                </table>
            </div>
    </body>
    
     <script src="{{ asset('js/app.js') }}" defer></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
