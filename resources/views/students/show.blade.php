@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>

    <table class="table">
        <tr>
            <th>Firstname:</th>
            <td>{{ $student->firstname }}</td>
        </tr>
        <tr>
            <th>Lastname:</th>
            <td>{{ $student->lastname }}</td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>{{ $student->gender }}</td>
        </tr>
        <tr>
            <th>Image:</th>
            <td>
                @if ($student->image)
                    <img src="{{ asset('storage/images/' . $student->image) }}" alt="Student Image" style="max-width: 200px;">
                @else
                    No image available.
                @endif
            </td>
        </tr>
    </table>
@endsection
