<div class="block block-transparent block-fill-height block-angle block-app-mosdef" id="contact">
    <div class="block-bg-clip">
        <div class="block-bg">
            <div class="block-bg-img block-bg-img-top" style="background-image: url({{ asset('img/contact.jpg') }})">
            </div>
        </div>
    </div>

    <div class="block-xs-middle">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7 col-lg-6">
                    <h1 class="block-title mb-4">
                                <span class="text-ribbon text-ribbon-primary">
                                    <span>Contact Us.</span>
                                </span>
                    </h1>
                    @include('public.forms.contact')
                </div>
            </div>
        </div>
    </div>
</div>