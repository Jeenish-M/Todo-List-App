@extends('layouts.main')
@push('head')
    <title>Todo List App</title>
@endpush

@section('main-container')
    <a href="create" class="btn newBtn">+ Add new Task</a>
    <table border="1" class="viewTodoTable">
        <tr>
            <td class="titleTxt">Sr. no.</td>
            <td class="titleTxt">Task</td>
            <td class="titleTxt">Description</td>
            <td class="titleTxt">Due Date</td>
            <td class="titleTxt">Time Stamp</td>
            <td class="titleTxt" colspan="2">Action</td>
        </tr>
        @foreach ($todos as $index => $detail)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $detail->name }}</td>
                <td>{{ $detail->desc }}</td>
                <td>{{ $detail->due_date }}</td>
                <td>
                    @if ($detail->created_at == $detail->updated_at)
                        Created at : {{ $detail->created_at }}
                    @else
                        Updated at : {{ $detail->updated_at }}
                    @endif
                </td>
                <td><a class="btn updateBtn" href="{{ route('update', $detail->id) }}">🔄 Update</a></td>
                <td><a class="btn deleteBtn" href="{{ route('delete', $detail->id) }}">🗑️ Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection
