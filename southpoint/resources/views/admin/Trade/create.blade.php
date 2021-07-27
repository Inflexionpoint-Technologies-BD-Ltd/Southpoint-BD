@extends('admin.index')

@section('content')
    <div>
       <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Content</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter content">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
       </form>
    </div>
@endsection
