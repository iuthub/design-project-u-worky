<nav class="navbar navbar-expand-xl navbar-dark scrolling-navbar fixed-top">

<a class="navbar-brand" href="index.html">
  <img src="{{asset('frontend/img/logo.png')}}" alt="u-WORKY" />
</a>

<!-- Collapse button -->
<button
  class="navbar-toggler"
  type="button"
  data-toggle="collapse"
  data-target="#mainNav"
  aria-controls="mainNav"
  aria-expanded="false"
  aria-label="Toggle navigation"
>
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="mainNav">

  <!-- Links -->
  <ul class="navbar-nav ml-auto d-flex">
    <li class="nav-item my-auto">
      <a class="nav-link" href="index.html"
        >Home
        <span class="sr-only">(current)</span>
      </a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown my-auto">
      <a
        class="nav-link"
        id="navbarDropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        >Jobs</a
      >
      <div
        class="dropdown-menu dropdown-menu-center"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <a class="dropdown-item text-center" href="#">Job Categories</a>
        <a class="dropdown-item text-center" href="jobs-listing.html">Search for job</a>
        <a class="dropdown-item text-center" href="#">Find on Map</a>
      </div>
    </li>
    <!-- /Dropdown -->

    <li class="nav-item my-auto">
      <a class="nav-link" href="candidate-listing.html">Candidates</a>
    </li>

    <li class="nav-item my-auto">
      <a class="nav-link" href="#">Employers</a>
    </li>

    <li class="nav-item my-auto">
      <a class="nav-link" href="#">Contact us</a>
    </li>

    <li>
      <form class="form-inline">
        <div class="md-form container-fluid my-auto">
          <button
            type="button"
            class="btn btn-primary btn-block btn-rounded"
          >
            Sign in
          </button>
        </div>
      </form>
    </li>
  </ul>
  <!-- /Links -->
</div>
<!-- /Collapsible content -->
</nav>