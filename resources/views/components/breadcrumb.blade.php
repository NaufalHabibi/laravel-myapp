@props(['items' => []])

<nav aria-label="breadcrumb" class="mb-4">
  <ol class="breadcrumb">
    @foreach ($items as $label => $link)
      @if ($link)
        <li class="breadcrumb-item">
          <a href="{{ $link }}">{{ $label }}</a>
        </li>
      @else
        <li class="breadcrumb-item active" aria-current="page">{{ $label }}</li>
      @endif
    @endforeach
  </ol>
</nav>
