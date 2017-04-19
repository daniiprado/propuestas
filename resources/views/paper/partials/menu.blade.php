<ul class="{{ $class }}">
  @foreach ($items as $item)
    <li @if ($item['class']) class="{{ $item['class'] }}" @endif id="menu_{{ $item['id'] }}">
      @if (empty($item['submenu']))
        <a href="{{ $item['url'] }}">
          <i class="{{ $item['icon'] }}"></i>
          <p>{{ $item['title'] }}</p>
        </a>
      @else
        <a href="{{ $item['url'] }}" data-toggle="collapse">
          <i class="{{ $item['icon'] }}"></i>
          <p>{{ $item['title'] }} <b class="caret"></b> </p>
        </a>
        <div class="collapse" id="{{ $item['div'] }}">
          <ul class="nav auto-collapse">
            @foreach ($item['submenu'] as $subitem)
              <li @if ($subitem['class']) class="{{ $subitem['class'] }}" @endif id="menu_{{ $subitem['id'] }}" data-coll="{{ $item['div'] }}">
                <a href="{{ $subitem['url'] }}">
                  @if(empty($subitem['min']))
                    <span class="sidebar-mini"><i class="{{ $subitem['icon'] }}"></i></span>
                  @else
                    <span class="sidebar-mini">{{ $subitem['min'] }}</span>
                  @endif
                  <span class="sidebar-normal">{{ $subitem['title'] }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endif
    </li>
  @endforeach
</ul>