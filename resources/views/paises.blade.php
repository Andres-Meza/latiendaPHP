<!doctype html>
<html lang="en">
  <head>
    <title>Paises</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <header class="text-center ">
        <h1>Lista de Paises</h1>
      </header>
      <table class="table table-dark table-striped">
          <thead>
              <tr>
                  <th>
                      PAÍS
                  </th>
                  <th>
                      CAPITAL:
                  </th>
                  <th>MONEDA</th>
                  <th>POBLACION</th>
                  <th>CIUDADES</th>
              </tr>
          </thead>
          <tbody>
              @foreach($paises as $pais => $infopais)
                <tr>
                    <td>
                        {{ $pais }}
                    </td>
                    <td>
                        {{ $infopais["CAPITAL"] }}
                    </td>
                    <td>
                        {{ $infopais["MONEDA"] }}
                    </td>
                    <td>
                        {{ $infopais["POBLACION"] }}
                    </td>
                    @foreach ($infopais["Ciudad"] as $clave => $valor)
                    <td>{{$valor}}</td>
                        
                    @endforeach

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