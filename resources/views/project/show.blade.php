@extends('master')
@section('content')
    <section class="section">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <div class="section-header ">
            <h1>Board</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Board</div>
            </div>
        </div>
        <div class="section-body task-main  h-100  ">
            {{-- task area top --}}
            <div class="w-100 p-3 d-flex justify-content-around align-items-center bg-{{ $project ? $project->bg_color : '' }}"
                style="background:#0000003d">
                <div class="project-title text-dark">
                    <h5 class="h5 text-white">{{ $project ? $project->project_name : '' }}</h5>
                </div>
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary mx-auto" id="show-task-form">Add Task</button>
                    @include('project.task_form')

                </div>
                <div class=" col justify-content-end d-flex ">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle mx-2" id="boardToggler" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="boardToggler">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something fdfdelse here</a>
                        </div>
                    </div>
                    {{-- filter dropdown --}}
                    <div class="dropdown">

                        <button class="btn bg-transparent dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="filter-outline"></ion-icon> <span class="mx-1">Filter</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>

                <div class="border border-dark " style="height: 1.2rem;"></div>

                <div class="avatar-users mx-2">
                    <ul class="list-unstyled m-auto">
                        <li class="avatar bg-secondary">
                            <span class="text-center w-100">AD</span>
                        </li>
                    </ul>
                </div>
                <div class="setting ">
                    <span class="text-white h4 cursor-pointer dropdown">
                        <span class="bg-transparent  dropdown-toggle text-white" type="button" id="setting-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                        </span>
                        <div class="dropdown-menu" aria-labelledby="setting-dropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Ansdsdother action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </span>
                </div>
            </div>
           {{-- include task cards --}}
           <div class="card-group " id="task-card-wrapper">
           @include('project.card.task_cards')
        </div>
        </div>
    </section>

    <div class="modal fade" id="card-setting-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-100 justify-content-center d-flex " role="document">
            <div class="modal-content " id="card-setting-main">
                <div class="modal-header d-flex  p-3 m-0 py-5 bg-info position-relative text-white">
                    <button type="button" class="close  position-absolute top-0  text-white" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <span class="card-cover-icon h6 align-middle ">
                        <ion-icon name="image-outline"></ion-icon>
                        Cover image
                    </span>
                </div>
                <div class="modal-body">
                    {{-- main --}}
                    @include('project.card.card_body')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade show" id="card-setting-modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" style="display: block;">
            <div class="modal-dialog modal-dialog-centered w-100 justify-content-center d-flex " role="document">
                <div class="modal-content " id="card-setting-main">
                    <div class="modal-header d-flex  p-3 m-0 py-5 bg-info position-relative text-white">
                        <button type="button" class="close  position-absolute top-0  text-white" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <span class="card-cover-icon">
                            <ion-icon name="image-outline" role="img" class="md hydrated"></ion-icon>
                            Cover
                        </span>
                    </div>
                    <div class="modal-body"> --}}
    {{-- main --}}
    {{-- @include('project.card.card_body') --}}
    {{-- </div> --}}
    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
    {{-- </div>
            </div>
        </div> --}}
    {{-- </div> --}}
@endsection
