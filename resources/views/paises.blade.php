<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <thead>

    <h1>Paises</h1>
</thead>
<tbody>

   <table class="table table-dark">

    <thead>
      <tr>
        <th scope="col">Pais</th>
        <th scope="col">Capital</th>
        <th scope="col">Moneda</th>
        <th scope="col">poblacion</th>
        <th scope="col">ciudades</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($paises as $pais => $informacion)
      <tr>


        <th scope="row"> {{ $pais }}</th>
        <td class="bg-danger">{{ $informacion["capital"] }}</td>
        <td class="bg-warning">{{ $informacion["Moneda"] }}</td>
        <td class="bg-info">{{ $informacion["poblacion"] }}</td>
        <td>{{ $informacion["importantes"][0] }}, {{ $informacion["importantes"][1] }}, {{ $informacion["importantes"][2] }}</td>

      </tr>
      @endforeach
    </tbody>

  </table>

</tbody>

</body>
</html>





