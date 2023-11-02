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
        <h1>Add Education</h1>
        <form action="{{ url('add_education') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="degree" class="form-label">Degree</label>
                <input type="text" class="form-control" id="degree" name="degree" required style="color: white;"required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" required style="color: white;" required>
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">School</label>
                <input type="text" class="form-control" id="school" name="school" required style="color: white;" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required style="color: white;" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Education</button>
        </form>
    </div>
    </div>

@include('Admin.footer')