<div>
    <h2>{{ $title }}</h2>
    <h3>{{ $subTitle }}</h3>
    <p>{{ $description }}</p>
</div>
<div>
    {{ $addNumber(10, 20) }}
</div>
{{-- <p {{ $attributes }}> Attributes </p> --}}
<p {{ $attributes->merge(['class' => 'dclass']) }}> Attributes </p>
<hr>
