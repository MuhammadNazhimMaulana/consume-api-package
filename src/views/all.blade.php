<h1>Testing</h1>

<ul>
    @foreach ($data as $item)
        <li>{{ $item['body'] }}</li>
    @endforeach
</ul>