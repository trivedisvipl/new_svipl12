<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{!!asset('assets/admin/images/logo.png')!!}" alt="branding logo">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Svipl</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/dashboard') ? 'active' : '') !!}">
            <a href="{!!URL::to(ADMIN_SLUG.'/dashboard')!!}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-dashboard"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/experties') ? 'active' : '') !!}">
            <a href="{!!URL::to(ADMIN_SLUG.'/experties')!!}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-dashboard"></i>
              <div data-i18n=" Our Expertise"> Our Expertise</div>
            </a>
        </li>
        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/slider*') ? 'active' : '') !!}">
            <a href="{!! route('slider.index') !!}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-images"></i>
              <div data-i18n="Slider">Slider</div>
            </a>
        </li>
        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/blog*') || Request::is(ADMIN_SLUG.'/category*')  ? 'active open' : '') !!}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-blog"></i>
              <div data-i18n="Blogs">Blogs</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/blogcategories*') ? 'active' : '') !!}">
                <a href="{!! route('blogcategories.index') !!}" class="menu-link">
                  <div data-i18n="Blog Category">Blog Categories</div>
                </a>
              </li>
              <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/blog/*') || Request::is(ADMIN_SLUG.'/blog') ? 'active' : '') !!}">
                <a href="{!! route('blog.index') !!}" class="menu-link">
                  <div data-i18n="Blog">Blog</div>
                </a>
              </li>
            </ul>
        </li>
        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/testimonials*') ? 'active' : '') !!}">
            <a href="{!! route('testimonials.index') !!}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa fa-star"></i>
              <div data-i18n="Testimonials">Testimonials</div>
            </a>
        </li>

         <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/clients*') ? 'active' : '') !!}">
            <a href="{!! route('clients.index') !!}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa fa-star"></i>
              <div data-i18n="Our Clients">Our Clients</div>
            </a>
        </li>

        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/work*') || Request::is(ADMIN_SLUG.'/work*')  ? 'active open' : '') !!}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-blog"></i>
              <div data-i18n="Our Work">Our Work </div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/workcategories*') ? 'active' : '') !!}">
                <a href="{!! route('workcategories.index') !!}" class="menu-link">
                  <div data-i18n="Work Category">Work Categories</div>
                </a>
              </li>
              <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/work/*') || Request::is(ADMIN_SLUG.'/work') ? 'active' : '') !!}">
                <a href="{!! route('work.index') !!}" class="menu-link">
                  <div data-i18n="Work">Work</div>
                </a>
              </li>
            </ul>
        </li>
          <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/contact*') ? 'active' : '') !!}">
            <a href="{!! route('contact.index') !!}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa fa-star"></i>
              <div data-i18n="Contact">Contact</div>
            </a>
        </li>
          <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/careers*') ? 'active' : '') !!}">
            <a href="{!! route('careers.index') !!}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa fa-star"></i>
              <div data-i18n="careers">Careers</div>
            </a>
        </li>



        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/setting*') ? 'active open' : '') !!}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-address-card"></i>
              <div data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">

              <li class="menu-item {!! (request()->routeIs('setting.home') ? 'active' : '') !!}">
                <a href="{!! route('setting.home') !!}" class="menu-link">
                  <div data-i18n="Home">Home</div>
                </a>
              </li>
              <li class="menu-item {!! (request()->routeIs('setting.why') ? 'active' : '') !!}">
                <a href="{!! route('setting.why') !!}" class="menu-link">
                  <div data-i18n="Why Us">Why Us</div>
                </a>
              </li>
               <li class="menu-item {!! (request()->routeIs('setting.mission') ? 'active' : '') !!}">
                <a href="{!! route('setting.mission') !!}" class="menu-link">
                  <div data-i18n="Mission & Vision">Mission & Vision</div>
                </a>
              </li>
               <li class="menu-item {!! (request()->routeIs('setting.process') ? 'active' : '') !!}">
                <a href="{!! route('setting.process') !!}" class="menu-link">
                  <div data-i18n="Our Process ">Our Process </div>
                </a>
              </li>
               <li class="menu-item {!! (request()->routeIs('setting.portfolio') ? 'active' : '') !!}">
                <a href="{!! route('setting.portfolio') !!}" class="menu-link">
                  <div data-i18n="Portfolio">Portfolio</div>
                </a>
              </li>
            <li class="menu-item {!! (request()->routeIs('setting.services') ? 'active' : '') !!}">
                <a href="{!! route('setting.services') !!}" class="menu-link">
                  <div data-i18n="Services">Services</div>
                </a>
              </li>
              <li class="menu-item {!! (request()->routeIs('setting.blog') ? 'active' : '') !!}">
                <a href="{!! route('setting.blog') !!}" class="menu-link">
                  <div data-i18n="Blog">Blog</div>
                </a>
              </li>
              <li class="menu-item {!! (request()->routeIs('setting.careers') ? 'active' : '') !!}">
                <a href="{!! route('setting.careers') !!}" class="menu-link">
                  <div data-i18n="Careers">Careers</div>
                </a>
              </li>
               <li class="menu-item {!! (request()->routeIs('setting.contact') ? 'active' : '') !!}">
                <a href="{!! route('setting.contact') !!}" class="menu-link">
                  <div data-i18n="Contact Us">Contact Us</div>
                </a>
              </li>

            </ul>
        </li>





    </ul>
</aside>
