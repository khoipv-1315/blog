 @extends('.app')

 @section('content')

 <!-- Bootstrap Boilerplate... -->

 <div class="panel-body">
    <!-- Display Validation Errors -->
    @include('.errors')

    <!-- New Task Form -->
    {!! Form::open(['method' => 'POST', 'url' => 'task', 'class'=>"form-horizontal"]) !!}
    <div class="form-group">
        {!! Form::label('task-name', 'Task', ['class'=> "col-sm-3 control-label"]) !!}
        <div class="col-sm-9">
            <div class="col-sm-6"> 
                {!! Form::text('name','', ['id'=>"task-name", 'class'=> "form-control"]) !!}
            </div>
            
        </div>
    </div>
    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            {!! Form::button(' <i class="fa fa-btn fa-add"></i>Add',['type'=>'submit','class'=>" btn btn-success "]) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-9 col-sm-4">
            <div class=" col-sm-6">             
            <input type="text"  class="form-group " id="search-input" placeholder="Search..." autocomplete="off" >    
            </div>
        </div>
                
    </div>
    {!! Form::close() !!}


</div>

<!-- TODO : Current Tasks -->
@if (count($tasks) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>

    <div class="panel-body">
      <table class="table table-sm table-inverse">
            <!-- Table Headings -->
            <thead>
                <th>id</th>
                <th>user_id</th>
                <th>name</th>
            </thead>

            <!-- Table Body -->
            <tbody id="danhsach">
                @include('search')
            </tbody>
        </table>
    </div>
   {!! $tasks->render() !!}
          <script src="https://code.jquery.com/jquery.js"></script>
          <script type="text/javascript">
               $(document).on('click','.pagination a', function(e){
                   e.preventDefault();
                   var page = $(this).attr('href').split('page=')[1];
                   getPosts(page);
               });
         
               function getPosts(page)
               {
                   $.ajax({
                       type: "GET",
                       url: '?page='+ page
                   })
                   .done(function(data) {
                       $('body').html(data);
                   });
               }
          </script> 
          <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</div>
@endif
@endsection