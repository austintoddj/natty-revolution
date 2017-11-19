<form method="POST" action="{{ url('/') }}" id="contact">
    {{ csrf_field() }}

    <div class="text-ribbon-inputs-split">
        <input id="name" type="text" class="h4 text-ribbon-input text-ribbon-primary{{ $errors->has('name') ? ' is-invalid' : '' }}" @if ($errors->has('name')) placeholder="{{ $errors->first('name') }}" @else placeholder="Name" @endif name="name" value="{{ old('name') }}" required>
        <input id="email" type="email" class="h4 text-ribbon-input text-ribbon-primary{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
    </div>

    <textarea name="message" id="message" class="h4 text-ribbon-input text-ribbon-input-half text-ribbon-primary" cols="30" rows="5" placeholder="Message">{{ old('message') }}</textarea>

    @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
    @endif
    @if ($errors->has('email'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
    @endif
    @if ($errors->has('message'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('message') }}</strong>
        </div>
    @endif

    <button type="submit" class="btn btn-square btn-primary btn-lg btn-block">
        Send Message
    </button>
</form>
