 @extends('.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('.errors')

        <!-- New Task Form -->
        <form action="{{ route('update', $task->id) }}" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">id</label>

                <div class="col-sm-6">
                    <input type="text" name="id" class="form-control" value="{{ $task->id }}" disabled="">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">user_id</label>

                <div class="col-sm-6">
                    <input type="text" name="user_id" class="form-control" value="{{ $task->user_id }}">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name }}">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i> Update
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection