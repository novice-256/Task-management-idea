@extends('master')
@section('content')

<section class="section">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <div class="w-100 p-3 d-flex justify-content-around align-items-center" style="background:#0000003d">
            <div class="project-title text-dark">
                <h5 class="h5 text-white">{{$project->project_name}}</h5>
            </div>
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary mx-auto" id="show-task-form">Add Task</button>
                @include('task.task_form')

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
        <div class="card-group">
            <div class="card col-3 h-50 m-3 border shadow shadow-md">
                <div class="card-header d-block positon-relative border-0 py-0 px-2 pt-3 text-capitalize">
                    <h5 class="h5 col py-2 ">
                        <span contenteditable class="m-0 d-inline-block col-10">header</span>
                        {{-- working here --}}
                        <span class="float-right  px-1 toggle-setting  ">
                            <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                        </span>
                    </h5>
                    {{-- setting list start --}}
                    <div class="setting-list col-8 task-radius border bg-white py-2 d-none">
                        <h6 class="h6 text-center setting-title text-gray p-2 my-auto">List Items</h6>
                        <table class="table border-0 table-hover">
                            <tr class="col px-3">
                                <td>Add Card</td>
                            </tr>
                            <tr class="col px-3">
                                <td>Add Card</td>
                            </tr>
                            <tr class="col px-3">
                                <td>Add Card</td>
                            </tr>
                            <tr class="border-bottom border-secondary"></tr>
                            <tr class="col px-3">
                                <td>Add Card</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="card-body task-parent p-0">
                    <ul class="droppable   list-group">
                        <li class="draggable task-radius list-item p-0 my-2 " data-task-id="1" data-task-stage="initial" draggable="true">
                            {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                                <div class="task-overlay d-none p-1  "data-toggle="modal" data-target="#card-setting-modal">

                                    <span class=" cursor-pointer dropdown float-right  mr-2 h5 text-white bg-danger border">
                                        <span class="bg-transparent  dropdown-toggle text-white" type="button"
                                            id="task-quick-setting" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <ion-icon name="create-outline"></ion-icon>

                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="task-quick-setting">
                                            <li class="dropdown-item" href="#">
                                                <p class="col"> Open Card</p>
                                            </li>
                                            <a class="dropdown-item" href="#">Edit Labels</a>
                                            <a class="dropdown-item" href="#">Add members</a>
                                            <a class="dropdown-item" href="#">Change Cover</a>
                                            <a class="dropdown-item" href="#">Edit Dates</a>
                                        </ul>
                                    </span>
                                </div>
                                <div class="card-header task-radius radius-bottom-0  bg-secondary ">
                                    <h6 class="h6  py-2 fw-500 text-center w-100  text-white">Sub task name</h6>
                                </div>
                                <div class="card-body m-0 p-1 ">
                                    <ul class="task-label px-2 col-12 row">
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong>
                                                labels
                                            </strong>
                                        </li>
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong>
                                                labels
                                            </strong>
                                        </li>

                                    </ul>
                                    <div class="task-mid">
                                        <strong>
                                            Description for the task
                                        </strong>
                                    </div>
                                    <div class="task-links h6 col-8 d-flex justify-content-around p-1 ">
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="menu-outline"></ion-icon>
                                            <span class="mx-1">{{ '' }}</span>
                                        </span>

                                        <span class="d-flex align-items-center">
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <span class="mx-1">{{ 0 }}</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                            <span class="mx-1">{{ 0 }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="draggable task-radius list-item p-0 my-2 " draggable="true">
                            {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                                <div class="task-overlay d-none p-1 ">
                                    <span class="float-right p-2 mr-2 h5 ">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </span>
                                </div>
                                <div class="card-header task-radius radius-bottom-0  bg-dark ">
                                    <h6 class="h6  py-2 fw-500 text-center w-100  text-white">Sub task name</h6>
                                </div>
                                <div class="card-body m-0 p-1 ">
                                    <ul class="task-label px-2 col-12 row">
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong>
                                                labels
                                            </strong>
                                        </li>
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong>
                                                labels
                                            </strong>
                                        </li>

                                    </ul>
                                    <div class="task-mid">
                                        <strong>
                                            Description for the task
                                        </strong>
                                    </div>
                                    <div class="task-links h6 col-8 d-flex justify-content-around p-1 ">
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="menu-outline"></ion-icon>
                                            <span class="mx-1">{{ '' }}</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <span class="mx-1">{{ 0 }}</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                            <span class="mx-1">{{ 0 }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="position-relative draggable not-placeable">
                            <div class="card col h-50  border shadow-md ">
                                <p class="py-2 btn text-dark my-auto d-flex align-items-center justify-content-start add-new-task">
                                    <span class="font-14 mx-2"><ion-icon name="add-outline"></ion-icon></span>
                                    <span class="">Add a Card</span>
                                </p>
                            </div>
                            {{-- hidden form --}}
                            <div class="card col fit-content border shadow-md px-1 py-2 position-absolute top-0 left-0 card-title-form" style="display: none;">
                                <input type="text" name="" class="form-control" value="1" disabled hidden>
                                <input type="text" name="" class="form-control" id="card-title" placeholder="Enter a title for this card...">
                                <div class="my-2">
                                    <span class="btn btn-primary add-card">Add card</span>
                                    <span class="btn font-14 close-title-form"><ion-icon name="close-outline"></ion-icon></span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="card col-3 h-50 m-3 border shadow-md">
                <div class="card-header border-0 py-0 px-2 pt-3 text-capitalize">

                    <h5 class="h5 col py-2">
                        <span contenteditable>header</span>
                        <span class="float-right mr-2 px-2">
                            <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                        </span>
                    </h5>
                </div>
                <div class="card-body p-1">
                    <ul class="droppable  list-group ">
                        <li class="draggable task-radius list-item p-0 my-2  positions-relative" draggable="true">
                            {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                                <div class="task-overlay d-none p-1 ">
                                    <span class="float-right p-2 mr-2 h5">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </span>
                                </div>
                                @php
                                    $task_header = null;
                                @endphp
                                @if ($task_header)
                                    <div class="card-header task-radius radius-bottom-0  bg-dark ">
                                        <h6 class="h6 py-2 fw-500 text-center w-100  text-white"></h6>
                                    </div>
                                @endif
                                <div class="card-body m-0 p-3 ">
                                    <ul class="task-label px-2 col-12 row">
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong>
                                                labels
                                            </strong>
                                        </li>
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong>
                                                labels
                                            </strong>
                                        </li>

                                    </ul>
                                    <div class="task-mid">
                                        <strong>
                                            Description for the task
                                        </strong>
                                    </div>
                                    <div class="task-links h6 col-8 d-flex justify-content-around p-1 ">
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="menu-outline"></ion-icon>
                                            <span class="mx-1">{{ '' }}</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <span class="mx-1">{{ 0 }}</span>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                            <span class="mx-1">{{ 0 }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>



       <div class="modal fade" id="card-setting-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered w-100 justify-content-center d-flex " role="document">
              <div class="modal-content " id="card-setting-main">
                <div class="modal-header d-flex  p-3 m-0 py-5 bg-info position-relative text-white">
                  <button type="button" class="close  position-absolute top-0  text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <span class="card-cover-icon h6 align-middle ">
                    <ion-icon name="image-outline"></ion-icon>
                    Cover image
                  </span>
                </div>
                <div class="modal-body">
                        {{-- main --}}
        @include('task.card.card_body')
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
        {{-- @include('task.card.card_body') --}}
                 {{-- </div> --}}
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                {{-- </div>
            </div>
        </div> --}}
        </div> --}}
    @endsection
