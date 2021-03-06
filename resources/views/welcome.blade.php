@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-1">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Asylum Assist</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
        </ul>
        <select class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <option selected>Nationality</option>
          <option value="1">South African</option>
          <option value="2">Congolese</option>
        </select>
      </div>
    </div>
  </nav>
  <div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="includes/img/logo.jpg" alt="" width="300">
      <h2>Asylum Assistant</h2>
      <p class="lead">Please complete the below form with your particulars</p>
    </div>

    <div class="row">
      <div class="">
        <h4 class="mb-3">A1. PERSONAL DETAILS OF APPLICANT</h4>
        <form class="needs-validation" novalidate>
          <!-- Last Name Input -->
          <div class="">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Doe" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <!-- Fornames Input -->
          <div class="row g-3">
            <div class="">
              <label for="firstName" class="form-label mt-2">Fornames in full</label>
              <input type="text" class="form-control" id="firstName" placeholder="John, Peter" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <!-- Date of Birth Input -->
            <div class="col-12">
              <label for="date-of-birth" class="form-label">Date of Birth</label>
              <div class="input-group has-validation">
                <input type="date" class="form-control" id="date-of-birth" required>
              <div class="invalid-feedback">
                  Your date of birth is required.
                </div>
              </div>
            </div>
            <!-- Gender Input-->
            <div class="col-12">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" aria-label="gender">
                <option selected>Select Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
              </select>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <!-- Country of Birth -->
            <div class="col-12">
              <label for="country-of-birth" class="form-label">Country of Birth</label>
              <input type="text" class="form-control" id="country-of-birth" placeholder="Congo" required>
              <div class="invalid-feedback">
                Please enter your country of birth.
              </div>
            </div>
            <!-- Province of Birth -->
            <div class="col-12">
              <label for="province-of-birth" class="form-label">Province of Country of Birth</label>
              <input type="text" class="form-control" id="province-of-birth" placeholder="West District" required>
              <div class="invalid-feedback">
                Please enter your province of birth.
              </div>
            </div>
            <!-- City of Birth -->
            <div class="col-12">
              <label for="city-of-birth" class="form-label">City of Birth</label>
              <input type="text" class="form-control" id="city-of-birth" placeholder="Kinshasa" required>
              <div class="invalid-feedback">
                Please enter your city of birth.
              </div>
            </div>
            <!-- Current Nationality -->
            <div class="col-12">
              <label for="nationality" class="form-label">Current Nationality</label>
              <input type="text" class="form-control" id="nationality" placeholder="Congolese" required>
              <div class="invalid-feedback">
                Please enter your nationality.
              </div>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Submit Application</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div> 
@endsection