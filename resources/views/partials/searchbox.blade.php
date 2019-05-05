<form action="{{ route('jobs') }}" id = "findJob" method="post">
    @csrf
    <div class="row search-fields">
        <div class="search-field col-xl col-lg col-md-12">
            <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here..." name = "keyword">
                <option value="" disabled selected>Enter job title...</option>
                <option value="1">PHP</option>
                <option value="2">HTML</option>
                <option value="3">CSS</option>
                <option value="4">JavaScript</option>
            </select>
            <label>Keywords?</label>
        </div>

        <div class="search-field col-xl col-lg col-md-12">
            <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here..." name = "location">
                <option value="" disabled selected>Enter location...</option>
                <option value="1">Uzbekistan</option>
                <option value="2">USA</option>
                <option value="3">Korea</option>
                <option value="4">Japan</option>
            </select>
            <label>Where?</label>
        </div>

        <div class="search-field col-xl col-lg col-md-12">
            <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here..." name = "category">
                <option value="" disabled selected>Enter category...</option>
                <option value="1">IT &amp; Computer</option>
                <option value="2">Finance &amp; Logistics</option>
                <option value="3">Arts, Media, Design</option>
                <option value="4">Education</option>
                <option value="5">Engineering</option>
            </select>
            <label>Category?</label>
        </div>

        <div class="search-field-btn col-xl-1 col-lg-1 col-md-12">
            <button type="submit" class="btn btn-primary btn-block btn-rounded" id = "searchButton">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</form>
