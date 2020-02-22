<div class="form-group">
    <label for="customerid">Name</label>
    <input type="text" name="name" class="form-control" id="customerid" value="{{old('name') ?? $game->name}}">
    <div class="text-danger">
        @error('name')
        {{$message}}
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="typeid">Type</label>
    <input type="text" name="type" class="form-control" id="typeid" value="{{old('type') ?? $game->type}}">
    <div class="text-danger">
        @error('type')
        {{$message}}
        @enderror
    </div>
</div>
@csrf