<div class="sidebar" data-background-color="{{ $user['color'] }}" data-active-color="{{ $user['active-color'] }}">

  <!--
  Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
  Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->
  <!-- Logo Start -->
  <div class="logo">
    <a href="javascript:;" class="simple-text logo-mini">
      CIT
    </a>
    <a href="javascript:;" class="simple-text logo-normal"> <i class="ti-world"></i> <i class="ti-angle-right"></i>  C. I. T.</a>
  </div>
  <!-- Logo Ends -->

  <div class="sidebar-wrapper">
  <!-- User Nav Start -->
    <div class="user">
      <div class="info">
        <div class="photo">
          <img src="{{ $user['picture'] }}"/>
        </div>

        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <span>{{ $user['name'] }}<b class="caret"></b></span>
        </a>
        <div class="clearfix"></div>

        <div class="collapse" id="collapseExample">
          <ul class="nav">
            @foreach ($user['submenu'] as $subitem)
              <li>
                <a href="{{ $subitem['url'] }}">
                  <span class="sidebar-mini">{{ $subitem['min'] }}</span>
                  <span class="sidebar-normal">{{ $subitem['title'] }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  <!-- User Nav Ends -->

  <!-- Sidebar Starts -->
    {!! Menu::make($items, 'nav')->render('paper.components.menu') !!}
  <!-- Sidebar Ends -->

  </div>
</div>