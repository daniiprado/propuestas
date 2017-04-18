<div class="sidebar" data-active-color="{{ $user['active-color'] }}" data-background-color="{{ $user['color'] }}" data-image="{{ $user['bg'] }}">
  <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
  <div class="logo">
    <a href="javascript:;" class="simple-text">
      <i class="material-icons">fingerprint</i>  C. I. T.
    </a>
  </div>
  <div class="logo logo-mini">
    <a href="javascript:;" class="simple-text">
      CIT
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{ asset('material/assets/img/faces/avatar.jpg') }}" />
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
      {!! Menu::make($items, 'nav')->render('material.partials.menu') !!}
    <!-- Sidebar Ends -->

  </div>
</div>