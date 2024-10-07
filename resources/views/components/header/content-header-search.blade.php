<style>
    .header-area {
        -webkit-transition-duration: 500ms;
                transition-duration: 500ms;
        background-color: #ffffff;
        width: 100%;
        height: 170px;
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        -webkit-box-shadow: 0 2px 12px rgba(116, 119, 148, 0.175);
                box-shadow: 0 2px 12px rgba(116, 119, 148, 0.175);
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-3 mt-2">
    <div class="flex-shrink-0">
        <a href="#!">
            <img src="{{ asset('assets/img/logo-medali.png') }}" alt="" class="" width="50">
        </a>
    </div>
    <div class="text-wrapper flex-grow-1 text-end">
        <p class="mb-1 text-grey" id="dashboardDateHeader"></p>
        <h4 class="text-white fw-bolder">{{ $title_header }}</h5>
    </div>
</div>

<div class="search-page-form">
    <!-- Search via Voice-->
    <form action="#" method="post">
        <input class="form-control" type="search" placeholder="Search...">
        <button type="submit"><i class="ti ti-search"></i></button>
    </form>
</div>
