<div>
    {{$parentTitle}}

    <hr>

    @foreach($myChildren as $key => $child)

        @livewire('child-component',['childName'=>$child], key($child))



        <livewire

    @endforeach


</div>
