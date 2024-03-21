@extends('master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Wizard</h1>
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary mx-auto" id="show-task-form">Add Task</button>
                @include('task.task_form')
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">prev link</a></div>
                <div class="breadcrumb-item"><a href="#">current link</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
            <div class="card col-4 bg-white border ">
                <div class="card-header position-relative w-100" >
                    <h2 class="section-title d-inline-block">Assigned </h2>
                    <div class="d-flex task-quick-link">
                        <div class="show-people position-relative">
                            <span class="toggle-btn icon-hover" name="people"><ion-icon class="icon-md" name="people-outline"></ion-icon></span>
                            <div class="card col-8 bg-white border" id="toggle-task-people">
                                <div class="card-header m-0 p-0">
                                    <div class="d-flex justify-content-around align-items-center">
                                    <strong class="text-responsive mx-auto">People in this task</strong>
                                        <span id="add-sub-task" class="icon-hover mt-2 float-right my-auto">
                                        <ion-icon name="person-add-outline" class="icon-sm float-right"  title="Add more people in task"></ion-icon>
                                    </span>
                                    </div>
                                </div>
                                <div class="card-body m-0 p-0">
                                    <ul class="col list-group ">
                                        <li class="list-item list-style-none">
                                            <ion-icon name="person-circle-outline" class="icon-md align-middle"></ion-icon>
                                            <span>User Name <small>HR</small></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="show-attach position-relative">

                            <span class="toggle-btn icon-hover" name="attach"><ion-icon class="icon-md " name="document-attach-outline"></ion-icon></span>
                            <div class="card col-8 bg-white border" id="toggle-task-attach">
                                <div class="card-header m-0 p-0">
                                    <strong class="text-responsive mx-auto">Attachments</strong>
                                </div>
                                <div class="card-body m-0 p-0">
                                    <ul class="col list-group ">
                                        <li class="list-item list-style-none">
                                            <span>File <small><a href="">view</a></small></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="show-setting position-relative">
                            <span class="toggle-btn icon-hover" name="setting"><ion-icon class="icon-md " name="ellipsis-vertical-outline"></ion-icon></span>
                            <div class="card col-8 bg-white border" id="toggle-task-setting">
                                <div class="card-header m-0 p-0">
                                    <strong class="text-responsive mx-auto">Explore</strong>
                                </div>
                                <div class="card-body m-0 p-0">
                                    <ul class="col list-group ">
                                        <li class="list-item list-style-none">
                                            <span>Comming soon<small></small></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body task-assigned-preview col-12 ">
                    <div class="task-assigned-preview d-flex ">
                        {{-- @forelse ( $show as $task ) --}}
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h6>{{$task->task_name}}</h6> --}}
                                    {{-- <p>Peoples :{{$task->name}}</p> --}}
                                    {{-- {{dd($task->label)}} --}}
                                    {{-- @foreach ($item->label as $label_item) --}}
                                    {{-- <span class="badge bg-${labelColor} text-white">{{$label_item}} --}}
                                    </span>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        {{-- @empty --}}
                        {{-- Create Your first task --}}
                        {{-- @endforelse --}}
                    </div>
                    <div id='task-stage-one'>
                        <div class="d-flex justify-content-end">
                            <span id="add-sub-task" class="icon-hover mt-2 float-right"><ion-icon name="add-circle-outline" class="icon-lg float-right"></ion-icon></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-4 bg-white border ">
                <div class="card-header">
                    <h2 class="section-title d-inline-block">In Progress </h2>
                </div>
                <div class="card-body">
                    <div class="image-preview d-flex justify-content-center align-items-center col-12">
                        <i class="fa-solid fa-plus display-3"></i>
                    </div>
                </div>
            </div>
            <div class="card col-4 bg-white border ">
                <div class="card-header">
                    <h2 class="section-title d-inline-block">Ready </h2>
                </div>
                <div class="card-body">
                    <div class="image-preview d-flex justify-content-center align-items-center col-12">
                        <i class="fa-solid fa-plus display-3"></i>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
  
@endsection
