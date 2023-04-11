<div class="container">
    <h1>Delete Room</h1>

    <p>Are you sure you want to delete this room?</p>
    <p><strong>Room Number:</strong> {{ $room->number }}</p>

    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>