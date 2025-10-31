<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern Bootstrap 5 Admin Template - Clean, responsive dashboard">
    <meta name="keywords" content="bootstrap, admin, dashboard, template, modern, responsive">
    <meta name="author" content="Bootstrap Admin Template">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Modern Bootstrap Admin Template">
    <meta property="og:description" content="Clean and modern admin dashboard template built with Bootstrap 5">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../assets/favicon-CvUZKS4z.svg">
    <link rel="icon" type="image/png" href="../assets/favicon-B_cwPWBd.png">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap4-duallistbox@4.0.2/dist/bootstrap-duallistbox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Select2 ni form-control bilan moslashtirish */
        .select2-container .select2-selection--multiple {
            min-height: 55px;
            padding: 6px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            background-color: #fff;
            font-size: 1rem;
            line-height: 1.5;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #0d6efd;
            color: #fff;
            border: none;
            padding: 2px 8px;
            margin-top: 4px;
            margin-right: 4px;
            border-radius: 0.25rem;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
            margin-right: 4px;
        }

        /* Tanlangan ro‘l badge */
        .select2-selection__choice {
            position: absolute;
            padding: 4px 28px 4px 8px !important; /* o‘ng tomonda x belgiga joy */
            margin: 4px 4px 4px 4px !important;;
            background-color: #0d6efd;
            color: #fff;
            border-radius: 0.25rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        /*!* X belgisi *!*/
        /*.select2-selection__choice__remove {*/
        /*    position: absolute;*/
        /*    top: 50%;*/
        /*    right: 8px;*/
        /*    transform: translateY(-50%);*/
        /*    color: #fff;*/
        /*    font-weight: bold;*/
        /*    cursor: pointer;*/
        /*    font-size: 14px;*/
        /*    background: transparent;*/
        /*    border: none;*/
        /*}*/

    </style>

    <!-- Title -->
    <title>Dashboard</title>

    <!-- Theme Color -->
    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <meta name="theme-color" content="#6366f1">

    <!-- PWA Manifest -->
    <link rel="manifest" href="../assets/manifest-DTaoG9pG.json">
    <script type="module" crossorigin src="../assets/main-f0Mg-34g.js"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('assets/main-DLfE7m78.css') }}">
</head>

<body data-page="dashboard" class="admin-layout">
<!-- Loading Screen -->
<div id="loading-screen" class="loading-screen">
    <div class="loading-spinner">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<!-- Main Wrapper -->
<div class="admin-wrapper" id="admin-wrapper">

    <!-- Header -->
    <header class="admin-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container-fluid">
                <!-- Logo/Brand - Now first on the left -->
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img
                        src="data:image/svg+xml,%3csvg%20width='32'%20height='32'%20viewBox='0%200%2032%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3c!--%20Background%20circle%20for%20the%20M%20--%3e%3ccircle%20cx='16'%20cy='16'%20r='16'%20fill='url(%23logoGradient)'/%3e%3c!--%20Centered%20Letter%20M%20--%3e%3cpath%20d='M10%2024V8h2.5l2.5%206.5L17.5%208H20v16h-2V12.5L16.5%2020h-1L14%2012.5V24H10z'%20fill='white'%20font-weight='700'/%3e%3c!--%20Gradient%20definition%20--%3e%3cdefs%3e%3clinearGradient%20id='logoGradient'%20x1='0%25'%20y1='0%25'%20x2='100%25'%20y2='100%25'%3e%3cstop%20offset='0%25'%20style='stop-color:%236366f1;stop-opacity:1'%20/%3e%3cstop%20offset='100%25'%20style='stop-color:%238b5cf6;stop-opacity:1'%20/%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e"
                        alt="Logo" height="32" class="d-inline-block align-text-top me-2">
                    <h1 class="h4 mb-0 fw-bold text-primary">Metis</h1>
                </a>

                <!-- Search Bar with Alpine.js -->
                <div class="search-container flex-grow-1 mx-4" x-data="searchComponent">
                    <div class="position-relative">
                        <input type="search"
                               class="form-control"
                               placeholder="Search... (Ctrl+K)"
                               x-model="query"
                               @input="search()"
                               data-search-input
                               aria-label="Search">
                        <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>

                        <!-- Search Results Dropdown -->
                        <div x-show="results.length > 0"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             class="position-absolute top-100 start-0 w-100 bg-white border rounded-2 shadow-lg mt-1 z-3">
                            <template x-for="result in results" :key="result.title">
                                <a :href="result.url"
                                   class="d-block px-3 py-2 text-decoration-none text-dark border-bottom">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-file-text me-2 text-muted"></i>
                                        <span x-text="result.title"></span>
                                        <small class="ms-auto text-muted" x-text="result.type"></small>
                                    </div>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Right Side Icons -->
                <div class="navbar-nav flex-row">
                    <!-- Theme Toggle with Alpine.js -->
                    <div x-data="themeSwitch">
                        <button class="btn btn-outline-secondary me-2"
                                type="button"
                                @click="toggle()"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom"
                                title="Toggle theme">
                            <i class="bi bi-sun-fill" x-show="currentTheme === 'light'"></i>
                            <i class="bi bi-moon-fill" x-show="currentTheme === 'dark'"></i>
                        </button>
                    </div>

                    <!-- Fullscreen Toggle -->
                    <button class="btn btn-outline-secondary me-2"
                            type="button"
                            data-fullscreen-toggle
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Toggle fullscreen">
                        <i class="bi bi-arrows-fullscreen icon-hover"></i>
                    </button>

                    <!-- Notifications -->
                    <div class="dropdown me-2">
                        <button class="btn btn-outline-secondary position-relative"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <i class="bi bi-bell"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    3
                                </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Notifications</h6></li>
                            <li><a class="dropdown-item" href="#">New user registered</a></li>
                            <li><a class="dropdown-item" href="#">Server status update</a></li>
                            <li><a class="dropdown-item" href="#">New message received</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-center" href="#">View all notifications</a></li>
                        </ul>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary d-flex align-items-center"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <img
                                src="data:image/svg+xml,%3csvg%20width='32'%20height='32'%20viewBox='0%200%2032%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3c!--%20Background%20circle%20--%3e%3ccircle%20cx='16'%20cy='16'%20r='16'%20fill='url(%23avatarGradient)'/%3e%3c!--%20Person%20silhouette%20--%3e%3cg%20fill='white'%20opacity='0.9'%3e%3c!--%20Head%20--%3e%3ccircle%20cx='16'%20cy='12'%20r='5'/%3e%3c!--%20Body%20--%3e%3cpath%20d='M16%2018c-5.5%200-10%202.5-10%207v1h20v-1c0-4.5-4.5-7-10-7z'/%3e%3c/g%3e%3c!--%20Subtle%20border%20--%3e%3ccircle%20cx='16'%20cy='16'%20r='15.5'%20fill='none'%20stroke='rgba(255,255,255,0.2)'%20stroke-width='1'/%3e%3c!--%20Gradient%20definition%20--%3e%3cdefs%3e%3clinearGradient%20id='avatarGradient'%20x1='0%25'%20y1='0%25'%20x2='100%25'%20y2='100%25'%3e%3cstop%20offset='0%25'%20style='stop-color:%236b7280;stop-opacity:1'%20/%3e%3cstop%20offset='100%25'%20style='stop-color:%234b5563;stop-opacity:1'%20/%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e"
                                alt="User Avatar"
                                width="24"
                                height="24"
                                class="rounded-circle me-2">
                            <span class="d-none d-md-inline">John Doe</span>
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')
    <!-- Sidebar -->


    <!-- Floating Hamburger Menu -->
    <button class="hamburger-menu"
            type="button"
            data-sidebar-toggle
            aria-label="Toggle sidebar">
        <i class="bi bi-list"></i>
    </button>

    <!-- Main Content -->
    <main class="admin-main">
        <div class="container-fluid p-4 p-lg-5">

            @yield('content')


        </div>
    </main>

    <!-- Footer -->
    <footer class="admin-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0 text-muted">© <?= date('Y'); ?> LoiqDev & design by Boostrapt group </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-muted"><b>V </b>1.0.0</p>
                </div>
            </div>
        </div>
    </footer>
</div> <!-- /.admin-wrapper -->
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap4-duallistbox@4.0.2/dist/jquery.bootstrap-duallistbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $('select.duallistbox').each(function () {
        $(this).bootstrapDualListbox({
            // nonSelectedListLabel: $(this).data('label-left') || 'Mavjud',
            // selectedListLabel: $(this).data('label-right') || 'Tanlangan',
            filterPlaceHolder: $(this).data('placeholder') || 'Qidirish...',
            infoText: $(this).data('info-text') || 'Jami {0} ta',
            infoTextEmpty: $(this).data('info-empty') || 'Bo‘sh',
            infoTextFiltered: $(this).data('info-filtered') || '<span class="label label-warning">Filtrlangan</span> {0} dan {1}',
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.select2').select2({
            // placeholder: "Rollarni tanlang",
            allowClear: true,
            width: '100%' // bu muhim!
        });
    });
</script>


<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/Uzbek.json'
            }
        });
    });
</script>

<script>
function togglePassword(id, icon) {
    const input = document.getElementById(id);
    const isHidden = input.type === 'password';
    input.type = isHidden ? 'text' : 'password';
    icon.textContent = isHidden ? '🕶️' : '👁️';
}

function checkPasswordMatch() {
    const password = document.getElementById('password').value;
    const confirm = document.getElementById('password_confirmation').value;
    const success = document.getElementById('password-match-success');
    const error = document.getElementById('password-match-error');

    if (!confirm) {
        success.style.display = 'none';
        error.style.display = 'none';
        return;
    }

    if (password === confirm) {
        success.style.display = 'block';
        error.style.display = 'none';
    } else {
        success.style.display = 'none';
        error.style.display = 'block';
    }
}
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.querySelector('[data-sidebar-toggle]');
        const wrapper = document.getElementById('admin-wrapper');

        if (toggleButton && wrapper) {
            const isCollapsed = localStorage.getItem('sidebar-collapsed') === 'true';
            if (isCollapsed) {
                wrapper.classList.add('sidebar-collapsed');
                toggleButton.classList.add('is-active');
            }

            toggleButton.addEventListener('click', () => {
                const isCurrentlyCollapsed = wrapper.classList.contains('sidebar-collapsed');

                if (isCurrentlyCollapsed) {
                    wrapper.classList.remove('sidebar-collapsed');
                    toggleButton.classList.remove('is-active');
                    localStorage.setItem('sidebar-collapsed', 'false');
                } else {
                    wrapper.classList.add('sidebar-collapsed');
                    toggleButton.classList.add('is-active');
                    localStorage.setItem('sidebar-collapsed', 'true');
                }
            });
        }
    });


</script>


</body>
</html>
