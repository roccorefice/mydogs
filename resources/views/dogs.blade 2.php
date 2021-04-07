<h1>Breeds list</h1>

<ul>
    @foreach ($breeds as $key => $value )
        <li>
            {{$key}}
        </li>
    @endforeach
</ul>    