@extends('master')
@section('content')
    <style>
        .droppable {
            min-height: 5px;
            min-width: 300px !important;
            border-radius: .5rem !important;

        }

        .is-dragging {
            background-color: gray;
            opacity: .9;

        }

        .task-radius {
            border-radius: .5rem !important;

        }

        .draggable {
            padding: .5rem;
            /* border: 2px solid var(--theme-primary); */
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            width: 100%;
            cursor: pointer;

        }

        .task-main {
            min-height: 100vh;
            padding: 10px
        }

        .task-main .card {
            border-radius: 1rem !important;
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);

        }

        .draggable * {
            box-shadow: none
        }

        .sub-task,
        .sub-task .card-header,
        .sub-task .card-body {
            box-shadow: none !important;

        }

        .sub-task {
            min-width: 350px;
        }

        .radius-bottom-0 {
            border-end-end-radius: 0 !important;
            border-end-start-radius: 0 !important
        }

        .radius-0 {
            border-radius: 0 !important;

        }

        .task-overlay {
            position: absolute;
            height: 100%;
            font-size: 1.25rem !important;
            width: 100%;
            border: 2px solid;
            left: 0;
            top: 0;
            border-radius: 1rem;
        }

        .sub-task:hover .task-overlay {
            display: block !important;
        }

        .task-overlay span {
            z-index: 2;
            cursor: pointer;
        }

        .task-main i,
        .task-links * {
            cursor: pointer !important;
        }
        .toggle-setting{
            cursor: pointer;
            top: 0;
            right: 0;
        }
        .setting-list table td{
            font-size: 12pt ;
            height: 40px !important ;
            text-align:justify
        }
        .setting-title{
            font-size: 10pt ;
            font-weight: bold
        }
        .setting-list {
            position: absolute;
            right :1rem;
            z-index: 1;

        }
       
    </style>
    <div class="section-body task-main  h-100 ">
        <div class="card-group">
            <div class="card col-3 h-50 m-3 border shadow shadow-md">
                <div class="card-header d-block positon-relative border-0 py-0 px-2 pt-3 text-capitalize">
                    <h5 class="h5 col py-2 ">header
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
                        <li class="draggable task-radius list-item p-0 my-4 " draggable="true">
                            {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                                <div class="task-overlay d-none p-1 ">
                                    <span class="float-right p-2 mr-2 h5 text-white bg-dark">
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
                        <li class="draggable task-radius list-item p-0 my-4 " draggable="true">
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
                    </ul>
                </div>
            </div>
            <div class="card col-3 h-50 m-3 border shadow-md">
                <div class="card-header border-0 py-0 px-2 pt-3 text-capitalize">

                    <h5 class="h5 col py-2">header
                        <span class="float-right mr-2 px-2">
                            <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                        </span>
                    </h5>
                </div>
                <div class="card-body p-1">
                    <ul class="droppable  list-group ">
                        <li class="draggable task-radius list-item p-0 my-4  positions-relative" draggable="true">
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
    @endsection
