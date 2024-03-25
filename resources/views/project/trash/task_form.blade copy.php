<form id="add-task-form" action="{{url('task/store')}}" class="border border-rounded p-3" method="POST" style="">
    @csrf
    <div class="col-12 position-relative">
            <span class="float-right cursor-pointer positon-sticky sticky-top  shadow-sm icon-hover  rounded  d-inline-block p-2" id="close-task-form">
                <ion-icon name="close-outline" class="close-form-btn md hydrated" role="img"></ion-icon>
                </span>
            <div class="card-body">

                <div class="form-group">

                    <label for="project_name">Task Name</label>
                    <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter project name">
                </div>

           <div class="form-group">
                    <label for="project_id" class="text-capitalize">project id<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="project_id" value="1" disabled name="project_id">

                </div>
           <div class="form-group">
                    <label for="task_name" class="text-capitalize">task name<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="task_name" name="task_name">
                </div>
           <div class="form-group">
                    <label for="description" class="text-capitalize">description<small class="text-danger">*</small></label>
                    <textarea type="text" class="form-control" id="description" name="description">
                    </textarea>
                </div>
           <div class="form-group">
                    <label for="other_info" class="text-capitalize">other info<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="other_info" name="other_info">
                </div>
           <div class="form-group">
                    <label for="task_limit" class="text-capitalize">sub task limit<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="task_limit" name="task_limit">
                </div>
           <div class="form-group">
                    <label for="assigned_by" class="text-capitalize">assigned by<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="assigned_by" value="{{Auth::user()->id}}" name="assigned_by">
                </div>
           <div class="form-group">
                    <label for="task_color" class="text-capitalize">task color<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="task_color" name="task_color">
                </div>
                <div class="form-group">
                    <div id="label-data">
                        <input type="text" class="form-control" name="label" id="label-data-input" placeholder="label data here" >
                    </div>
                </div>
           <div class="form-group">
                <div id="labels-form">
                    <label for="label_name">Label Name</label>
                    <input type="text" class="form-control" id="label_name"   multiple>
                    <div class="row gutters-xs mt-2">
                        <label for=""> Select Color</label>
                        <div class="col-auto">
                            <label class="colorinput">
                            <input   type="radio" value="primary" class="colorinput-input label_color">
                            <span class="colorinput-color bg-primary"></span>
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="colorinput">
                            <input   type="radio" value="secondary" class="colorinput-input label_color">
                            <span class="colorinput-color bg-secondary"></span>
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="colorinput">
                                <input   type="radio" value="danger" class="colorinput-input label_color">
                                <span class="colorinput-color bg-danger"></span>
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="colorinput">
                            <input   type="radio" value="warning" class="colorinput-input label_color">
                            <span class="colorinput-color bg-warning"></span>
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="colorinput">
                            <input   type="radio" value="info" class="colorinput-input label_color">
                            <span class="colorinput-color bg-info"></span>
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="colorinput">
                            <input   type="radio" value="success" class="colorinput-input label_color">
                            <span class="colorinput-color bg-success"></span>
                            </label>
                        </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" id='add-label' type="button">Add Label</button>
                        </div>

              </div>

            </div>
           <div class="form-group">
                    <label for="stage" class="text-capitalize">stage<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="stage" value="initial" name="stage">
                </div>



                <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Creat Task</button>
                </div>

            </div>
        </div>
</form>
<script>

</script>
