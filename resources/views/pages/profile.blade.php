@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <div class="page-section">
        <div class="row mb-32pt">
            <div class="col-lg-4">
                <div class="flex" style="max-width: 100%">
                    <div class="avatar avatar-xxl">
                            <img src="{{asset('assets/images/people/256/256_rsz_nicolas-horn-689011-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label">Your photo</label>
                        <div class="media align-items-center">
                            <div class="media-body">
                                <div class="input-group">
                                    <input type="file" name="" id="" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="button">
                                            <span class="material-icons">file_upload</span>
                                            Upload
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-32pt">
            <div class="col-lg-4">
                <div class="page-separator">
                    <div class="page-separator__text">Personal Informations</div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="username">User Name</label>
                        <input type="text" class="form-control" placeholder="Enter your username ..." id="username">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="firstname">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter your first name ..." id="firstname">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="lastname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter your last name ..." id="lastname">
                    </div>
                    <div class="form-group">
                        <label class="form-label">About you</label>
                        <textarea rows="3" class="form-control" placeholder="About you ..." style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
        <div class="row mb-32pt">
            <div class="col-lg-4">
                <div class="page-separator">
                    <div class="page-separator__text">Contact Informations</div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" class="form-control" value="alexander.watson@fake-mail.com" placeholder="Your email address ..." id="email" readonly>
                        <small class="form-text text-muted">Note that if you want to change your email, you have to contact to the admin</small>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter your phone number ..." id="phone">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea rows="3" class="form-control" placeholder="Enter your address ..." style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
        <div class="row mb-32pt">
            <div class="col-lg-4">
                <div class="page-separator">
                    <div class="page-separator__text">Change Password</div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="oldpassword">Old Password:</label>
                        <input id="oldpassword" type="password" class="form-control" placeholder="Type your old password ...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">New Password:</label>
                        <input id="password" type="password" class="form-control" placeholder="Type a new password ...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password2">Confirm Password:</label>
                        <input id="password2" type="password" class="form-control" placeholder="Confirm your new password ...">
                    </div>
                    <button type="submit" class="btn btn-primary">Save password</button>
                </div>
            </div>
        </div>
    </div>
@endsection