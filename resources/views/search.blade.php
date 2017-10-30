@foreach ($tasks as $task)
<!-- TODO : Delete Button -->
<tr>
    <!-- Task Name -->                    
    <td class="table-text">
        <div>{{ $task->id }}</div>
    </td>
    <td class="table-text">
        <div>{{ $task->user_id }}</div>
    </td>
    <td class="table-text">
        <div>{{ $task->name }}</div>
    </td>

    <!-- Delete Button -->
    <td>
        <a href="{{ route('edit', $task->id ) }}"><button type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i>Edit
        </button></a>

    </td>
    <td>
        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                <i class="fa fa-btn fa-trash"></i>Delete
            </button>
        </form>
    </td>

</tr>                              
@endforeach