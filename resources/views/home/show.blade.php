@extends('master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Board</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Board</div>
            </div>
        </div>

        <div class="section-body">
            <form id="add-project-form" action="{{url('project/store')}}" method="POST">
                @csrf
                    <div class="col-12">
                        <div class="card-body">
                           <span class="float-right cursor-pointer   rounded  d-inline-block p-2" id="close-form" >
                            <ion-icon name="close-outline" class="close-form-btn"></ion-icon>
                            </span>
                            <div class="form-group">
                                <label>Select Role</label>
                                <select class="form-control" name="user_role_id">
                                    <option value="1">HR</option>
                                    <option value="2">Developement</option>
                                    <option value="3">Accounts</option>
                                </select>
                            </div>
                            <div class="form-group">

                                <label for="project_name">Project Name</label>
                                <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter project name">
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-xs">
                                <label for=""> Select Color</label>
                                <div class="col-auto">
                                    <label class="colorinput">
                                    <input name="bg_color" type="radio" value="primary" class="colorinput-input">
                                    <span class="colorinput-color bg-primary"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                    <input name="bg_color" type="radio" value="secondary" class="colorinput-input">
                                    <span class="colorinput-color bg-secondary"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input name="bg_color" type="radio" value="danger" class="colorinput-input">
                                        <span class="colorinput-color bg-danger"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                    <input name="bg_color" type="radio" value="warning" class="colorinput-input">
                                    <span class="colorinput-color bg-warning"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                    <input name="bg_color" type="radio" value="info" class="colorinput-input">
                                    <span class="colorinput-color bg-info"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                    <input name="bg_color" type="radio" value="success" class="colorinput-input">
                                    <span class="colorinput-color bg-success"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="task_limit">Task Limit <small>*(Optional)</small></label>
                                <input type="text" class="form-control" id="task_limit" name="task_limit">
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Add Project</button>
                            </div>
                        </div>
                    </div>
            </form>
              {{-- <p class="section-lead">The wizard is a component to simplify a process with a step-by-step method.</p> --}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="section-title d-inline-block">Projects </h2>
                            <span class="cursor-pointer   rounded  d-inline-block p-2" id="add-project">
                                <ion-icon name="add-circle-outline" class="add-form-btn"  ></ion-icon>
                            </span>
                        </div>
                        <div class="card-body ">
                            <div class="row mt-4">
                                <div class="col-12 d-flex">
                                  @forelse ($show as $item)
                                    <div class="wizard-steps col-4 ">
                                        <div class="wizard-step bg-{{$item->bg_color}}">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-tshirt"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                             <a href="{{url('task/show')}}" class="text-white">
                                                 {{$item->project_name}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <p class="text-grey">No Project Found</p>
                                    @endforelse
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>My Projects</h4>
                        </div>
                        <div class="card-body">
                            @forelse ($show as $item)
                            @if ($item->user_role_id == Auth::user()->role_id)
                            <div class="row mt-4">
                                <div class="col-12 d-flex">
                                    <div class="wizard-steps col-4">
                                        <div class="wizard-step bg-{{$item->bg_color}}">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-tshirt"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                <a href="{{url('task/show')}}">
                                                    {{$item->project_name}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @empty
                            <p class="text-grey">No Project Found</p>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

                @include('home.project')
<!-- Page Specific JS File -->
<script src="{{asset('js/page/forms-advanced-forms.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(() => {
            $('#add-project-form').hide()
            $('#add-project').on('click', () => {
                $('#add-project-form').toggle( { direction: "bottom" }, 1000);
                $('.navbar').addClass('z-index-1')
            })
            $('#close-form').on('click', () => {
                $('#add-project-form').toggle( { direction: "bottom" }, 1000);
                $('.navbar').removeClass('z-index-1')
            })
            // $('body').on('click',()=>{
            //     let formOverlay=$('#add-project-form')
            //     if(formOverlay.is(':visible')){

            //         formOverlay.toggle()
            //     }

            // })
        })
    </script>
@endsection
