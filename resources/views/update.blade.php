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
{{$user->name}}
                    </h2>
                </div>
                <!-- Page title actions -->
            </div>
        </div>
        <!-- Page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('user.update',['user'=>$user->id])}}">
                            @csrf
                            @method('patch')
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
                                <input class="form-control" name="name" value="{{$user->name}}"
                                       placeholder="Full Name"/>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Role</label>

                                <select name="role" id="" class="form-control">
                                    @foreach($roles as $role)
                                        <option  value="{{$role->id}}"
                                                 @if($user->roles[0]['name']??''==$role->name)
                                                 selected
                                            @endif
                                        > {{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Give User Permissions</label>
                                @foreach($permissions->chunk(4) as $row)
                                    <div class="col-md-3">
                                        @foreach($row as $permission)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       id="customCheck{{$permission->id}}"
                                                       name="permissions[]"
                                                       @if(old('permissions'))
                                                       @if(in_array($permission->id,old('permissions')))
                                                       checked
                                                       @endif
                                                       @elseif(in_array($permission->id,$user->permissions->pluck('id')->toArray()))
                                                       checked
                                                       @endif
                                                       value="{{$permission->id}}">
                                                <label class="custom-control-label"
                                                       for="customCheck{{$permission->id}}">
                                                    {{$permission->name}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select name="status" id="" class="form-control">
                                  @if ($user->is_banned==null)
                                        <option class="form-control"  value="0" selected>Active</option>
                                        <option  class="form-control" value="1">Banned</option>

                                    @else
                                        <option class="form-control"  value="1" selected>Banned</option>
                                        <option class="form-control"  value="0">Active</option>

                                    @endif
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" value="{{$user->email}}" name="email"
                                       placeholder="user-email@.com"/>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>

                        <a href="{{url()->previous()}}" class="btn btn-primary btn-info mt-4">< Back</a>
                    </div>
                </div>
            </div>
        </div>

    </main>



@endsection
@section('script')

@endsection




