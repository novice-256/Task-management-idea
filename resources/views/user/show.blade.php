@extends('master')
@section('content')
<div class="main-content" >
    <section class="section">
        <div class="section-header ">
            <h1>Board</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Board</div>
            </div>
        </div>


    <div class="section-body task-main  h-100  ">
        <table class="table table-light col-12 ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>No of Actie Tasks</th>
                    <th>Completed</th>
                    <th>Pending</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($show as $item)


                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name}}</td>
                    <td></td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
