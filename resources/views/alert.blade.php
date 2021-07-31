@if(session(0) && session(1))
<div class="alert alert-{{session(0)['color']}}" role="alert">
    {{session(1)['message']}}
</div>
@endif