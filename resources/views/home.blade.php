
<h1>
    Bem vinde
</h1>

<p>
    Olá, meu nome é {{$name}}
</p>   
<p>
    meus hábitos são:
</p>
<ul>
    @foreach ($habits as $item)
    <li>
        {{ $item }}
    </li>
    @endforeach
</ul>

