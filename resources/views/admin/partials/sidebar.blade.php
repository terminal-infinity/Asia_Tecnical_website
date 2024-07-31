<nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
        Asia<span>Technical</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">web apps</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Courese</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('admin.view_category') }}" class="nav-link">Category</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.view_course') }}" class="nav-link">Course</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.view_member') }}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Managment</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.view_image') }}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Gallary</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.view_service') }}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Services</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.view_notice') }}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Notice</span>
          </a>
        </li>

        <li class="nav-item nav-category">Web</li>
        
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Services List</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            
            {{-- <ul class="nav sub-menu">
              @foreach ($service as $services)
              @if ($services->service != '')
              <li class="nav-item">
                <a href="" class="nav-link">{{$servics->service_name}}</a>
              </li>
              @endif
              @endforeach
            </ul> --}}
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Advanced UI</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="#" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>