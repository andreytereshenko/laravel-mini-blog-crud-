<div class="form-group">
    <input type="text" name="title" class="form-control" required value="{{old('title') ?? $post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea name="descr" class="form-control" rows="7" required>{{old('descr') ?? $post->descr ?? ''}}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>
