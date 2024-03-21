<div class="wrapper row container">
    <div class="header row col-12">
        <div class="col-12 d-flex">
            <span><ion-icon name="card-outline"></ion-icon> </span>
            <h6>Project planning</h6>
        </div>
        <div class="col-12">
            <small>in list <span class="fw-bold">Doing</span></small>

        </div>


        {{-- <h5 class="h5 "><ion-icon name="card-outline"></ion-icon> Project planning</h5>
        <small>in list <span class="fw-bold">Doing</span></small> --}}
    </div>
    <div class="col-9">
        <div class="card-details col-12">
            <div class="members-in-task d-inline-block   mr-3">
                <p class="py-0 my-1">Members</p>
                <div class="d-flex align-items-center">
                    <span class="avatar mr-2">
                       <strong class="align-middle" style="vertical-align: middle"> AD </strong>
                    </span>
                    <span class="font-16 d-inline-block  bg-secondary-subtle ">
                        <ion-icon name="add-outline"></ion-icon>
                    </span>
                </div>
            </div>
            <div class="card-labels  d-inline-block   mr-3">

                <p class="py-0 my-1 ">Labels</p>
                <div class=" d-flex my-auto">
                    <li class="list-unstyled bg-success  rounded rounded-2 py-1 px-3 mr-2">Label</li>
                    <span class="font-16 d-inline-block  bg-secondary-subtle">
                        <ion-icon name="add-outline"></ion-icon>
                    </span>
                </div>


            </div>
            <div class="notify  d-inline-block  mr-3">
                <p class="py-0 my-1">Notifications</p>
                <div class="">
                    <span class="notify-btn btn btn-secondary p-1">
                        <ion-icon name="eye-outline"></ion-icon>  Watch
                    </span>
                </div>
            </div>
        </div>
        <div class="card-desc">
            <div class="desc-top d-flex">
                <span><ion-icon name="menu-outline"></ion-icon></span>
                <h6>Description</h6>
                <button class="btn"> Edit</button>
            </div>
            <div class="desc-text">
                <p class="text-secondary-subtle">
                    here we do all the planning related to making clone of Trello because we don’t want to pay to Trello.
                </p>
            </div>
        </div>
        <div class="checklist-wrapper">
            <div class="checklist-header ">
                <span><ion-icon name="checkbox-outline"></ion-icon></span>
                <h6>Checklist Name</h6>
                <button class="btn mr-2">Hide Checklist Item</button>
                <button class="btn ">Delete</button>
            </div>
            <div class="progress-wrapper ">
                <span class="progress-percent mr-2">{{'0%'}}</span>
                <div class="d-inline-block  col-11  rounded rounded-4 border p-0">
                    <span class="progress-fill w-50 py-1 bg-danger d-block rounded rounded-4"></span>
                </div>
            </div>
            <ul class="check-list list-unstyled">
                <li><input type="checkbox" name="" id="for-list-1">
                     <label class="d-inline-block col-10" for="for-list-1">Multiple Members Assign</label>
                    <span class="border rounded-circle d-inline-block p-1 px-2">
                        <ion-icon name="ellipsis-horizontal-outline"></ion-icon>

                    </span>
                </li>
                <li>
                    <button class="btn">Add Item</button>
                </li>

            </ul>
            <div class="activity">
                <div class="activity-top ">
                    <span><ion-icon name="menu-outline"></ion-icon></span>
                    <h6>Activity</h6>
                    <button class="btn"> Show Details</button>
                </div>
                <ul class="activity-stream p-0 m-0 ">
                    <li >
                        <span class=" avatar bg-secondary text-center">AD</span>

                            <input class="form-control mx-2" placeholder="Write Comment... "></p>
                    </li>
                    <li>
                            <span class=" avatar bg-secondary text-centermx-2">AD</span>
                            <div class="mx-2 col">
                                <h6>Muhammad Saeed <small>{{'Mar 15'}} at {{'10:15 AM'}} </small></h6>
                                <p class="d-inline-block p-2 border rounded-4 col">date range picker added in the sidebar.</p>
                            </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="sidebar col-3 ">
        <ul class="sidebar-list m-0 p-0">
            <li class="sidebar-items mb-4">
                <p class="small p-0 m-0">Suggested</p>
                <p class="bg-secondary-subtle border rounded rounded-4 m-0 py-2">
                    <span class="mx-2 "><ion-icon name="person-outline"></ion-icon> </span>
                    <span class=""> Join</span>
                </p>
            </li>
            <li class="sidebar-items">
                <p class="small p-0 m-0">Add to Card</p>
                <div class="bg-secondary-subtle border rounded rounded-4 m-0 py-2 my-1 dropdown">
                    <span class="mx-2 "><ion-icon name="person-outline"></ion-icon> </span>
                    <span class="dropdown-toggle"   id='membersToggle' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Members</span>
                    <div class="dropdown-menu  fit-content-w members-list" aria-labelledby="membersToggle">
                        <div class="dropdown-title text-center ">Members</div>
                        <input type="text" name="" class="col" id="">
                        <p class="dropdown-title  text-left p-0 m-0 fw-bold">Card Members</p>
                        <a class="dropdown-item p-0 m-0 py-1 d-flex align-items-center" href="#"><span class="mx-2 avatar">JA</span>Jahangir Shah</a>
                        <p class="dropdown-title text-left p-0  m-0 fw-bold">Board Members</p>

                        <a class="dropdown-item p-0 m-0 py-1 d-flex align-items-center" href="#"><span class="mx-2 avatar">JA</span>Ala Shah</a>

                        <a class="dropdown-item p-0 m-0 py-1 d-flex align-items-center" href="#"><span class="mx-2 avatar">JA</span>Asif shahid</a>

                    </div>
                </div>
            </li>
            <li class="sidebar-items">

                <div class="bg-secondary-subtle border rounded rounded-4 m-0 py-2 my-1 dropdown">
                    <span class="mx-2 "><ion-icon name="checkbox-outline"></ion-icon> </span>
                    <span class="dropdown-toggle"   id='labelsToggle' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Labels</span>
                    <div class="dropdown-menu  fit-content-w members-list" aria-labelledby="labelsToggle">
                        <div class="dropdown-title text-center ">Labels</div>
                        <input type="text" name="" class="col" id="">
                        <p class="dropdown-title  text-left p-0 m-0 fw-bold">Card Members</p>
                        <a class="dropdown-item p-0 m-0 py-1 d-flex align-items-center">
                            <div class="d-flex w-100">
                                <span> <input type="checkbox" name="" id="label-item"></span>
                                <label for="label-item" class="col">Important</label>
                                <span class="float-right font-12"><ion-icon name="eyedrop-outline"></ion-icon></span>
                            </div>
                        </a>
                       <button class="btn mx-auto">
                        Create new label
                       </button>

                    </div>
                </div>
            </li>
            <li class="sidebar-items">

                <p class="bg-secondary-subtle border rounded rounded-4 m-0 py-2 my-1">
                    <span class="mx-2 "><ion-icon name="calendar-outline"></ion-icon> </span>
                    <span class=""> Dates</span>
                    {{-- <div class="form-group">
                        <label>Date Range Picker</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-calendar"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control daterange-cus">
                        </div>
                    </div> --}}
                </p>
            </li>
            <li class="sidebar-items">
                    <div class="bg-secondary-subtle border rounded rounded-4 m-0 py-2 my-1 dropdown">
                        <span class="mx-2 "><ion-icon name="document-attach-outline"></ion-icon></span>
                        <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Attachment</span>
                        <div class="dropdown-menu  fit-content-w members-list" aria-labelledby="membersToggle">
                            <p class="dropdown-title  text-left p-0 m-0 fw-bold">Attachments </p>
                            <a class="dropdown-item w-auto " href="#">
                                <div class="form-group">
                                <label for="thumbnail"></label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload">
                                    </div>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
            </li>
        </ul>
    </div>
</div>
