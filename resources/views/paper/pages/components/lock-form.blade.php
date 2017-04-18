<div class="wrapper wrapper-full-page">
  <div class="full-page lock-page" data-color="green" data-image="{{ $image }}">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
    <div class="content">
      <form method="#" action="#">
        <div class="card card-lock">
          <div class="author">
            <img class="avatar" src="{{ $user['picture'] }}" alt="{{ $user['name'] }}">
          </div>
          <h4>{{ $user['name'] }}</h4>
          <div class="form-group">
            <input type="password" placeholder="Enter Password" class="form-control">
          </div>
          <button type="button" class="btn btn-wd">Desbloquear</button>
        </div>
      </form>
    </div>
    @include('paper.pages.components.footer')
  </div>
</div>