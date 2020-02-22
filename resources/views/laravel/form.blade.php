<div class="form-group">
    <label for="nameid">First Name</label>
    <input type="text" name="name" class="form-control" id="nameid" placeholder="Enter First Name"
        value="{{old('name') ?? $laravel->name}}" autocomplete="off">
    <div class="text-danger">
        @error('name')
        {{$message}}
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="lastid">Last Name</label>
    <input type="text" name="last" class="form-control" id="lastid" placeholder="Enter Last Name"
        value="{{old('last') ?? $laravel->last}}" autocomplete="off">
    <div class="text-danger">
        @error('last')
        {{$message}}
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="emailid">Email address</label>
    <input type="email" name="email" class="form-control" id="emailid" aria-describedby="emailHelp"
        placeholder="Enter Email Address" value="{{old('email') ?? $laravel->email}}" autocomplete="off">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
        else.</small>
    <div class="text-danger">
        @error('email')
        {{$message}}
        @enderror
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <div class="col text-right">
        <a href="/laravel/users" class="btn btn-danger">Cancel</a>
    </div>
</div>
@csrf