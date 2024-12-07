<div class="tab-content">
    <div>
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Personal Information</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div class="form-group mb-3 row">
                    <label
                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Name</label>
                    <div class="col-lg-9 col-xl-8">
                        <input
                            wire:model="name"
                            class="form-control"
                            type="text"
                            value="Dodson" />
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label
                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Job</label>
                    <div class="col-lg-9 col-xl-8">
                        <input
                            wire:model="job"

                            class="form-control"
                            type="text"
                            value="MannatThemes" />
                        @error('job')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <span class="form-text text-muted font-12">We'll never share your email with anyone
                            else.</span>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <label
                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                    <div class="col-lg-9 col-xl-8">
                        <div class="input-group">
                            <span class="input-group-text"><i class="las la-phone"></i></span>
                            <input
                                wire:model="phone"

                                type="text"
                                class="form-control"
                                value="+123456789"
                                placeholder="Phone"
                                aria-describedby="basic-addon1" />
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label
                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-8">
                        <div class="input-group">
                            <span class="input-group-text"><i class="las la-at"></i></span>
                            <input
                                wire:model="email"

                                type="text"
                                class="form-control"
                                value="rosa.dodson@demo.com"
                                placeholder="Email"
                                aria-describedby="basic-addon1" />
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label
                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">City</label>
                    <div class="col-lg-9 col-xl-8">
                        <select class="form-select" wire:model="city">
                            @foreach ($cities as $City)
                            <option value="{{ $City->name }}">{{ $City->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                        <button type="submit" class="btn btn-primary" wire:click="updatePersonal">
                            Submit
                        </button>
                        <button type="button" class="btn btn-danger">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Change Password</h4>
            </div>
            <div class="card-body pt-0">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="updatePassword">
                    <div class="form-group mb-3 row">
                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                        <div class="col-lg-9 col-xl-8">
                            <input wire:model="currentPassword" class="form-control @error('currentPassword') is-invalid @enderror" type="password" placeholder="Password" />
                            @error('currentPassword') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                        <div class="col-lg-9 col-xl-8">
                            <input wire:model="newPassword" class="form-control @error('newPassword') is-invalid @enderror" type="password" placeholder="New Password" />
                            @error('newPassword') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                        <div class="col-lg-9 col-xl-8">
                            <input wire:model="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror" type="password" placeholder="Re-Password" />
                            @error('confirmPassword') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-danger" wire:click="reset(['currentPassword', 'newPassword', 'confirmPassword'])">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data</h4>
            </div>
            <div class="card-body pt-0">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form>
                    <div class="form-group mb-3 row">
                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">jobs</label>
                        <div class="col-lg-9 col-xl-8 d-flex gap-2">
                            <input class="form-control" type="text" wire:model="jobb" placeholder="jobs" />
                            <a class="btn btn-primary" wire:click="addJob">Add</a>
                        </div>
                        @if($jobs)
                        @foreach ($jobs as $jobItem)
                        <h4 style="position: relative; left: 220px" class="m-1">{{ $jobItem }} </h4> 
                        @endforeach
                        @endif

                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">skills</label>
                        <div class="col-lg-9 col-xl-8 d-flex gap-2">
                            <input class="form-control" type="text" wire:model="skilll" placeholder="skills" />
                            <a class="btn btn-primary" wire:click="addSkill">Add</a>
                        </div>
                        @if($skills)
                        @foreach ($skills as $skill)
                        <h4 style="position: relative; left: 220px" class="m-1">{{ $skill }} </h4> 
                        @endforeach
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                            <a class="btn btn-primary" wire:click="addJobAndSkillsTO">Change data</a>
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>