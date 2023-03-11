    <section>
        <div class="page-header section-height-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">{{ __('Welcome') }}</h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="register" action="#" method="POST" role="form text-left">
                                    <div class="mb-3">
                                        <div class="@error('name') border border-danger rounded-3  @enderror">
                                            <input wire:model="name" type="text" class="form-control" placeholder="Name"
                                                aria-label="Name" aria-describedby="email-addon">
                                        </div>
                                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="@error('email') border border-danger rounded-3 @enderror">
                                            <input wire:model="email" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="@error('password') border border-danger rounded-3 @enderror">
                                            <input wire:model="password" type="password" class="form-control"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">{{ __('Already have an account? ') }}<a
                                            href="{{ route('login') }}"
                                            class="text-dark font-weight-bolder">{{ __('Sign in') }}</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
