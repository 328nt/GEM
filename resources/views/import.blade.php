<!DOCTYPE html>
<html>

<head>
    <title>GEM - Import</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Import database
            </div>
            @if(session('msg'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
              </div>
            @endif
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>


                <form action="{{ route('importscores') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                </form>

            </div>
            <div>

                <form action="{{ route('importmember') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import Member Data</button>
                </form>
            </div>
            <hr>
            <div><p>update table member</p></div>
            <div>

                <form action="{{ route('updatemember') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">update Member Data</button>
                    <a class="btn btn-warning" href="{{ route('exportmember') }}">Export User Data</a>
                </form>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>sbd</th>
                        <th>name</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $member)
                    <tr>
                    <th>{{$member->id}}</th>
                    <th>{{$member->sbd}}</th>
                    <th>{{$member->name}}</th>
                    <th>{{$member->email}}</th>
                    <th>{{$member->day}}</th>
                    </tr>
                    @empty
                        <td>no users found.</td>
                    @endforelse
                </tbody>
            </table>
            {{-- <div>

                <form action="{{ route('importprovinces') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import Provinces Data</button>
                </form>
            </div> --}}
        </div>
    </div>

</body>

</html>