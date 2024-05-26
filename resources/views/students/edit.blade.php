@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" value="{{ $student->firstname }}" required>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $student->lastname }}" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="current_image">Current Image:</label>
                @if ($student->image)
                    <img src="{{ asset('storage/images/' . $student->image) }}" alt="Student Image" style="max-width: 200px;">
                @else
                    No image available
                @endif
            </div>

            <div class="form-group">
                <label for="new_image">New Image:</label>
                <input type="file" name="new_image" id="new_image" class="form-control-file">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="delete_image" name="delete_image">
                <label class="form-check-label" for="delete_image">Delete Current Image</label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
