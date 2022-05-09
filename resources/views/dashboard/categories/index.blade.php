@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Post Categories</h1>
    
</div>  
<div class="table-responsive">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalCategories">
     Create New Categories
    </button>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    
    
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($categories as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>
              <a href="/dashboard/categories/{{ $item->slug }}" class="badge bg-info text-decoration-none"><span data-feather="eye"></span></a>
              <a href="/dashboard/categories/{{ $item->slug }}/edit" class=""><span data-feather="edit"></span></a>
              <form action="/dashboard/categories/{{ $item->id  }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')" > <span data-feather="x-circle"></span> </button>
              </form>
            </td>
          </tr>
          @endforeach    
      </tbody>
    </table>
  </div>




<!-- Modal -->
<div class="modal fade " id="modalCategories" tabindex="-1" aria-labelledby="modalCategoriesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoriesLabel">Add New Categories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dashboard/categories" method="post">
        @csrf
        <div class="modal-body">
          <label for="name" class="form-label">Category</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" name="name" required placeholder="new categories">
            @error('name')    
              <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror

          <label for="slug" class="form-label mt-3">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" name="slug" disable readonly required placeholder="">
              @error('slug')    
              <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    
    </form>
    
  </div>
  </div>
</div>

<script>
  const title = document.querySelector('#name'); 
  const slug = document.querySelector('#slug'); 
  title.addEventListener('change',function(){
        fetch('categories/checkSlug?title=' + title.value)
        .then(response =>response.json())
        .then(data =>slug.value = data.slug); 
    })

</script>
@endsection