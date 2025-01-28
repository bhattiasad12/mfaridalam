@extends('layouts.admin.main')

@section('content')
    <div class="container">
        <h1>{{ $pageName }}</h1>
        <h3>Event: {{ $event->name }}</h3>
        <div class="mb-3">
            <button onclick="create('images/create', 'Add Images')"
                class="btn btn-sm btn-light-primary" data-kt-drawer-show="true"
                data-kt-drawer-target="#kt_drawer_example_permanent"><i class="ki-duotone ki-plus fs-2"></i>New Event</button>
        </div>

        <div class="row">
            @forelse($images as $image)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset($image->image_path) }}" class="card-img-top" alt="{{ $image->image_name }}">
                        <div class="card-body text-center">
                            <form action="{{ route('events.images.destroy', [$event, $image]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>No images uploaded for this event.</p>
            @endforelse
        </div>
    </div>
@endsection
