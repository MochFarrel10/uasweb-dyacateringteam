<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Dyacatering</title>
        <link href="{{asset('css/admin.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/admin/login.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-header text-center">
                                        <img src="{{asset('asset/images/logorm.png')}}" id="img-login" class="mt-3" alt="" width="100">
                                        <h3 class="font-weight-light ">Admin DyaCatering</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('postlogin')}}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Email address</label>
                                                <input class="form-control" id="inputEmail" type="email" name="email"/>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" type="password" name="password"/>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>