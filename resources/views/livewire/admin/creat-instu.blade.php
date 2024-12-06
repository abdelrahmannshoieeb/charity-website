<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Institution</h4>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label text-end">Name</label>
                            <div class="col-sm-10">
                                <input wire:model="name" class="form-control" type="text" id="name" placeholder="Institution Name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="telephone" class="col-sm-2 col-form-label text-end">Telephone</label>
                            <div class="col-sm-10">
                                <input wire:model="telephone" class="form-control" type="tel" id="telephone" placeholder="Telephone">
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <div class="mb-3 row col-md-6">
                                <label for="job_select" class="col-sm-2 col-form-label text-end">Select Jobs</label>
                                <div class="col-sm-10">
                                    <select wire:model="selectedJobs" id="job_select" class="form-select">
                                        <option value="">Select Job</option>
                                        @foreach($selectOptions as $job)
                                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row col-md-6">
                                <label for="city_select" class="col-sm-2 col-form-label text-end">Select City</label>
                                <div class="col-sm-10">
                                    <select wire:model="selectedCity" id="city_select" class="form-select">
                                        <option value="">Select City</option>
                                        @foreach($cities as $city)
                                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div><!--end col-->

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Custom File Upload</h4>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="d-grid">
                                        <p class="text-muted">Upload your institution's image here, please click "Upload Image" Button.</p>
                                        <div class="preview-box d-block justify-content-center rounded border-dashed border-theme-color overflow-hidden p-3">
                                            @if($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="100" />
                                            @endif
                                        </div>
                                        <input wire:model="image" type="file" id="input-file" name="input-file" accept="image/*" hidden />
                                        <label class="btn-upload btn btn-primary mt-3" for="input-file">Upload Image</label>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end row-->

                <div class="form-group mt-3">
                    <button wire:click="submit" class="btn btn-success">Submit</button>
                </div>

                @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
                @endif
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->