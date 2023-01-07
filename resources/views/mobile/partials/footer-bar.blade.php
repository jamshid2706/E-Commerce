<div id="footer-bar" class="footer-bar-1 pb-2 footer-bar-no-text footer-bar-detached">
    <a class="{{ request()->is('/clients') ? "active-nav" : "" }}" href="{{ route('clients') }}">
        <i class="bi bi-people-fill"></i>
    </a>
    <a class="{{ request()->is('/products/*') ? "active-nav" : "" }}" href="{{ route('products') }}">
        <i class="bi bi-bag-fill"></i>
    </a>
    <a class="{{ request()->is('/') ? "active-nav" : "" }}" href="{{ route('home') }}">
        <i class="bi bi-house-fill"></i>
    </a>
    <a class="{{ request()->is() ? "active-nav" : "" }}" href="{{ route('sales') }}">
        <i class="bi bi-arrow-down-up"></i>
    </a>
    <a class="{{ request()->is() ? "active-nav" : "" }}" href="#" data-menu="menu-settings">
        <i class="bi bi-gear-fill"></i>
    </a>
</div>
