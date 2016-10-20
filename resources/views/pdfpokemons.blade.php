<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Pokemons</title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 600px; text-align: left;    border-collapse: collapse; }

    th {     font-size: 13px;     font-weight: normal;     padding: 15px;     background: #b9c9fe; text-align: center;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

    td {    padding: 12px;     background: #e8edff;     border-bottom: 1px solid #fff; text-align: center;
    color: #669;    border-top: 4px solid transparent; }

    tr:hover td { background: #d0dafd; color: #339; }
    </style>

</head>
<body>
    <h1>Listado de Pokemons</h1>
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>PS</th>
            <th>PC</th>
         
        </tr>
        </thead>
        <tbody>
        @foreach($pokemons as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nombre}}</td>
                <td>{{$p->ps}}</td>
                <td>{{$p->ko}}</td>
              

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>