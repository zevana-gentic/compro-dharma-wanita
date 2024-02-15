<div class="card my-3">
    <img src="{{ asset('uploads/' . @$item->image_thumbnail) }}" class="img-berita" alt="" />
    <div class="card-body">
        <div class="title">{{ $item->title }}</div>
        <div class="card-text my-2">
            <p>
                {!! @$item->content !!}
            </p>
        </div>
        <div class="d-flex mt-3 mb-2">
            <div class="date w-50 h-25 d-flex align-items-center">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="ms-1">{{ @$item->created_at->format("j M Y") }}</div>
            </div>
            <a href="#" class="selengkapnya w-50 text-end">Selengkapnya<i
                    class="fa-solid fa-angle-right ms-1"></i></a>
        </div>
    </div>
</div>
