<div {{ $attributes->merge(['class' => $makeModalClass(), 'id' => $id]) }}
    @isset($staticBackdrop) data-backdrop="static" data-keyboard="false" @endisset tabindex="-1" role="dialog" aria-labelledby="Incident1" aria-hidden="true">
    <div class="{{ $makeModalDialogClass() }}" role="document">
        <div class="modal-content">
            {{--Modal header --}}
            <div class="{{ $makeModalHeaderClass() }}">
                <h4 class="modal-title">
                    @isset($icon)<i class="{{ $icon }} mr-2"></i>@endisset
                    @isset($title){{ $title }}@endisset
                </h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            {{-- Modal body --}}
            @if(! $slot->isEmpty())
                <div class="modal-body">{{ $slot }}</div>
            @endif

            {{-- Modal footer --}}
            <div class="modal-footer">
                @isset($footerSlot)
                    {{ $footerSlot }}
                @else
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="Submit" class="btn bg-gradient-primary">{{ __('Submit') }}</button>
                @endisset
            </div>
        </div>
    </div>
</div>
