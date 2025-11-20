
<aside id="layout-menu" class="layout-menu menu-vertical bg-menu-theme">
  <div class="app-brand demo">
    <a href="/" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <li class="menu-item active">
      <a href="{{ route('home') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase"><span>Master Data</span></li>
    <li class="menu-item">
      <a href="{{ route('products.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-package"></i>
        <div>Produk</div>
      </a>
    </li>
  </ul>
</aside>
