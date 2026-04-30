<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
  <div class="container-fluid px-0">
    <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
      <div class="d-flex align-items-center">
        <!-- Search form -->
        <form class="navbar-search form-inline" id="navbar-search-main">
          <div class="input-group input-group-merge search-bar">
            <span class="input-group-text" id="topbar-addon"><svg class="icon icon-xs"
                x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"></path>
              </svg></span></span>
            <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="{{ __('ui.search') }}" aria-label="{{ __('ui.search') }}"
              aria-describedby="topbar-addon">
          </div>
        </form>
        <a href="https://themesberg.com/product/laravel/volt-admin-dashboard-template" target="_blank"><button
            class="btn mx-1 me-2 btn-secondary" type="button"><i
              class="fas fa-arrow-down mx-1"></i>{{ __('ui.download') }}</button></a>
      </div>
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center">
        <!-- Language switcher -->
        <li class="nav-item dropdown me-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="icon icon-xs text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-6.534H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.992a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.764 16h-3.528l-.341.447a1 1 0 11-1.79-.895l.99-1.98.02-.038 2.99-5.99A1 1 0 0113 8zm-1.438 6h2.876l-1.438-2.877L11.562 14z" clip-rule="evenodd"></path>
            </svg>
            <span class="d-none d-lg-inline-block ms-1 text-gray-900 small fw-bold">
              {{ app()->getLocale() === 'ar' ? __('ui.lang_ar') : __('ui.lang_en') }}
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end py-1 mt-2">
            <a class="dropdown-item {{ app()->getLocale() === 'ar' ? 'fw-bold' : '' }}" href="{{ route('locale.switch', 'ar') }}">
              {{ __('ui.lang_ar') }}
            </a>
            <a class="dropdown-item {{ app()->getLocale() === 'en' ? 'fw-bold' : '' }}" href="{{ route('locale.switch', 'en') }}">
              {{ __('ui.lang_en') }}
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true"
            href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
              </path>
            </svg>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
            <div class="list-group list-group-flush">
              <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">{{ __('ui.notifications_title') }}</a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <img alt="Image placeholder" src="/assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
                  </div>
                  <div class="col ps-0 ms-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                      </div>
                      <div class="text-end">
                        <small class="text-danger">{{ __('ui.a_few_moments_ago') }}</small>
                      </div>
                    </div>
                    <p class="font-small mt-1 mb-0">{{ __('ui.notif_msg_1') }}</p>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <img alt="Image placeholder" src="/assets/img/team/profile-picture-2.jpg" class="avatar-md rounded">
                  </div>
                  <div class="col ps-0 ms-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                      </div>
                      <div class="text-end">
                        <small class="text-danger">{{ __('ui.2_hrs_ago') }}</small>
                      </div>
                    </div>
                    <p class="font-small mt-1 mb-0">{{ __('ui.notif_msg_2') }}</p>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <img alt="Image placeholder" src="/assets/img/team/profile-picture-3.jpg" class="avatar-md rounded">
                  </div>
                  <div class="col ps-0 m-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                      </div>
                      <div class="text-end">
                        <small>{{ __('ui.5_hrs_ago') }}</small>
                      </div>
                    </div>
                    <p class="font-small mt-1 mb-0">{{ __('ui.notif_msg_3') }}</p>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <img alt="Image placeholder" src="/assets/img/team/profile-picture-4.jpg" class="avatar-md rounded">
                  </div>
                  <div class="col ps-0 ms-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                      </div>
                      <div class="text-end">
                        <small>{{ __('ui.1_day_ago') }}</small>
                      </div>
                    </div>
                    <p class="font-small mt-1 mb-0">{{ __('ui.notif_msg_4') }}</p>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <img alt="Image placeholder" src="/assets/img/team/profile-picture-5.jpg" class="avatar-md rounded">
                  </div>
                  <div class="col ps-0 ms-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                      </div>
                      <div class="text-end">
                        <small>{{ __('ui.2_hrs_ago') }}</small>
                      </div>
                    </div>
                    <p class="font-small mt-1 mb-0">{{ __('ui.notif_msg_5') }}</p>
                  </div>
                </div>
              </a>
              <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                  <path fill-rule="evenodd"
                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                    clip-rule="evenodd"></path>
                </svg>
                {{ __('ui.view_all') }}
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown ms-lg-3">
          <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div class="media d-flex align-items-center">
              <img class="avatar rounded-circle" alt="Image placeholder" src="/assets/img/team/profile-picture-1.jpg">
              <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                <span
                  class="mb-0 font-small fw-bold text-gray-900">{{  auth()->user()->first_name ? auth()->user()->first_name . ' ' . auth()->user()->last_name : 'User Name'}}</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="/profile">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                  clip-rule="evenodd"></path>
              </svg>
              {{ __('ui.my_profile') }}
            </a>
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center">
              <livewire:logout /></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>