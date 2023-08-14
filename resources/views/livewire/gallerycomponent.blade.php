<div>
    <div class="row">
        <div class="col-md-8 h2 text-center">

        </div>
        <div class="col-md-4">
            <div class="input-group mb-4">
                <input wire:model.live="search" type="search" class="form-control" placeholder="Search">
                <button class="btn btn-success">Search</button>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($gallery as $data)
        <div class="col-md-3 mb-5">

            <div id="gallery" class="gallery border wow fadeInUp" data-wow-delay="0.1s">
                <a target="_blank" href="{{ asset('assets/' . $data->image_path) }}">
                    <img src="{{ asset('assets/' . $data->image_path) }}" class="equal-image" alt="{{$data->title}}">
                </a>
                <div class="p-2 text-center border">{{$data->title}}</div>
            </div>

        </div>
        @endforeach
       
    {{ $gallery->links('pagination::bootstrap-5') }}


    </div>
</div>