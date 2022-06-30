<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Student management system</title>
    <link rel="stylesheet" href="{{ asset("style.css") }}">
</head>
<body>
    @include("navbar")

    <div class=" header-container d-flex justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout === "index")
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
            </div>
        </div>
    @elseif($layout === "create")
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://www.ei-ie.org/img/H4e4WzIC9qyTukhhXGpce2VVjfArBnueAeHRDrQ1.jpg?p=card" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Create new student list</h5>
                            <form action="{{ url("/store") }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input type="text" name="cne" class="form-control" placeholder="Enter CNE">
                                </div>
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Second Name</label>
                                    <input type="text" name="secondName" class="form-control" placeholder="Enter Second Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="text" name="age" class="form-control" placeholder="Enter Age">
                                </div>
                                <div class="form-group">
                                    <label for="">Speciality</label>
                                    <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @elseif($layout === "show")
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout === "edit")
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://assets.weforum.org/global_future_council/image/54ek6O_3C8L0EJYI-oWFFUJpUmzPbhlmnUIQ72NgaHU.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update information of student</h5>
                            <form action="{{ url("/update/$student->id") }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input type="text" name="cne" class="form-control" placeholder="Enter CNE" value="{{ $student->cne }}">
                                </div>
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Enter First Name" value="{{ $student->firstName }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Second Name</label>
                                    <input type="text" name="secondName" class="form-control" placeholder="Enter Second Name" value="{{ $student->secondName }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="text" name="age" class="form-control" placeholder="Enter Age" value="{{ $student->age }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Speciality</label>
                                    <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality" value="{{ $student->speciality }}">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>
    @endif

    <footer class="py-3 d-flex justify-content-center">
        <span>CopyRight &copy;, All right reserve.</span><span>Developed by Thee Thant</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
