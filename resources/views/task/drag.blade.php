@extends('master')
@section('content')
    <style>
        .droppable {
            min-height: 5px;
            border-radius: .5rem !important;

        }

        .is-dragging {
            background-color: gray;
            opacity: .8;

        }
        .draggable {
            padding: .5rem;
            border-radius: .5rem !important;
            /* border: 2px solid var(--theme-primary); */
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            margin: .3rem auto;
            width: 100%

        }
        .task-main{
            min-height: 100vh ;
            padding: 10px
        }
        .task-main .card{
            border-radius: 1rem !important;
            box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);

        }
    </style>
    <div class="section-body task-main bg-info h-100">
        <div class="card-group">
            <div class="card col-3 h-50 m-3">
                <div class="card-header">
                    <h6>header</h6>
                </div>
                <div class="card-body task-parent p-3">
                    <ul class="droppable  list-group col-12">
                        <li class="draggable list-item " draggable="true">Drag Me!</li>
                        <li class="draggable list-item " draggable="true">Drag Me!</li>
                    </ul>

                </div>
            </div>
            <div class="card col-3 h-50 m-3">
                <div class="card-header">
                    <h6>header</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="droppable  list-group col-12">
                        <li class="draggable list-item" draggable="true">Drag Me!</li>
                        <li class="draggable list-item" draggable="true">Drag Me!</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            const draggable = document.querySelectorAll('.draggable');
            const droppable = document.querySelectorAll('.droppable');

            draggable.forEach(element => {
                element.addEventListener('dragstart', (event) => {
                    event.target.classList.add('is-dragging');
                });

                element.addEventListener('dragend', () => {
                    draggable.forEach(elem => elem.classList.remove('is-dragging'));
                });
            });

            droppable.forEach(element => {
                element.addEventListener('dragover', (event) => {
                    event.preventDefault();
                    const dragElement = document.querySelector('.is-dragging');
                    if (dragElement && dragElement.parentElement !== event.currentTarget) {
                        event.currentTarget.appendChild(dragElement);
                    }
                });
            });
        </script>
    @endsection
