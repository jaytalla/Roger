@props(['name', 'lblname', 'type' => 'text', 'required' => true, 'placeholder'])

<div class="flex flex-col w-full text-center gap-y-1 ">
    <label for="{{$name}}">{{$lblname}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}"  {{$required == true? 'required' : ''}} autofocus
        class="px-5 py-2 border-[1px] placeholder:text-center" />
</div>
@error($name)
<p class="text-sm italic text-red-500">{{$message}}</p>
@enderror