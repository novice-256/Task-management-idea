{{-- to use quick drop down --}}
<div class="container bg-primary">
    <li class="dropdown ">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
        <ul class="dropdown-menu" style="display: none;">
        <li class="menu-sub-header">Apps</li>

            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
            
            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
        </ul>
    </li>
</div>


{{-- content boiler plate --}}
@extends('master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Wizard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">prev link</a></div>
                <div class="breadcrumb-item"><a href="#">current link</a></div>
            </div>
        </div>

        <div class="section-body">
        </div>
    </section>
@endsection
{{-- query to fetch user group tasks --}}
use App\Models\Task;

// Assuming $userId contains the ID of the user you want to fetch tasks for
$userTasks = Task::whereHas('users', function ($query) use ($userId) {
    $query->where('user_id', $userId);
})->get();

{{-- form element --}}
<form id="add-project-form" action="{{url('project/store')}}" method="POST">
    @csrf
    <div id="add-project-form">
        <div class="col-12">
            <div class="card ">                            
                <div class="card-body m-0 p-0">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="card col-12">
                                <div class="card-header">
                                    <h4>Input Text</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Default Input Text</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number (US Format)</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control phone-number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- toggle form --}}
$(() => {
    $('#add-project-form').hide()
    $('#add-project').on('click', () => {
        $('#add-project-form').toggle( { direction: "top" }, 1000);
    })
})

{{-- content input --}}
<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
    <div class="col-sm-12 col-md-7">
        <textarea class="summernote-simple" style="display: none;"></textarea><div class="note-editor note-frame card"><div class="note-dropzone">  <div class="note-dropzone-message"></div></div><div class="note-toolbar-wrapper" style="height: 35.3333px;"><div class="note-toolbar card-header" style="position: relative; top: 0px; width: 100%;"><div class="note-btn-group btn-group note-style"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" title="" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-italic" tabindex="-1" title="" data-original-title="Italic (CTRL+I)"><i class="note-icon-italic"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1" title="" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div><div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-strikethrough" tabindex="-1" title="" data-original-title="Strikethrough (CTRL+SHIFT+S)"><i class="note-icon-strikethrough"></i></button></div><div class="note-btn-group btn-group note-para"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Paragraph"><i class="note-icon-align-left"></i></button><div class="dropdown-menu"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div></div></div></div></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable"></textarea><div class="note-editable card-block" contenteditable="true" style="min-height: 150px;"><p><br></p></div></div><div class="note-statusbar">  <div class="note-resizebar">    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>  </div></div></div>
    </div>
</div>

{{-- colors --}}
primary: 
#d40a12
