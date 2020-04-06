@php(@extract($data))
@extends  ('layouts.master',['title'=>'Dashboard'])
@section('content')

    <main class="container my-4 flex-fill">
        <!-- Page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Roles and Permissions
                    </h2>
                </div>
                <!-- Page title actions -->
            </div>
        </div>
        <!-- Page title -->
        <div class="row">
            <div class="col-sm-6">
                <form action="{{route('roles')}}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control" required>
                    <button class="btn btn-primary mt-3" type="submit">Save Role</button>
                </form>
            </div>
            <div class="col-sm-6">
                <form action="{{route('permission')}}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control" required>
                    <button class="btn btn-primary mt-3" type="submit">Save Permission</button>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">

                <h3 class="card-title">Roles</h3>
                @foreach($roles as $role)


                    <div class="card card-stacked">
                        <div class="card-body">
                            <h3 class="card-title text-center">{{ucfirst($role->name)}}</h3>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-sm-6">

                <h3 class="card-title">Permissions</h3>
                <div class="card-body">
                    @foreach($permissions as $permission)
                        <div class="row mb-n3">
                            <div class="col-6 row row-sm mb-3 align-items-center">
                                <div class="col text-truncate">
                                    <a href="#" class="text-body d-block text-truncate">{{ucfirst($permission->name)}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>


    </main>



@endsection
@section('script')

@endsection




