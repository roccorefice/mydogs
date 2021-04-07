<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <h1>Breeds list</h1>
        <select v-model="selection">
            @foreach ($breeds as $key => $value )
                <option value="{{ $key }}">
                    {{$key}}
                </option>
            @endforeach
        </select>
        
    </div>
      
        
</body>
</html>




