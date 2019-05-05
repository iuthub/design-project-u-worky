@extends('layouts.master')

@section('title')
Jobs
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
@include('dashboard.jobsposter')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="advanced-search card">
                <div class="blue-text">
                    <h6 class="advanced-search-title">Advanced Search
                        <a onclick="toggleSearch()">
                            <i class="fas fa-caret-down fa-2x"></i>
                        </a>
                    </h6>
                </div>

                <form action="">
                    <div class="d-none" id="extSearch">

                        <div class="row row-sub-menu">

                            <!-- Experience -->
                            <div class="col-xl-4 col-lg-4 col-md-12 sub-menu">
                                <h6 class="sub-title">Experience</h6>

                                <!-- Options -->
                                <div class="radio-group">
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="experience-option-1"
                                            name="radio-experience">
                                        <label class="form-check-label" for="experience-option-1">No experience</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="experience-option-2"
                                            name="radio-experience">
                                        <label class="form-check-label" for="experience-option-2">Between 1 and 3
                                            years</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="experience-option-3"
                                            name="radio-experience">
                                        <label class="form-check-label" for="experience-option-3">Between 3 and 6
                                            years</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="experience-option-4"
                                            name="radio-experience">
                                        <label class="form-check-label" for="experience-option-4">More than 6
                                            years</label>
                                    </div>
                                </div>

                                <!-- /Options -->
                            </div>
                            <!-- /Experience -->

                            <!-- Employment -->
                            <div class="col-xl-4 col-lg-4 col-md-12 sub-menu">
                                <h6 class="sub-title">Employment</h6>

                                <!-- Options -->
                                <div class="radio-group">
                                    <div class="option">
                                        <input type="checkbox" class="form-check-input" id="employment-option-1"
                                            name="checkbox-employment">
                                        <label class="form-check-label" for="employment-option-1">Full-time</label>
                                    </div>
                                    <div class="option">
                                        <input type="checkbox" class="form-check-input" id="employment-option-2"
                                            name="checkbox-employment">
                                        <label class="form-check-label" for="employment-option-2">Part-time</label>
                                    </div>
                                    <div class="option">
                                        <input type="checkbox" class="form-check-input" id="employment-option-3"
                                            name="checkbox-employment">
                                        <label class="form-check-label" for="employment-option-3">Contract</label>
                                    </div>
                                    <div class="option">
                                        <input type="checkbox" class="form-check-input" id="employment-option-4"
                                            name="checkbox-employment">
                                        <label class="form-check-label" for="employment-option-4">Internship</label>
                                    </div>
                                </div>

                                <!-- /Options -->
                            </div>
                            <!-- /Employment -->

                            <!-- Sorting -->
                            <div class="col-xl-4 col-lg-4 col-md-12 sub-menu">
                                <h6 class="sub-title">Sort By</h6>

                                <!-- Options -->
                                <div class="radio-group">
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="sort-option-1"
                                            name="radio-sort">
                                        <label class="form-check-label" for="sort-option-1">By name</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="sort-option-2"
                                            name="radio-sort">
                                        <label class="form-check-label" for="sort-option-2">By date</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="sort-option-3"
                                            name="radio-sort">
                                        <label class="form-check-label" for="sort-option-3">By salary ascending</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="form-check-input" id="sort-option-4"
                                            name="radio-sort">
                                        <label class="form-check-label" for="sort-option-4">By salary descending</label>
                                    </div>
                                </div>

                                <!-- /Options -->
                            </div>
                            <!-- /Sorting -->

                        </div>

                        <div class="row row-sub-menu">
                            <div class="col-xl-4 col-lg-4 col-md-12 sub-menu">
                                <h6 class="sub-title">Salary From</h6>
                                <div class="md-form">
                                    <input type="text" id="input-salary-from" name="input-salary-from"
                                        class="form-control">
                                    <label for="input-salary-from">Salary from...</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 sub-menu">
                                <h6 class="sub-title">Salary To</h6>
                                <div class="md-form">
                                    <input type="text" id="input-salary-to" name="input-salary-to" class="form-control">
                                    <label for="input-salary-to">Salary to...</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 sub-menu">
                                <h6 class="sub-title">Working hours</h6>
                                <div class="md-form">
                                    <input type="text" id="input-hours" class="form-control">
                                    <label for="input-hours">Working hours per day...</label>
                                </div>
                            </div>
                        </div>

                        <div class="row btn-sort-wrapper">
                            <button class="btn btn-primary btn-rounded">Sort</button>
                        </div>

                    </div>
                </form>

            </div>


            <div class="row">
                @if(isset($jobs))
                @foreach ($jobs as $item)
                <!-- Card -->
                <div class="col-lg-6 col-md-6 job">
                    <div class="card">
                        <div class="row">
                            <!-- Card image -->
                            <div class="col-4 card-image-wrapper">
                                <div class="card-image">
                                    <img src="{{asset('frontend/img/'.$item->photo())}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <!--Card image -->

                            <div class="col-8">
                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Category & Title -->
                                    <h5 class="card-title"><strong><a href="{{route('jobDetails', ['id'=>$item->id])}}">{{$item->name}}</a></strong></h5>
                                    <span class="badge badge-pill pink"><a href="#">{{$item->type()}}</a></span>
                                    <!-- /Category & Title -->

                                    <p>
                                        <i class="fa fas fa-suitcase pr-3 mb-1 blue-text"></i>{{$item->employer()->name}}<br>
                                        <i class="fas fa-map-marker-alt pr-3 mb-1 red-text"></i>{{$item->location()->name}}<br>
                                        <i class="fas fa-money-bill pr-3 mb-1 green-text"></i>UZS{{$item->salary()->from}}
                                        - UZS{{$item->salary()->to}}<br>
                                    </p>
                                </div>
                                <!-- /Card content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Card -->
                @endforeach
                @endif
            </div>
        </div>
    </div>


    {{-- <div class="row justify-content-center align-items-center my-4">
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


    </div> --}}
</div>
@endsection



@section('footer')
@include('partials.footer')
@endsection


@section('scripts')
<script>
    function toggleSearch(){
        var extSearch = $("#extSearch");
        if(extSearch.hasClass('d-none')){
          $('#extSearch').removeClass('d-none');
          $('#extSearch').addClass('d-block');
        } else {
          $('#extSearch').removeClass('d-block');
          $('#extSearch').addClass('d-none');
        }
      }
</script>
@endsection
