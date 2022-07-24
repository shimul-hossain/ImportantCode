@extends('layouts.app')

@section('content')
    <div class="header d-flex align-items-center">
        <h1 class="my-3">Post List</h1>
        <button type="button" class="btn btn-primary ms-3 mt-3" data-bs-toggle="modal" data-bs-target="#addPost">Add Post</button>    
    </div>
    <div class="table-responsibe">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Tages</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->title }}</td>
                        <td>@foreach ($item->tags as $tag)
                                {{ $tag->name }},
                        @endforeach</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
  <!-- Modal -->
  <div class="modal fade" id="addPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Post Create</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <div class="modal-body">
                <div class="form-group mb-3">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title Here">
                </div> 
                <div class="form-group mb-3">
                  <label for="tag">Tags</label>
                  <select name="tag[]" id="tag" class="form-control" multiple>
                    <option value="">Select Tag</option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                  </select> 
                </div> 
                <div class="form-group mb-3">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" placeholder="Enter Post Description Here"></textarea>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection