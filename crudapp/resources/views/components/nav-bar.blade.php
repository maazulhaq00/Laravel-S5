{{-- php artisan make:component NavBar --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ URL::to('/') }}">Student CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" href=" {{ URL::to('/') }} ">View Students</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('/add-user') }}">Add Student</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>