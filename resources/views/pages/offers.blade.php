@extends('layouts.app')

@section('content')
<div id="offers-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>
                    Sign Up To Notifications for Deals
                </h1>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                    {{-- Beginning of First Name Section--}}
                            <div class="form-group">
                                <label for="firstnameInput">First Name</label>
                                <input type="text" class="form-control" name="fname" id="firstnameInput" placeholder="Red">
                            </div>
                    {{-- End of First Name Section--}}
                        </div>
                        <div class="col-md-6">
                    {{-- Beginning of Last Name Section--}}
                            <div class="form-group">
                                <label for="lastnameInput">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lastnameInput" placeholder="Rooster">
                            </div>
                    {{-- End of last Name Section--}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                    {{-- Beginning of Email Section --}}
                            <div class="form-group">
                                <label for="emailInput">Email address</label>
                                <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
                            </div>
                    {{-- End of Email Section   --}}
                        </div>
                        <div class="col-md-6">
                    {{-- Beginning of Phone Section --}}
                            <div class="form-group">
                                <label for="phoneInput">Phone Number</label>
                                <input type="email" class="form-control" name="phone" id="phoneInput" placeholder="718-777-9311">
                            </div>
                    {{-- End of Phone Section --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                    {{-- Beginning of Button Section --}}
                            <div class="form-group">
                                <p>
                                    In signing up I acknowledge that I am 18 years of age or older, want to recieve email offers from Rooster's Burgers and, if I select to join Dine Rewards, agree to the terms and conditions of the program.
                                </p>
                            </div>
                    {{-- End of Button Section --}}
                        </div>
                        <div class="col-md-6">
                    {{-- Beginning of Button Section --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                            </div>
                    {{-- End of Button Section --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection