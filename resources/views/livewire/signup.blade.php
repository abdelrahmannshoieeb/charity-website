<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="my-4 row g-3">
        <div class="form-group mb-2 col-md-6">
            <label class="form-label" for="name">Name</label>
            <input type="text" id="name" class="form-control" wire:model="name" placeholder="Enter name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2 col-md-6">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" class="form-control" wire:model="email" placeholder="Enter email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2 col-md-6">
            <label class="form-label" for="password">Password <span class="text-muted">(6 characters minimum)</span></label>
            <input type="password" id="password" class="form-control" wire:model="password" placeholder="Enter password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2 col-md-6">
            <label class="form-label" for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" class="form-control" wire:model="confirm_password" placeholder="Enter confirm password">
            @error('confirm_password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2 col-md-6">
            <label class="form-label" for="phone">Phone</label>
            <input type="text" id="phone" class="form-control" wire:model="phone" placeholder="Enter phone number">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2 col-md-6">
            <label class="form-label" for="city">City</label>
            <input type="text" id="city" class="form-control" wire:model="city" placeholder="Enter city">
            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group mb-2 col-md-12">
            <label class="form-label" for="city">Your current job</label>
            <input type="text" id="city" class="form-control" wire:model="main_job" placeholder="Enter a job">
            @error('main_job') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-2 col-md-6">
            <div class="form-check form-switch form-switch-success">
                <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                <label class="form-check-label" for="customSwitchSuccess">By registering you agree to the <a href="#" class="text-primary">Terms of Use</a></label>
            </div>
        </div>

        <div class="form-group mb-0">
            <button class="btn btn-primary" type="submit">Sign Up</button>
        </div>
    </form>
</div>
