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
        <div class="dropdown">
            <button class="btn dropdown-toggle d-flex align-items-center bg-secondary-subtle border shadow add-role-btn float-right my-2"  data-toggle="dropdown"><span class="font-14 d-flex mr-1"><ion-icon name="add-outline"></ion-icon></span>Add New Role</button>
            <div class=" dropdown-menu add-user-form w-50" >
                <div class="dropdown-item p-0 ">
                    {!! Form::open(['url' => 'role/store']) !!}
                    <div class="card-body">
                        {!! Form::label('name', 'Role Name') !!}
                        <div class="form-group d-flex">
                            {!! Form::text('name', null, ['class' => 'form-control col-10 mr-1', 'placeholder' => 'Enter role name']) !!}
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            {!! Form::submit('Add Role', ['class' => 'btn btn-primary py-2 ']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}

                </div>
            </div>
        </div>
        <table class="table table-light col-12">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class=" text-capitalize">
                @forelse ($show as $item)
                <tr>
                    <td contenteditable="">{{$item->name}}</td>
                    <td >
                        <a href="{{url("role/delete/$item->id")}}">
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
