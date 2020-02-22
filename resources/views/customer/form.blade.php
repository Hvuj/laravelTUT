<div class="form-group">
    <label for="customerid">Name</label>
    <input type="text" name="name" class="form-control" id="customerid" value="{{old('name') ?? $customer->name}}">
    <div class="text-danger">
        @error('name')
        {{$message}}
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="emailid">Email</label>
    <input type="text" name="email" class="form-control" id="emailid" value="{{old('email') ?? $customer->email}}">
    <div class="text-danger">
        @error('email')
        {{$message}}
        @enderror
    </div>
</div>
@csrf