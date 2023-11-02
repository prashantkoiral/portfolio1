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


                    <div class="container">
                    <h1 style="color: white;">Create New Profile</h1>
                        <form action="{{ url('add_profile') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <!-- User Information -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="" required style="color: white;">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="" required style="color: white;">
                            </div>
                            <div class="col-4">
                                <label for="birthday" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" value="" style="color: white;">
                            </div>
                            <div class="col-8">
                                <label for="website" class="form-label">Website</label>
                                <input type="text" class="form-control" id="website" name="website" value="" style="color: white;">
                            </div>
                            <div class="col-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="" style="color: white;">
                            </div>
                            <div class="col-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="" style="color: white;">
                            </div>
                            <div class="col-md-6">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" value="" style="color: white;">
                            </div>
                            <div class="col-md-6">
                                <label for="degree" class="form-label">Degree</label>
                                <input type="text" class="form-control" id="degree" name="degree" value="" style="color: white;">
                            </div>
                            <div class="col-6">
                                <label for="freelance" class="form-label">Freelance</label>
                                <input type="text" class="form-control" id="freelance" name="freelance" value="" style="color: white;">
                            </div>
                            <div class="col-6">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description" style="color: white;"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="profile_photo" class="form-label">Profile Photo</label>
                                <input type="file" class="form-control" id="profile_photo" name="profile_photo" >
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update User Information</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            