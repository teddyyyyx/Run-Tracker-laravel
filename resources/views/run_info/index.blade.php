<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <h1>Hello World </h1>

    <nav>

    </nav>

    <main class="main-container">

        <div class="tracker-table">
          <h2>Run Track</h2>

            <table border="1px solid black">
                <tr>
                    <th>Date</th>
                    <th>Distance</th>
                    <th>Time</th>
                    <th>Shoes</th>
                    <th>Delete</th>
                </tr>
                
                @foreach($run_infos as $run_info)
                    <tr>
                        <td>{{$run_info->date}}</td>
                        <td>{{$run_info->distance}}</td>
                        <td>{{$run_info->time}}</td>
                        <td>{{$run_info->shoes}}</td>
                        <td>
                            <a href="{{route('run_info.edit', ['run_info' => $run_info])}}">Edit</a>
                        </td>
                        <td>
                            <form method="post"  action="{{route('run_info.destroy', ['run_info' => $run_info])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"> 
                            </form>
                        </td>
                    </tr>

                @endforeach

            </table>

          
        </div>
        
        <div class="add-run-container">
            <h2>Enter Run Details</h2>
            <div>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <form action="{{route('run_info.store_info')}}" method="post">
                @csrf
                @method('post')
                <div>
                    <input type="date" placeholder="Date" name="date">
                    <label for="date"></label>
                </div>
                <div>
                    <input type="text" placeholder="Distance" name="distance">
                    <label for=""></label>
                </div>
                <div>
                    <input type="text" placeholder="Time" name="time">
                    <label for=""></label>
                </div>
                <div>
                    <input type="text" placeholder="Shoes Worn" name="shoes">
                    <label for=""></label>
                </div>

                <div>
                    <input type="submit" value="Add Run">
                </div>
            </form>

            
        </div>
    </main>

   
</body>
</html>