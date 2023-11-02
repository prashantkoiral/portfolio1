<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
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
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="container">
                        <div class="overflow-auto overflow-x-auto">
                            <h1>update Professional Experience</h1>
                            <form action="{{ route('update_profession_conform', ['id' => $professionalData->id]) }}"
                                method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="position" name="position"
                                        value="{{ $professionalData->position }}" required style="color: white;">
                                </div>

                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input type="text" class="form-control" id="duration" name="duration"
                                        value="{{ $professionalData->duration}}" style="color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="company" name="company"
                                        value="{{ $professionalData->company}}" style="color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <label for="responsibilities" class="form-label">Responsibilities</label>
                                    <textarea class="form-control" id="responsibilities" name="responsibilities"
                                        rows="4" style="color: white;"
                                        required>{{$professionalData->responsibilities }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">update Experience</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('Admin.footer')