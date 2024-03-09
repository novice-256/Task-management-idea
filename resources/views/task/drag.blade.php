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
        .task-radius{
            border-radius: .5rem !important;

        }
        .draggable {
            padding: .5rem;
            /* border: 2px solid var(--theme-primary); */
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);         
            width: 100%;
        }

        .task-main {
            min-height: 100vh;
            padding: 10px
        }

        .task-main .card {
            border-radius: 1rem !important;
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);

        }
        .draggable *{
            box-shadow: none

}
.sub-task  , .sub-task .card-header , .sub-task .card-body {
    box-shadow: none !important;
   
}
.sub-task {
    min-width: 350px;
}
.radius-bottom-0{
    border-end-end-radius: 0 !important ;
    border-end-start-radius: 0 !important 
}
.radius-0{
    border-radius: 0 !important ;

}
.task-overlay{
    position: absolute;
    height: 100%;
    z-index: 1;
    width: 100%;
    border: 2px solid ;
    left: 0;
    top: 0;
    border-radius: 1rem;
}
.sub-task:hover .task-overlay{
    display: block !important;
}
    </style>
    <div class="section-body task-main bg-info h-100 ">
        <div class="card-group">
            <div class="card col-3 h-50 m-3 border shadow shadow-md">
                <div class="card-header border-0 py-0 text-capitalize">
                    <h6 class="h6 fw-500" >header</h6>
                </div>
                <div class="card-body task-parent p-0">
                    <ul class="droppable   list-group">
                        <li class="draggable task-radius list-item p-0 my-4 " draggable="true">
                             {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                                <div class="card-header task-radius radius-bottom-0  bg-dark ">
                                    <h6 class="h6  py-2 fw-500 text-center w-100  text-white">Sub task name</h6>
                                </div>
                                <div class="card-body m-0 p-1 ">
                                    <ul class="task-label px-2 col-12 row">
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong >
                                                labels
                                            </strong>
                                        </li>
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong >
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

                                        <span class="d-flex align-items-center" >
                                            <ion-icon name="menu-outline"></ion-icon>
                                            <span class="mx-1">{{''}}</span>                                            
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <span class="mx-1">{{0}}</span>                                            
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                            <span class="mx-1">{{0}}</span>                                            
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="draggable task-radius list-item p-0 my-4 " draggable="true">
                             {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                                <div class="card-header task-radius radius-bottom-0  bg-dark ">
                                    <h6 class="h6  py-2 fw-500 text-center w-100  text-white">Sub task name</h6>
                                </div>
                                <div class="card-body m-0 p-1 ">
                                    <ul class="task-label px-2 col-12 row">
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong >
                                                labels
                                            </strong>
                                        </li>
                                        <li class="m-1 text-light badge badge-dark col-2 rounded">
                                            <strong >
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

                                        <span class="d-flex align-items-center" >
                                            <ion-icon name="menu-outline"></ion-icon>
                                            <span>{{''}}</span>                                            
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <span>{{0}}</span>                                            
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                            <span>{{0}}</span>                                            
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card col-3 h-50 m-3 border shadow-md">
                <div class="card-header border-0 py-0 text-capitalize">
                    <h6 class="h6 col py-2" >header 
                    <span class="float-right mr-2 px-2">  
                        <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                    </span>    
                    </h6>
                </div>
                <div class="card-body p-3">
                    <ul class="droppable  list-group ">
                        <li class="draggable task-radius list-item p-0 my-4  positions-relative" draggable="true">
                            {{-- sub-task card start --}}
                            <div class="card sub-task  ">
                               <div class="task-overlay d-none ">
                                <span class="float-right p-2 mr-2 h5">
                                    <ion-icon name="create-outline"></ion-icon>
                                  
                                </span>
                               </div>
                            @php
                                $task_header= null
                            @endphp
                            @if ($task_header)                                
                            <div class="card-header task-radius radius-bottom-0  bg-dark ">
                                <h6 class="h6 py-2 fw-500 text-center w-100  text-white"></h6>
                            </div>
                            @endif
                               <div class="card-body m-0 p-3 ">
                                   <ul class="task-label px-2 col-12 row">
                                       <li class="m-1 text-light badge badge-dark col-2 rounded">
                                           <strong >
                                               labels
                                           </strong>
                                       </li>
                                       <li class="m-1 text-light badge badge-dark col-2 rounded">
                                           <strong >
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
                                       <span class="d-flex align-items-center" >
                                           <ion-icon name="menu-outline"></ion-icon>
                                           <span>{{''}}</span>                                            
                                       </span>
                                       <span class="d-flex align-items-center">
                                           <ion-icon name="chatbubbles-outline"></ion-icon>
                                           <span>{{0}}</span>                                            
                                       </span>
                                       <span class="d-flex align-items-center">
                                           <ion-icon name="checkbox-outline"></ion-icon>
                                           <span>{{0}}</span>                                            
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
