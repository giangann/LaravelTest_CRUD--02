<form action="/login" method="post">
    @csrf

    <div class="form-group">
        <label class="label">Email</label>
        <div class="control">
            <input class="input" type="email" placeholder="e.g. barryallen@example.com" name="email">
        </div>
        <p class="help is-danger">{{ $errors->first('email') }}</p>
    </div>

    <div class="form-group">
        <label class="label">Password</label>
        <div class="control">
            <input class="input" type="password" placeholder="Your password" name="email">
        </div>
        <p class="help is-danger">{{ $errors->first('password') }}</p>
    </div>

    <button type="submit"> Login </button>
</form>