<div class="container border p-3 rounded">
    <form wire:submit="save">

        <div class="row mb-2">
            <div class="col-md-4 mb-2">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control form-control-sm" id="name" wire:model.live="name"
                    placeholder="Enter name" name="name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-md-4 mb-2">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control form-control-sm" wire:model.live="email" id="email"
                    placeholder="Enter email" name="email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="mobile" class="form-label">Mobile:</label>
                <input type="text" class="form-control form-control-sm" wire:model.live="mobile" id="mobile"
                    placeholder="Enter mobile" name="mobile">
                @error('mobile')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        </div>


        <div class="row">




            <div class="col-md-4 mb-2">
                <label for="name" class="form-label">Address:</label>
                <input type="text" class="form-control form-control-sm" id="address" wire:model.live="address"
                    placeholder="Enter address" name="address">
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4 mb-2">

                <label for="mobile" class="form-label">Profile Pic:</label>
                <input type="file" class="form-control form-control-sm" wire:model="profile_pic" id="profile_pic"
                    placeholder="Upload profile_pic" name="profile_pic">
                @error('profile_pic')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <label for="mobile" class="form-label">Bio:</label>
                <textarea class="form-control form-control-sm" wire:model.blur="bio"></textarea>
                @error('bio')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        </div>


        <button type="submit" class="btn btn-primary">Save </button>
    </form>
<br>

    @if(Session()->has('success'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{Session()->get('success')}}
    </div>
    @endif
    @if(Session()->has('fail'))
    <div class="alert alert-danger">
        <strong>Fail!</strong> {{Session()->get('fail')}}
    </div>
    @endif
</div>