<div class="tp-col">
    @foreach($timePoints as $point)
        <div class="tp-block @if($loop->first)first @elseif($loop->last)last @endif">
            <div class="tp-date">
                {{-- {{ $point->date }} --}}
                27.06.20
            </div>
            <div class="tp-pic">
                <svg class="tp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 134">
                    <linearGradient id="line-gradient" x1="16.5" y1="134" x2="16.5" y2="31" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#fff" stop-opacity="0"/>
                        <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    <title>Time point</title>
                    <g id="Layer_1-2" data-name="Layer 1">
                        <path d="M16.5,3A13.5,13.5,0,1,1,3,16.5,13.52,13.52,0,0,1,16.5,3m0-3A16.5,16.5,0,1,0,33,16.5,16.5,16.5,0,0,0,16.5,0Z"/>
                        <line x1="16.5" y1="31" x2="16.5" y2="134"/>
                        <circle cx="16.5" cy="16.5" r="6.5"/>
                    </g>
                </svg>
            </div>
            <div class="tp-title">
                <a href="#">
                        {{-- {{ $point->title }} --}}
                        Григорович рассказал о деталях разработки: о артефактах и НПС
                </a>

            </div>
        </div>
    @endforeach
</div>
