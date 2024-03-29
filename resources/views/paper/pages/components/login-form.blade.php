<div class="wrapper wrapper-full-page">
  <div class="full-page login-page" data-color="" data-image="{{ asset('paper/assets/img/background/background-2.jpg') }}">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
            <form method="#" action="#">
              <div class="card" data-background="color" data-color="blue">
                <div class="card-header">
                  <h3 class="card-title">Iniciar Sesión</h3>
                </div>
                <div class="card-content">
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" placeholder="Enter email" class="form-control input-no-border">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="form-control input-no-border">
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-fill btn-wd ">Iniciar Sesión</button>
                  <br>
                  <br>
                  <div class="forgot">
                    <a href="javascript:;">¿Olvidó su contraseña?</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('paper.pages.components.footer')
  </div>
</div>