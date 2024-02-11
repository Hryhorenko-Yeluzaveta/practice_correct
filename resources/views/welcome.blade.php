<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        margin-left: 2%;
    }
    h4 {
        margin-top: 2%;
    }
</style>
<body>
<h1>User Page</h1>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@foreach($users as $user)
    <form action="{{ route('update', ['id' => $user->id]) }}" method="post">
        @csrf
        <div class="row"><h4>Full Name</h4>
            <div class="col-3">
                <input required type="text" value="{{$user->firstname}}" class="form-control"  id="firstname" name="firstname">
                <label for="firstname" class="form-label">First Name</label>
            </div>
            <div class="col-3">
                <input required type="text" class="form-control" value="{{$user->lastname}}" id="lastname" name="lastname">
                <label for="lastname" class="form-label">Last Name</label>
            </div>git init
            @foreach($user->address as $address)
                @if(is_object($address))
                    <div class="cols-row"><h4>Address</h4>
                        <div class="col-6">
                            <input required type="text" class="form-control" value="{{$address->address1}}" id="address1" name="address1">
                            <label for="address1" class="form-label">Street Address</label>
                        </div>
                        <div class="col-6">
                            <input required type="text" class="form-control" id="address2" value="{{$address->address2}}" name="address2">
                            <label for="address2" class="form-label">Street Address Line 2</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <input required type="text" class="form-control" id="city" value="{{$address->city}}" name="city">
                        <label for="city" class="form-label">City</label>
                    </div>

                    <div class="col-3">
                        <input required type="text" id="state" name="state" value="{{$address->state}}" class="form-control" >
                        <label for="state" class="form-label">State/Province</label>
                    </div>

                    <div class="row-cols">
                        <div class="col-6">
                            <input required type="text" class="form-control"name="zip" value="{{$address->zip}}" id="zip">
                            <label for="zip" class="form-label">Postal / Zip Code</label>
                        </div>
                        @endif
                        @endforeach
                        <h4>Phone Number</h4>
                        <div class="col-3">
                            <input required type="text" class="form-control"  value="{{$user->phone}}" placeholder="(000) 000-0000" id="phone" name="phone">
                        </div>
                        <h4>E-mail</h4>
                        <div class="col-3">
                            <input required type="text" class="form-control"value="{{$user->email}}"  placeholder="ex: email@yahoo.com" id="email" name="email">
                            <label for="email" class="form-label">example@example.com</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    @endforeach
        </div>
    </form>
</body>
</html>
