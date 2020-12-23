<div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $question->title) }}">
    @error('title')
    <div class="invalid-feedback">
        <strong>{{ $errors->first('title') }}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="body">Question Body</label>
    <textarea rows="5" id="body" name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body', $question->body) }}</textarea>
    @error('body')
    <div class="invalid-feedback">
        <strong>{{ $errors->first('body') }}</strong>
    </div>
    @enderror
</div>
<div class="form-group text-right">
    <button class="btn btn-outline-primary btn-lg">{{ !empty($question->id) ? 'Modify Question' : 'Add Question' }}</button>
    <a href="{{ route('questions.index') }}" class="btn btn-outline-danger btn-lg">Back</a>
</div>