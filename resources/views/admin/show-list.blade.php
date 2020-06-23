@extends('layout.master')

@section('title', 'Show List')

@section('content')
    <div class="col-9 p-0 d-flex align-items-center" id="homeContent">
        <div class="p-5 col-12">
            <div class="list-group">
                @foreach($todo_list as $todo)
                    <div class="list-group-item list-group-item-action list-group-item-info d-flex">
                        <div class="col-9">
                            {{ $todo->list_name }}
                        </div>
                        <div class="col-3 d-flex flex-row-reverse align-items-center">
                            <form action="" method="post" id="form-show">
                                <button type="button" name="remove" class="close" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fas fa-times mx-2" data-value="{{ $todo->list_id }}" id="close{{ $todo->list_id }}"></i>
                                </span>
                                </button>
                                <button type="button" class="close" aria-label="Close" id="edit{{ $todo->list_id }}">
                                <span aria-hidden="true">
                                    <i class="fas fa-edit mx-2" ></i>
                                </span>
                                </button>
                                <input class="mx-2" type="checkbox" id="check{{ $todo->list_id }}">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        let screenHeight = (+screen.height) / 1.3;
        document.documentElement.style.height = `${screenHeight}px`;
        document.getElementById('homeContent').style.height = `${screenHeight}px`;

        let pathToRemoveButtons = 'div div button[name="remove"] span i';
        let removeButtons = document.querySelectorAll(pathToRemoveButtons);
        let index = 0;
        for (let removeButton of removeButtons )
        {
            let list_idInRemoveButton = removeButton.getAttribute('data-value');
            index++;
            console.log(index);
            removeButton.addEventListener('click', function() {
                let list_id = this.getAttribute('data-value');
            })
        }

    </script>
@endsection
