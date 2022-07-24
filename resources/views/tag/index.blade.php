@extends('layouts.app')

@section('content')
    <div class="header d-flex align-items-center">
        <h1 class="my-3">Tag List</h1>
        <button type="button" class="btn btn-primary ms-3 mt-3" data-bs-toggle="modal" data-bs-target="#addtag">Add tag</button>    
    </div>
    <div class="table-responsibe">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                 <th scope="col">Name</th>
                 <th scope="col">Posts</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tags as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td> 
                        <td>@foreach ($item->posts as $post)
                            {{ $post->title }},
                        @endforeach</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
  <!-- Modal -->
  <div class="modal fade" id="addtag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tag Create</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('tag.store') }}">
        @csrf
        <div class="modal-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name Here">
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