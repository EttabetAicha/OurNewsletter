@extends('layout')

@section('content')
    
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Newsletters</div>

                    <div class="card-body">
                        <!-- Button to trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewsletterModal">
                            Add Newsletter
                        </button>
                    </div>
                    <form class="form-inline my-2 my-lg-0" method="get" action="{{ url('/search') }}">
                        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                @foreach ($newsletters as $newsletter)
                    <div class="card mb-3">
                        <img src="{{ asset('assets/images/' . $newsletter->images) }}" class="card-img-top w-25"
                            alt="Newsletter Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $newsletter->title }}</h5>
                            <p class="card-text">{!! $newsletter->content !!}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editNewsletterModal{{ $newsletter->id }}">Edit</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#confirmDeleteModal{{ $newsletter->id }}">Delete</button>
                            <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="confirmDeleteModal{{ $newsletter->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="confirmDeleteModalLabel{{ $newsletter->id }}"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteModalLabel{{ $newsletter->id }}">
                                                Confirm Delete</h5>

                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this newsletter?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <!-- Form to submit delete request -->
                                            <form action="{{ route('newsletter.destroy', $newsletter->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Newsletter Modal -->
                        <div class="modal fade" id="editNewsletterModal{{ $newsletter->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="editNewsletterModalLabel{{ $newsletter->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editNewsletterModalLabel{{ $newsletter->id }}">Edit
                                            Newsletter</h5>

                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('newsletter.update', $newsletter->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <!-- Your form fields go here -->
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control-file" id="images"
                                                    name="images">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="{{ $newsletter->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea class="form-control" id="editor" name="content" rows="6">{{ $newsletter->content }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="user_id">User</label>
                                                <select class="form-control" id="user_id" name="user_id">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}"
                                                            {{ $newsletter->user_id == $user->id ? 'selected' : '' }}>
                                                            {{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection