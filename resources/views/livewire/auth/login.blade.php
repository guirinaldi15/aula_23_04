<div>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent='login'>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control"
            wire:model='email' id="Email" aria-describedby="emailHelp">
        </div>
            @error('email')<span class="text-danger small">{{$message}}
            </span>@enderror

        <div class="mb-3">
            <label for="Password" class="form-label">Senha</label>
            <input type="password" class="form-control"
            wire:model='password' id="Password">
        </div>
            @error('password')<span class="text-danger small">{{$message}}
            </span>@enderror
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
