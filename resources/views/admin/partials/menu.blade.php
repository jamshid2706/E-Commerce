<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('admin.home') }}" class="side-menu side-menu{{ request()->is("admin") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin.products") }}"
               class="side-menu side-menu{{ request()->is("admin/products") || request()->is("admin/products/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="inbox"></i></div>
                <div class="side-menu__title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.categories') }}"
               class="side-menu side-menu{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="shopping-bag" data-lucide="shopping-bag" class="lucide lucide-shopping-bag"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 01-8 0"></path></svg>
                </div>
                <div class="side-menu__title">Category</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.clients') }}"
               class="side-menu side-menu{{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="users" data-lucide="users" class="lucide lucide-users"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87"></path><path d="M16 3.13a4 4 0 010 7.75"></path></svg></div>
                <div class="side-menu__title">Clients</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.sales') }}" class="side-menu side-menu{{ request()->is("admin/sales") || request()->is("admin/sales/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="clipboard"></i></div>
                <div class="side-menu__title">Sales</div>
            </a>
        </li>
    </ul>
</nav>
