@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('user.login') }}">
        @csrf 
        <div class="form-group">
            <label for="email">Name</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
    <div class="header d-flex align-items-center">
        <h1 class="my-3">User List</h1>
        {{-- <button type="button" class="btn btn-primary ms-3 mt-3" data-bs-toggle="modal" data-bs-target="#addtag">Add tag</button>     --}}
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
                {{-- @foreach ($tags as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td> 
                        <td>@foreach ($item->posts as $post)
                            {{ $post->title }},
                        @endforeach</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>

@endsection