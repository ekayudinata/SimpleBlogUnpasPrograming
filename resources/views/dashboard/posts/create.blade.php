@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Create new post</h1>
</div>

<div class="col-lg-8 mb-5">
    <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" name="title" required>
          @error('title')    
                    <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                    @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" disable readonly required>
              @error('slug')    
              <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select @error('category') is-invalid @enderror" name="category_id">
              @foreach ($categories as $item)
                @if (old('category_id') == $item->id)
                <option value='{{ $item->id}}' selected >{{ $item->name }}</option>
                @else
                <option value='{{ $item->id}}' >{{ $item->name }}</option> 
                @endif
          
              @endforeach 
            </select>
            @error('category')    
            <div class="invalid-feedback">
              {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="image" class="form-label">Post image</label>
            <img class="img-preview img-fluid col-lg-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')    
            <div class="invalid-feedback">
              {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Detail</label>
            @error('body')    
            <p class="text-danger">
              {{ $message }}
              </p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body" ></trix-editor>
          </div>
          <button type="submit" class="btn btn-primary">Create new posts</button>
    </form>
    
</div>

<script>
    const title = document.querySelector('#title'); 
    const slug = document.querySelector('#slug'); 

    title.addEventListener('change',function(){
      console.log(fetch('checkSlug?title=' + title.value)); 
        fetch('checkSlug?title=' + title.value)
        .then(response =>response.json())
        .then(data =>slug.value = data.slug); 
    })

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault(); 
    })
    function previewImage(){
      const image = document.querySelector('#image'); 
      const imagePreview = document.querySelector('.img-preview'); 
      imagePreview.style.display = "block";
      imagePreview.classList.add('mb-3');  
      const oFReader = new FileReader(); 
      oFReader.readAsDataURL(image.files[0]); 
      oFReader.onload = function(oFEvent){
        imagePreview.src= oFEvent.target.result; 
      }
    }
     
</script>
@endsection