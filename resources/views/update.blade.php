@extends('layouts.main')
@push('head')
    <title>Update Todo List</title>
@endpush

@section('main-container')
    <form action="{{ route('edit') }}" method="post">
        @csrf
        <table border="1" class="addTodoTable">
            <tr>
                <td>
                    <h2>Task name :</h2>
                </td>
                <td>
                    <input type="text" name="name" class="input name" value="{{ $todo->name }}">
                    <br>
                    <span style="color: red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Description :</h2>
                </td>
                <td>
                    <input type="text" name="desc" class="input desc" value="{{ $todo->desc }}">
                    <br>
                    <span style="color: red">
                        @error('desc')
                            {{ $message }}
                        @enderror
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Due date :</h2>
                </td>
                <td>
                    <input type="date" name="duedate" class="input duedate" value="{{ $todo->due_date }}">
                    <br>
                    <span style="color: red">
                        @error('duedate')
                            {{ $message }}
                        @enderror
                    </span>
                </td>
            </tr>
        </table>
        <div class="actionSection">
            <input type="number" name="hidden" value="{{ $todo->id }}" hidden>
            <a href="/" class="btn actionBtn">✘ Cancel</a>
            <button type="submit" class="btn actionBtn">🔄 Update</button>
        </div>
    </form>
@endsection
