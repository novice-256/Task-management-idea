@extends('master')
@section('content')

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-capitalize">
                @forelse ($show as $item)


                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->role}}</td>
                    <td>{{'0'}}</td>
                    <td>{{'0'}}</td>
                    <td>{{'0'}}</td>

                    <td class="dropdown">



                                <span class="font-14 text-info dropdown-toggle d-inline" data-toggle="dropdown" >
                                    <ion-icon name="create-outline"></ion-icon>
                                </span>
                                <div class=" dropdown-menu edit-user-form " >
                                    <div class="dropdown-item p-0">
                                        {!! Form::open(['url' => 'users/update']) !!}
                                        <div class="card-body">
                                            <div class="form-group">
                                                {!! Form::label('role_id', 'Select Role') !!}
                                                {!! Form::select('role_id', $role,null ,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('name', 'User Name') !!}
                                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter user name']) !!}
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('email', 'Email') !!}
                                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email']) !!}
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}

                                    </div>
                                </div>

                        <a href="{{url("users/delete/$item->id")}}">

                            <span class="font-14 text-danger" >
                                <ion-icon name="trash-outline"></ion-icon>
                            </span>
                        </a>
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>

@endsection
