
    @forelse ($stages as $stage)
        {{-- Stages start  --}}
        <div class="card col-3 h-50 m-3 border shadow shadow-md  card-{{$stage->name}}">
            <div class="card-header d-block positon-relative border-0 py-0 px-2 pt-3 text-capitalize">

                    <span contenteditable class="m-0 d-inline-block col-10 stage_name" data-stage-id=" {{ $stage->id }}">
                        {{ $stage->name }}</span>
                    {{-- working here --}}
                {{-- setting list start --}}
                <div class="setting-list top-0 end-0  bg-white py-2 dropdown">
                    <span class="float-right  px-1 dropdown-tggole" data-toggle='dropdown'>
                        <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                    </span>                    <table class="table border-0 table-hover dropdown-menu">
                        <tr class="col px-3 dropdown-item">
                            <td class="remove-stage" data-stage-id="{{$stage->id}}">Delete Stage</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="card-body task-parent p-0">
                <ul class="droppable   list-group" data-task-stage="{{$stage->id}}">
                    @foreach ($task as $task_item)
                    @if ($task_item->stage_id == $stage->id)
                    <li class="draggable task-radius list-item p-0 my-2 " data-task-id="{{ $task_item->task_id}}"
                         draggable="true">
                        {{-- sub-task card start --}}
                        <div class="card sub-task">
                            <div class="task-overlay d-none p-1  "data-toggle="modal"
                                data-target="#card-setting-modal">
                                <span
                                    class=" cursor-pointer dropdown float-right  mr-2 h5 text-white bg-danger border">
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
                            <div class="card-header py-2 task-radius radius-bottom-0 text-capitalize " style="background: {{$task_item->task_color}}">
                            </div>
                            <p class=" fw-bold px-2 my-2 fw-500 text-left w-100 font-12 'text-dark'">{{$task_item->task_name}}</p>

                            <div class="card-body m-0 p-1 ">
                                <ul class="task-label px-2 col-12 row">
                                    @foreach ($labels as $label)
                                    <li class="m-1 text-light badge badge-dark col-2 rounded">
                                        <strong>
                                        </strong>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="task-mid">
                                    <strong>
                                        {{$task_item->description}}
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
                      @endif
                    @endforeach
                    <li class="position-relative draggable not-placeable">
                        <div class="card col h-50  border shadow-md ">
                            <p
                                class="py-2 btn text-dark my-auto d-flex align-items-center justify-content-start add-new-task">
                                <span class="font-14 mx-2"><ion-icon name="add-outline"></ion-icon></span>
                                <span class="">Add a Card</span>
                            </p>
                        </div>
                        {{-- hidden form --}}

                        <div class="card  fit-content  px-1 py-2 position-absolute top-0 left-0 card-title-form"
                            style="display: none;">
                            <form   class="task-title-form">
                                <input type="number" name="stage_id" class="form-control"
                                    value="{{ $stage->id }}" hidden>
                                <input type="number" name="project_id" class="form-control"
                                    value="{{ $project->id }}" hidden>
                                <input type="text" name="csrf-token" class="form-control"
                                    value="{{ csrf_token() }}" hidden>
                                <input type="text" name="task_title" class="form-control" id="card-title"
                                    placeholder="Enter a title for this card...">
                                <div class="my-2">
                                    <span class="btn btn-primary add-card">Add</span>
                                    <span class="btn font-14 close-title-form"><ion-icon
                                            name="close-outline"></ion-icon></span>
                                </div>
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    @empty
    @endforelse

