<div class="row gx-4">
    <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
            <img src="/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
    </div>
    <div class="col-auto my-auto">
        <div class="h-100">
            <h5 class="mb-1">
                {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
                Emprendedora
            </p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 {{ request()->routeIs('profile') ? 'active' : '' }} d-flex align-items-center justify-content-center" href="{{ route('profile') }}" role="tab" aria-selected="{{ request()->routeIs('profile') }}">
                        <i class="ni ni-settings-gear-65"></i>
                        <span class="ms-2">Configuración</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 {{ request()->routeIs('user-recipts') ? 'active' : '' }} d-flex align-items-center justify-content-center" href="{{ route('user-recipts') }}" role="tab" aria-selected="{{ request()->routeIs('user-recipts') }}">
                        <i class="ni ni-email-83"></i>
                        <span class="ms-2">Mis recibos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center" href="javascript:;" role="tab" aria-selected="false">
                        <i class="ni ni-app"></i>
                        <span class="ms-2">Redes</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
