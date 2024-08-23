<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.1/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap-5.3.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body class="text-bg-dark">
    <div class="row mt-5">
          <div class="col-4 mx-auto">
           <div class="text-center">
                <h1 class="display-5">Register</h1>
                <p class="h6">Fill in the following with accurate data</p>
           </div>

               {{-- include alerts blade file  --}}
               @include('partials.alerts')

            <form action="/register" method="POST">@csrf()

                <div class="mb-3"> 
                  <label for="" class="form-label">Firstname</label>
                  <input type="text" name="first_name" class="form-control" id="">
                </div>
                <div class="mb-3"> 
                  <label for="" class="form-label">Lastname</label>
                  <input type="text" name="last_name" class="form-control" id="">
                </div>
                <div class="mb-3"> 
                  <label for="" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
    </div>
</body>
</html>