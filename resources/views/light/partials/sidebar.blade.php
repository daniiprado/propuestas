<div class="sidebar" data-color="{{ $user['active-color'] }}" data-image="{{ $user['bg'] }}">

  <div class="logo">
    <a href="javascript:;" class="logo-text">
      <i class="pe-7s-science"></i>  C. I. T.
    </a>
  </div>
  <div class="logo logo-mini">
    <a href="javascript:;" class="logo-text">
      CIT
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{ $user['picture'] }}" />
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          {{ $user['name'] }}
          <b class="caret"></b>
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            @foreach ($user['submenu'] as $subitem)
              <li>
                <a href="{{ $subitem['url'] }}">
                  <span>{{ $subitem['title'] }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <!-- Sidebar Starts -->
      {!! Menu::make($items, 'nav')->render('light.partials.menu') !!}
    <!-- Sidebar Ends -->

  </div>
</div>