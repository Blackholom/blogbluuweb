@extends('template')

@section('section')

    <h1>This my work team</h1>

    @foreach($team as $member)
        <a href="{{ route('aboutus', $member) }}" class="h4 text-danger">{{ $member }}</a><br>
    @endforeach

    @if(!empty($name))
        @switch($name)
            @case($name == 'Kevin')
                <h2 class="mt-5">The name is {{ $name }}:</h2>
                <p>{{ $name }} Dignissim minus irure, dolore, architecto magni laoreet unde, tristique. Explicabo interdum porta, iure dis porro nunc. Erat lectus, posuere incidunt vivamus egestas aspernatur adipisicing beatae assumenda deserunt ut dolor assumenda, malesuada sapiente dicta? Non magni interdum potenti ut magni nostrum commodo maiores iure non eros, necessitatibus vivamus a. Tincidunt accumsan scelerisque, assumenda doloremque, nemo, sapien sapiente ut blanditiis mattis blanditiis. Anim praesent tellus iste fermentum ornare, inceptos voluptas? Molestiae doloribus suspendisse facilis, dolorem wisi, eu ea facere eleifend! Eiusmod laboris molestias hic ea voluptas curae, orci facilisis class integer morbi, dolore, nostra. Aenean mollit nulla nunc? Dolor nostrud, quaerat incididunt.</p>
            @break
            @case($name == 'Wilman')
            <h2 class="mt-5">The name is {{ $name }}:</h2>
            <p>{{ $name }} Dignissim minus irure, dolore, architecto magni laoreet unde, tristique. Explicabo interdum porta, iure dis porro nunc. Erat lectus, posuere incidunt vivamus egestas aspernatur adipisicing beatae assumenda deserunt ut dolor assumenda, malesuada sapiente dicta? Non magni interdum potenti ut magni nostrum commodo maiores iure non eros, necessitatibus vivamus a. Tincidunt accumsan scelerisque, assumenda doloremque, nemo, sapien sapiente ut blanditiis mattis blanditiis. Anim praesent tellus iste fermentum ornare, inceptos voluptas? Molestiae doloribus suspendisse facilis, dolorem wisi, eu ea facere eleifend! Eiusmod laboris molestias hic ea voluptas curae, orci facilisis class integer morbi, dolore, nostra. Aenean mollit nulla nunc? Dolor nostrud, quaerat incididunt.</p>
            @break
            @case($name == 'Mario')
            <h2 class="mt-5">The name is {{ $name }}:</h2>
            <p>{{ $name }} Dignissim minus irure, dolore, architecto magni laoreet unde, tristique. Explicabo interdum porta, iure dis porro nunc. Erat lectus, posuere incidunt vivamus egestas aspernatur adipisicing beatae assumenda deserunt ut dolor assumenda, malesuada sapiente dicta? Non magni interdum potenti ut magni nostrum commodo maiores iure non eros, necessitatibus vivamus a. Tincidunt accumsan scelerisque, assumenda doloremque, nemo, sapien sapiente ut blanditiis mattis blanditiis. Anim praesent tellus iste fermentum ornare, inceptos voluptas? Molestiae doloribus suspendisse facilis, dolorem wisi, eu ea facere eleifend! Eiusmod laboris molestias hic ea voluptas curae, orci facilisis class integer morbi, dolore, nostra. Aenean mollit nulla nunc? Dolor nostrud, quaerat incididunt.</p>
            @break
        @endswitch
    @endif

@endsection
