@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="col-9 p-0 d-flex align-items-center" id="homeContent">
        <div class="p-5 col-12">
            <form action="/admin/post-todo-name" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Add to list</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let screenHeight = (+screen.height) / 1.3;
        document.documentElement.style.height = `${screenHeight}px`;
        document.getElementById('homeContent').style.height = `${screenHeight}px`;
    </script>
@endsection
