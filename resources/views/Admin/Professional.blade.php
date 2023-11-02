<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('Admin.css')

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('Admin.sidebar')
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('Admin.nev')
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
        <h1>Add Professional Experience</h1>
        <form action="{{ url('add_professional') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" required style="color: white;" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" required style="color: white;" required>
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <input type="text" class="form-control" id="company" name="company" required style="color: white;" required>
            </div>
            <div class="mb-3">
                <label for="responsibilities" class="form-label">Responsibilities</label>
                <textarea class="form-control" id="responsibilities" name="responsibilities" rows="4" required style="color: white;" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Experience</button>
        </form>
    </div>
    </div>


<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

@include('Admin.footer')