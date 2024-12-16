@extends('layouts.main')
@push('head')
    <title>Add Task to Todo List</title>
@endpush

@section('main-container')
    <form action="{{ route('add') }}" method="post">
        @csrf
        <table border="1" class="addTodoTable">
            <tr>
                <td>
                    <h2>Task name :</h2>
                </td>
                <td>
                    <input type="text" name="name" class="input name" placeholder="Type task name...">
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
                    <input type="text" name="desc" class="input desc" placeholder="Description about task...">
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
                    <input type="date" name="duedate" class="input duedate">
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
            <a href="/" class="btn actionBtn">✘ Cancel</a>
            <button type="submit" class="btn actionBtn">✔ Submit</button>
        </div>
    </form>
@endsection
