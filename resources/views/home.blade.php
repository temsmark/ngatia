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
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
            </div>
        </div>
        <div class="row row-deck row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Users</div>
                        </div>
                        <div class="h1 mb-3">{{$users->count()}}</div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-blue" style="width: 75%" role="progressbar"
                                 aria-valuenow="{{$users->count()}}" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">{{$users->count()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            </div>
            <div class="col-sm-6 col-lg-3">
            </div>
            <div class="col-sm-6 col-lg-3">

            </div>
        </div>
        <!-- Page title -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('user.create')}}">
                            @csrf
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        {{$error}}
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    </div>
                                @endforeach
                            @endif
                            <div class="mb-2">
                                <label class="form-label">Full Name</label>
                                <input class="form-control" name="name" value="{{old('name')}}"
                                       placeholder="Full Name"/>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Role</label>

                                <select name="role" id="" class="form-control">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"> {{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Give User Permissions</label>
                                @foreach($permissions as $permission)
                                    <label class="form-check form-check-highlight mb-2">
                                        <input class="form-check-input" type="checkbox" name="permission[]"
                                               {{($permission->name=='read')? 'checked':'' }} value="{{$permission->id}}">
                                        <div class="form-check-label">
                                            {{ucfirst($permission->name)}}
                                        </div>
                                        <div class="form-check-description">
                                            {{ucfirst($permission->name)}} &nbsp;content.
                                        </div>
                                    </label>
                                @endforeach
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" value="{{old('email')}}" name="email"
                                       placeholder="user-email@.com"/>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                @if($users->count()>0)
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($users as $key=>$user)
                            <tr>
                                {{--                                    @if($user->roles[0]['name']=='super admin')--}}
                                {{--                                        @else--}}
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ucfirst($user->roles[0]['name'] ?? 'un assigned')}}</td>
                                <td>
                                    @foreach($user->permissions as $perm)
                                        {{$perm->name}}, &nbsp;
                                    @endforeach

                                </td>
                                <td>@if ($user->is_banned==null)
                                        <span class="btn btn-sm btn-primary">Active</span>
                                    @else
                                        <span class="btn btn-sm btn-danger">Banned</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle align-text-top"
                                            data-toggle="dropdown">Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-sm btn-info"
                                           href="{{route('user.edit',['user'=>$user->id])}}">
                                            Edit
                                        </a>
                                        <a class="dropdown-item btn btn-sm btn-info" href="#">
                                        </a>
                                        <a class="dropdown-item btn btn-sm btn-info" href="#">
                                            <form class="mt-3 float-right" method="post"
                                                  action="{{route('user.delete',['user'=>$user->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                            </form>
                                        </a>
                                    </div>
                                </td>

                                {{--                                        @endif--}}

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-warning text-center" role="alert">
                                <strong>No Users available</strong>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>

    </main>



@endsection
@section('script')

@endsection




