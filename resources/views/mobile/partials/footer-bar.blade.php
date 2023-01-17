<div id="footer-bar" class="footer-bar-1 pb-2 footer-bar-no-text footer-bar-detached">
    <a class="{{ request()->is('/clients') ? "active-nav" : "" }}" href="{{ route('mobile.clients') }}">
        <i class="bi bi-people-fill"></i>
    </a>
    <a class="{{ request()->is('/products/*') ? "active-nav" : "" }}" href="{{ route('mobile.products') }}">
        <i class="bi bi-bag-fill"></i>
    </a>
    <a class="{{ request()->is('/') ? "active-nav" : "" }}" href="{{ route('mobile.home') }}">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="{{ request()->is('/categories') ? "active-nav" : "" }}" href="{{ route('mobile.categories') }}">
        <i class="bi bi-bookmarks"></i>
    </a>
    <a class="{{ request()->is() ? "active-nav" : "" }}" href="{{ route('mobile.sales') }}">
        <i class="bi bi-arrow-down-up"></i>
    </a>
    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar">
        <i class="bi bi-three-dots"></i>
    </a>
</div>
