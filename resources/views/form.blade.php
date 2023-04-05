<!doctype html>
<html lang="en">
<head>
    <title> Coding Allstars Trial Task </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('url.checkUrl') }}" method="POST">
        @csrf
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"> Coding Allstars Trial Task</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label> Your Url </label>
                                <textarea type="text" class="form-control" name="url" placeholder="Enter the Url"></textarea>
                            </div>
                           
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>