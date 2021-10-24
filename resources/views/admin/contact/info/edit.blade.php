@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('contact.update',$contact->id) }}" method="post"
              enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter place title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title" class="@error('title') is-invalid @enderror" value="{{ $contact->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter map link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="map" class="@error('map') is-invalid @enderror" value="{{ $contact->map }}">

                </div>

                @error('map')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter place information</label>

                    <textarea class="form-control @error('place') is-invalid @enderror" id="exampleFormControlTextarea1"
                              rows="4" name="place">{{ $contact->place }}</textarea>
                </div>

                @error('place')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="address" class="@error('address') is-invalid @enderror" value="{{ $contact->address }}">

                </div>

                @error('address')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter phone no</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="tel" class="@error('tel') is-invalid @enderror" value="{{ $contact->tel }}">

                </div>

                @error('tel')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="email" class="@error('email') is-invalid @enderror" value="{{ $contact->email }}">

                </div>

                @error('email')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
