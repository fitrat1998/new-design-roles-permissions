<!-- Sidebar -->
<aside class="admin-sidebar" id="admin-sidebar">
    <div class="sidebar-content">
        <nav class="sidebar-nav">
            <ul class="nav flex-column">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Bosh sahifa</span>
                    </a>
                </li>

                @php
                    $structureActive = request()->is('roles*') || request()->is('permissions*') || request()->is('users*');
                    $ariaExpanded = $structureActive ? 'true' : 'false';
                    $collapseClass = $structureActive ? 'collapse show' : 'collapse';
                @endphp


                <li class="nav-item">
                    <a class="nav-link {{ $structureActive ? 'active' : '' }}"
                       href="#"
                       data-bs-toggle="collapse"
                       data-bs-target="#elementsSubmenu"
                       aria-expanded="{{ $ariaExpanded }}">
                        <i class="bi bi-puzzle"></i>
                        <span>Tuzilma</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>

                    <div class="{{ $collapseClass }}" id="elementsSubmenu">
                        <ul class="nav nav-submenu">

                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('roles*') ? 'active' : '' }}"
                                   href="{{ route('roles.index') }}">
                                    <i class="bi bi-people"></i>
                                    <span>Rollar</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('permissions*') ? 'active' : '' }}"
                                   href="{{ route('permissions.index') }}">
                                    <i class="bi bi-key"></i>
                                    <span>Ruxsatlar</span>
                                </a>
                            </li>

                            <a class="nav-link {{ request()->is('users*') ? 'active' : '' }}"
                               href="{{ route('users.index') }}">
                                <i class="bi bi-person"></i>
                                <span>Foydalanuvchilar</span>
                            </a>


                        </ul>
                    </div>
                </li>


            </ul>
        </nav>
    </div>
</aside>
