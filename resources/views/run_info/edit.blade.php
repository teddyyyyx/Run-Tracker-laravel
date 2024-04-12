<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="add-run-container">
                <h2>Edit Run Details</h2>
                <div>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <form method="post" action="{{route('run_info.update', ['run_info' => $run_info])}}" >
                    @csrf
                    @method('put')
                    <div>
                        <input type="date" placeholder="Date" name="date" value="{{$run_info->date}}">
                        <label for="date"></label>
                    </div>
                    <div>
                        <input type="text" placeholder="Distance" name="distance" value="{{$run_info->distance}}">
                        <label for="distance"></label>
                    </div>
                    <div>
                        <input type="text" placeholder="Time" name="time" value="{{$run_info->time}}">
                        <label for="time"></label>
                    </div>
                    <div>
                        <input type="text" placeholder="Shoes Worn" name="shoes" value="{{$run_info->shoes}}">
                        <label for="shoes"></label>
                    </div>

                    <div>
                        <input type="submit" value="Update Run">
                    </div>
                </form>

                
            </div>
    
</body>
</html>