
<!--
    Comparing multiple possible conditions
    
    Multiple values

-->


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