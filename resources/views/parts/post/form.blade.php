<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="title-input">Post Title</label>
        <input name="title" value="{{ $title }}" class="form-control" id="title-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="title-input">Body</label>
        <textarea name="body" class="form-control" id="body-input" rows="5">{{ $body }}</textarea>
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
