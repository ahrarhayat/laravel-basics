
<!--
    Comparing multiple possible conditions
    
    Multiple values that may require same code



-->

{{-- @switch($name)
    @case('Ahrar')
        <h2> Name is Ahrar</h2>
        @break


        @case('Hayat')
        <h2> Name is Hayat</h2>
        @break

    @default
        <h2> Name is not Ahrar or Hayat</h2>
@endswitch --}}




@for($i=0;$i<10;$i++)

<h2> The number is {{ $i }}</h2>
@endfor


@foreach ($names as $name)
    <h2> The name is {{ $name }}</h2>
@endforeach


@forelse ($names as $name)
<h2> The name is {{ $name }}</h2>
@empty
<h2> There are no names</h2>
@endforelse

{{ $i=0 }}
@while ($i<10)
    <h2>The number is {{ $i }} </h2>
    {{ $i++ }}
@endwhile

@if (5 > 10)
    <p> 5 is less than 10</p>

    @elseif (5 == 10)

    <p> 5 is less than 10</p>

    @else

    <h2> All conditions are wrong</h2>
    
@endif




@unless (empty($name))
<h2> Name is not empty</h2>
@endunless

@empty($secondName)
    <h2> Name 2 is empty </h2>
@endempty

@isset($secondName)
<h2> Name 2 is set </h2>
@endisset