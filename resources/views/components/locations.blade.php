<div class="location_wrapper">
    @foreach ($all_location as $key => $value)
    <div class="location">
        <div class="img">
            <img src="{{ asset('img/location/'.$value) }}" alt="{{ $key }}">
        </div>
    </div>
    @endforeach

</div>
