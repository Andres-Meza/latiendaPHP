<!doctype html>
<html lang="en">
  <head>
    <title>Paises</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <header class="text-center ">
        <h1>Lista de Paises</h1>
      </header>
      <table class="table table-striped w-50 m-auto">
          <thead class="text-center">
              <tr>
                  <th>
                      BANDERA
                  </th>
                  <th>
                      PAÍS
                  </th>
                  <th>
                      CAPITAL
                  </th>
                  <th>MONEDA</th>
                  <th>POBLACION</th>
                  <th colspan="3">CIUDADES</th>
              </tr>
          </thead>
          <tbody>
              @foreach($paises as $pais => $infopais)
                <tr>
                    <td >
                        <img src="{{ $infopais["BANDERA"] }}" alt="" width="80">
                    </td>
                    <td class="text-success">
                        {{ $pais }}
                    </td>
                    <td class="text-danger">
                        {{ $infopais["CAPITAL"] }}
                    </td>
                    <td class="text-warning">
                        {{ $infopais["MONEDA"] }}
                    </td>
                    <td class="text-info">
                        {{ $infopais["POBLACION"] }}
                    </td>

                    @foreach ($infopais["CIUDAD"] as $clave => $valor)

                    <td>
                        <p class="bg-info text-light rounded text-center font-weigth-bold">{{$valor}}</p>
                        @endforeach
                    </td>
                        

                </tr>
              @endforeach
          </tbody>
          <tfoot></tfoot>
      </table>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>