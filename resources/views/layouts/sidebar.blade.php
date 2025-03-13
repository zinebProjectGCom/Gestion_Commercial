<div class="d-flex flex-column p-3 text-white h-100 justify-content-between" style="background-color: #1c2331">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi me-2" width="40" height="32">
      <use xlink:href="#bootstrap"></use>
    </svg>
    <span class="fs-4">Menu</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="#" class="nav-link active" aria-current="page">
        <i class="bi bi-house"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#home"></use>
        </svg>
        Home
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-speedometer2"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#speedometer2"></use>
        </svg>
        Dashboard
      </a>
    </li>
    <li>
      <a href="{{route('familles.index')}}" class="nav-link text-white">
        <i class="far fa-newspaper"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#speedometer2"></use>
        </svg>
        Familles
      </a>
    </li>
    <li>
      <a href="{{route('sousFamilles.index')}}" class="nav-link text-white">
        <i class="fas fa-warehouse"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#speedometer2"></use>
        </svg>
        Sous Familles
      </a>
    </li>
    <li>
      <a href="{{route('produits.index')}}" class="nav-link text-white">
        <i class="fas fa-store"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#speedometer2"></use>
        </svg>
        Produits
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-table"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#table"></use>
        </svg>
        Orders
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-grid"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#grid"></use>
        </svg>
        Products
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-person-circle"></i>
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#people-circle"></use>
        </svg>
        Customers
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
      <strong>user</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div>