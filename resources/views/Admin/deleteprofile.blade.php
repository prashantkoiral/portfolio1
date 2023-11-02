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

            <div class="main-panel">

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
                    <h1>User Profiles</h1>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered custom-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Website</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Age</th>
                                    <th>Degree</th>
                                    <th>Freelance</th>
                                    <th>Description</th>
                                    <th>Profile Photo</th>
                                    <th>Action</th> <!-- Delete action column -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td style="color: white;">{{ $data->id }}</td>
                                    <td style="color: white;">{{ $data->name }}</td>
                                    <td style="color: white;">{{ $data->email }}</td>
                                    <td style="color: white;">{{ $data->birthday }}</td>
                                    <td style="color: white;">{{ $data->website }}</td>
                                    <td style="color: white;">{{ $data->phone }}</td>
                                    <td style="color: white;">{{ $data->city }}</td>
                                    <td style="color: white;">{{ $data->age }}</td>
                                    <td style="color: white;">{{ $data->degree }}</td>
                                    <td style="color: white;">{{ $data->freelance }}</td>
                                    <td style="color: white;">{{ $data->description }}</td>
                                    <td><img src="{{ $data->profile_photo }}" alt="Profile Photo" width="100"
                                            height="100"></td>


                                    <td>
                                        <form action="{{ route('delete_profile', ['id' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('update_profile', ['id' => $data->id]) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
        @include('Admin.footer')

   