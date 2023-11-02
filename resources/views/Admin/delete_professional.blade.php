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
<div class="overflow-auto">
    <h1>Professional Experience</h1>
    <table class="table">
        <thead>
            <tr>
            <th style="color: white; font-weight: bold;">ID</th>
                <th style="color: white; font-weight: bold;">Position</th>
                <th style="color: white; font-weight: bold;">Duration</th>
                <th style="color: white; font-weight: bold;">Company</th>
                <th style="color: white; font-weight: bold;">Responsibilities</th>
                <th style="color: white; font-weight: bold;">Action</th> <!-- Delete action column -->
            </tr>
        </thead>
        <tbody>
            @foreach ($professionalData as $profData) <!-- Replace with your professional experience data variable -->
            <tr>
            <td required style="color: white;">{{ $profData->id }}</td>
                <td required style="color: white;">{{ $profData->position }}</td>
                <td required style="color: white;">{{ $profData->duration }}</td>
                <td required style="color: white;">{{ $profData->company }}</td>
                <td required style="color: white;">{{ $profData->responsibilities }}</td>
                <td>
                    <form action="{{ route('delete_professional', ['id' => $profData->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                <a class="btn btn-success" href="{{ route('update_profession', ['id' => $profData->id]) }}">Edit</a>
                 </td>
             </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

@include('Admin.footer')