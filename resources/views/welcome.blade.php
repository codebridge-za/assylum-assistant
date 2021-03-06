@extends('layouts.app')

@section('content')
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
        <form class="form-group">
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
            <br />
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
            <br />
            <div class="col-12">
              <label for="gender" class="form-label">Gender</label>
              <br />
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
            <br />
            <!-- Country of Birth -->
            <div class="col-12">
              <label for="country-of-birth" class="form-label">Country of Birth</label>
              <input type="text" class="form-control" id="country-of-birth" placeholder="Congo" required>
              <div class="invalid-feedback">
                Please enter your country of birth.
              </div>
            </div>
            <br />
            <!-- Province of Birth -->
            <div class="col-12">
              <label for="province-of-birth" class="form-label">Province of Country of Birth</label>
              <input type="text" class="form-control" id="province-of-birth" placeholder="West District" required>
              <div class="invalid-feedback">
                Please enter your province of birth.
              </div>
            </div>
            <br />
            <!-- City of Birth -->
            <div class="col-12">
              <label for="city-of-birth" class="form-label">City of Birth</label>
              <input type="text" class="form-control" id="city-of-birth" placeholder="Kinshasa" required>
              <div class="invalid-feedback">
                Please enter your city of birth.
              </div>
            </div>
            <br />
            <!-- Current Nationality -->
            <div class="col-12">
              <label for="nationality" class="form-label">Current Nationality</label>
              <input type="text" class="form-control" id="nationality" placeholder="Congolese" required>
              <div class="invalid-feedback">
                Please enter your nationality.
              </div>
            </div>

          <br />

          <button class="w-100 btn btn-primary btn-lg form-control" type="submit">Submit Application</button>
        </form>
      </div>
    </div>
  </main>

 
</div> 
@endsection