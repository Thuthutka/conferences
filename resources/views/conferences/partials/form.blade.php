<div>
    <label for="title-input">Title:</label>
    <input type="text" id="title-input" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="content-input">Content:</label>
    <input type="text" id="content-input" name="content" value="{{old('content', optional($conference ?? null)->content)}}">
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="date-input">Date:</label>
    <input id="date-input" type="date" name="date" value="{{old('date', optional($conference ?? null)->date)}}" required>
    @error('date')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">Address:</label>
    <input type="text" id="address-input" name="address"value="{{old('address', optional($conference ?? null)->address)}}">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
