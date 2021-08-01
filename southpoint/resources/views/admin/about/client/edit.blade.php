@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('client.update',$client->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Update client list Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title" class="@error('title') is-invalid @enderror" value="{{ $client->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Update client list content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="exampleFormControlTextarea1" rows="11" name="content">{{ $client->content }}</textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </form>
        </form>
    </div>
@endsection
