<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    <title>Document</title>
</head>
<body>
    @if(session('status')!= null)
        <div class="alert alert-info">{{session('status')}}</div>
    @endif
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{asset('assets/archivos_linea.png')}}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Login</h4>
                      </div>
      
                      <form action="{{route('login')}}" method="post">
                        @csrf
                        <p>Iniciar sesión</p>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Correo</label>
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder="ingresar correo" />
                          
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name ="password" id="form2Example22" class="form-control" />
                          
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>
                          
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">No tienes cuenta?</p>
                          <a href="{{route('register')}}" class="btn btn-outline-danger">Crear cuenta</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Tarea completa</h4>
                      <p class="small mb-0">Aqui puedes guardar tus archivos, nos aseguramos de custodiar tu historial de vida</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>         



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>