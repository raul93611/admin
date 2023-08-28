<li class="nav-item">
  <a class="nav-link" href="{{$href}}">
    {{$icon}}
    <p>
      {{$slot}}
      @isset($badge)
      <span class="right badge badge-danger">{{$badge}}</span>
      @endisset
    </p>
  </a>
</li>