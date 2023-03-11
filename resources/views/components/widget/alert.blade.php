<div {{ $attributes->merge(['class' => $makeAlertClass()]) }}>

    
        {{-- Alert header --}}
        @if(! empty($title) || ! empty($icon))
                @if(! empty($icon))
                <span class="alert-icon"><i class="icon {{ $icon }}"></i></span>
                @endif

                @if(! empty($title))
                <strong>{{ $title }}</strong>
                @endif
        @endif

    <span class="alert-text">
        {{-- Alert content --}}
        {{ $slot }}
    </span>

    {{-- Dismiss button --}}
    @isset($dismissable)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endisset
</div>