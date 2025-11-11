@if (Auth::check())
    <div>{{ Auth::user()->name }}</div>
@else
    <div>Guest</div>
@endif
