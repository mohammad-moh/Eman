<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Eman!</title>
  </head>
  <body>
    <h2>Hello Eman</h2>
    <div class="container">
        <div class="raw">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        @if (Session('amen_del'))
                        <div class="alert alert-danger">
                            {{ Session::get('amen_del') }}
                        </div>

                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Title</td>
                                    <td>Body</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <div class="tbody">
                                @foreach ($elems as $ele )


                                <tr>
                                    <td>{{$ele->title}}</td>
                                    <td>{{$ele->body}}</td>
                                    <td>
                                        <a href="/get-one/{{$ele->id}}" class="btn btn-success">View</a>
                                        <a href="/delete-raw/{{$ele->id}}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
