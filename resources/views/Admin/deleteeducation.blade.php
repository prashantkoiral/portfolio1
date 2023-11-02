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
@if(session('error'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
<div class="overflow-auto">
    <h1>Education Information</h1>
    <table class="table">
           <thead>
            <tr>
            <th style="color: white;">ID</th>
                <th style="color: white;">Degree</th>
                <th style="color: white;">Duration</th>
                <th style="color: white;">School</th>
                <th style="color: white;">Description</th>
                <th style="color: white;">Action</th> <!-- Delete action column -->
            </tr>
        </thead>
        <tbody>
            @foreach ($educationData as $eduData) <!-- Replace with your education data variable -->
            <tr>
            <td style="color: white;">{{ $eduData->id }}</td>
                <td style="color: white;">{{ $eduData->degree }}</td>
                <td style="color: white;">{{ $eduData->duration }}</td>
                <td style="color: white;">{{ $eduData->school }}</td>
                <td style="color: white;">{{ $eduData->description }}</td>
                <td>
                    <form action="{{ route('delete_education', ['id' => $eduData->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                <a class="btn btn-success" href="{{ route('update_eduction', ['id' => $eduData->id]) }}">Edit</a>
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