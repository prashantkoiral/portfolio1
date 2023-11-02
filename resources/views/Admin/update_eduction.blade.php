<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('Admin.css')
</head>

<body>
    <div class="container-scroller">
        @include('Admin.sidebar')
        </nav>
        <div class="container-fluid page-body-wrapper">
            @include('Admin.nev')
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
                        <h1>Edit Education</h1>
                        <form action="{{ route('update_education_conform', ['id' => $educationData->id]) }}"
                            method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="degree" class="form-label">Degree</label>
                                <input type="text" class="form-control" id="degree" name="degree"
                                    value="{{ $educationData->degree }}" style="color: white;" required>
                            </div>
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration"
                                    value="{{ $educationData->duration }}" style="color: white;" required>
                            </div>
                            <div class="mb-3">
                                <label for="school" class="form-label">School</label>
                                <input type="text" class="form-control" id="school" name="school"
                                    value="{{ $educationData->school }}" style="color: white;" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"
                                style="color: white;"required>{{ $educationData->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Education</button>
                        </form>
                    </div>
                </div>
</div>
                @include('Admin.footer')
            </div>
        </div>
    </div>
</body>

</html>