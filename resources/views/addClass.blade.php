<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="contaier-fluid">
        <div>
            <h3 style="text-align: center">Add Class</h3>
        </div>
        <div>
                <div class="container">
                    <form action="class" method="POST">
                        @csrf
                        <div>
                            <label>Class Name</label><br>
                            <input type="text" name="class_name" placeholder="Enter class name here"><br>
                            @error('class_name')
                            <span style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                           </div>
                       <div>
                        <label>Building Name</label><br>
                        <input type="text" name="building" placeholder="Enter building name here"><br>
                        @error('building')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mt-3">
                        <button type="submit" class="btn btn-success">Save Class</button>
                        <a href="/class" class="btn btn-outline-danger">Cancel</a>
                       </div>
            </form>
        </div>
    </div>
    
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>