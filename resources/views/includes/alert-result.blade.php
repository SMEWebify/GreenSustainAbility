        @if(session('success'))
        <x-widget.alert  theme="success" title="Done" dismissable>
            {{ session('success')}}
        </x-widget.alert>
        @endif
        @if($errors->count())
            <x-widget.alert  theme="info" title="Warning" dismissable>
                <ul>
                    @foreach ( $errors->all() as $message)
                    <li> {{ $message }}</li>
                    @endforeach
                </ul>
            </x-widget.alert>
        @endif

        @if (session()->has('error'))
            <x-widget.alert  theme="warning" title="Warning" dismissable>
                {{ session('error')}}
            </x-widget.alert>
        @endif