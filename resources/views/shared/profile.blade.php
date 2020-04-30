@extends  ('layouts.master',['title'=>'Profile Page'])
@section('content')

    <main class="container my-4 flex-fill">
        <!-- Page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-auto">
                    <h2 class="page-title">
                        Profile
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <span class="avatar avatar-xl" style="background-image: url({{asset('static/avatars/004f.jpg')}})"></span>
                            <div class="media-body ml-4">
                                <h3> {{ucfirst(Str::words(Auth::User()->name??'',2))}}</h3>
                                <p class="text-muted mb-0">Engineer I</p>
                                <ul class="social-links list-inline mb-0 mt-2">
                                    <li class="list-inline-item">
                                        <a href="#" title="Facebook" data-toggle="tooltip">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" title="Twitter" data-toggle="tooltip">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" title="1234567890" data-toggle="tooltip">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body">
                        <form>


                                    <div class="mb-2">
                                        <label class="form-label">Email-Address</label>
                                        <input class="form-control" placeholder="your-email@domain.com"/>
                                    </div>

                            <div class="mb-2">
                                <label class="form-label">Bio</label>
                                <textarea class="form-control" rows="5">Big belly rude boy, million dollar hustler. Unemployed.</textarea>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" placeholder="your-email@domain.com"/>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" value="password"/>
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit Profile</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-2">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-2">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-2">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-2">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Company" value="Chet">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-2">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-2">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-2">
                                    <label class="form-label">Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-2">
                                    <label class="form-label">Country</label>
                                    <select class="form-select">
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-2 mb-0">
                                    <label class="form-label">About Me</label>
                                    <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
@section('script')

@endsection



