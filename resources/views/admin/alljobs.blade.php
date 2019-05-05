@extends('layouts.admin')

@section('sidebar')
@include('admin.partials.navbar')
@include('admin.partials.sidebar')
@endsection


@section('content')
<div class="container-fluid">

    <!-- Top Table -->
    <div class="card top-table">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 top-table-item">
                <form class="form-inline md-form">
                    <input class="form-control" type="text" placeholder="Search here..." style="max-width: 200px;">
                    <button class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 top-table-item">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                    <div class="dropdown-menu dropdown-primary text-center">
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Table -->

    <div class="card">

        <div class="card-header gradient-blue">
            <h3>All Jobs</h3>
        </div>

        <div class="px-4">

            <div class="table-responsive">
                <!-- Table -->
                <table class="table table-hover">

                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" id="checkbox">
                                <label class="form-check-label" for="checkbox"></label>
                            </th>
                            <th>Title</i></th>
                            <th>Category</i></th>
                            <th>Type</i></th>
                            <th>Hours</i></th>
                            <th>Salary</a></th>
                            <th>Deadline</a></th>
                            <th>Featured</a></th>
                        </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                <label class="form-check-label" for="checkbox1"></label>
                            </th>
                            <td>
                                <strong><a href="#" class="font-weight-bold">Senior PHP Web Developer</a></strong>
                            </td>
                            <td>IT &amp; Computer</td>
                            <td><span class="badge badge-pill pink"><a href="#">FULL - TIME</a></span></td>
                            <td>8</td>
                            <td>$1,100 - $2,400</td>
                            <td>22.12.2012</td>
                            <td><i class="fas fa-star orange-text"></i></td>
                        </tr>


                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" id="checkbox2">
                                <label class="form-check-label" for="checkbox2"></label>
                            </th>
                            <td>
                                <strong><a href="#" class="font-weight-bold">Middle PHP Web Developer</a></strong>
                            </td>
                            <td>IT &amp; Computer</td>
                            <td><span class="badge badge-pill pink"><a href="#">PART - TIME</a></span></td>
                            <td>12</td>
                            <td>$800 - $1,400</td>
                            <td>22.12.2012</td>
                            <td><i class="far fa-star orange-text"></i></td>
                        </tr>



                    </tbody>
                    <!-- Table body -->
                </table>
                <!-- Table -->
            </div>

            <hr class="my-0">


            <!-- Bottom Table UI -->
            <div class="row justify-content-center align-items-center my-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-circle pg-blue m-0">
                        <li class="page-item disabled"><a class="page-link">First</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link">Last</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Bottom Table UI -->

        </div>
    </div>

</div>
@endsection



@section('footer')
@include('admin.partials.footer')
@endsection
