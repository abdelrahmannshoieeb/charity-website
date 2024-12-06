<div>
    <form wire:submit.prevent="login" class="my-4">
        <div class="form-group mb-2">
            <label class="form-label" for="username">Username</label>
            <input type="text" class="form-control" id="username" wire:model="username" placeholder="Enter username">
            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2">
            <label class="form-label" for="password">Password</label>
            <input type="password" class="form-control" id="password" wire:model="password" placeholder="Enter password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group row mt-3">
            <div class="col-sm-6">
                <div class="form-check form-switch form-switch-success">
                    <input type="checkbox" class="form-check-input" id="customSwitchSuccess" wire:model="remember">
                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                </div>
            </div>
        </div>

        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">
                        Log In <i class="fas fa-sign-in-alt ms-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
