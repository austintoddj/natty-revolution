<form class="form-horizontal" method="POST" action="{{ url('/') }}">
    {{ csrf_field() }}

    <div class="form-group row">
        <label for="name" class="col-lg-4 col-form-label text-lg-right">Name</label>

        <div class="col-lg-6">
            <input
                    id="name"
                    type="text"
                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                    name="name"
                    value="{{ old('name') }}"
                    required
            >

            @if ($errors->has('name'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

        <div class="col-lg-6">
            <input
                    id="email"
                    type="email"
                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email"
                    value="{{ old('email') }}"
                    required
            >

            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="message" class="col-lg-4 col-form-label text-lg-right">Message</label>

        <div class="col-lg-6">
            <textarea id="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" required>
                {{ old('message') }}
            </textarea>

            @if ($errors->has('message'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('message') }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-8 offset-lg-4">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
</form>
