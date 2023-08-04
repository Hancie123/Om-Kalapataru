<div>
    <form wire:submit.prevent="save">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" wire:model.live="name" name="name" id="name"
                        placeholder="Your Name">
                    <label for="name">Your Name</label>
                    @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" wire:model.live="email" name="email" id="email"
                        placeholder="Your Email">
                    <label for="email">Your Email</label>
                    @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" wire:model.live="subject" name="subject" id="subject"
                        placeholder="Subject">
                    <label for="subject">Subject</label>
                    @error('subject')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" wire:model.blur="message" placeholder="Leave a message here"
                        name="message" style="height: 200px"></textarea>
                    <label for="message">Message</label>
                    @error('message')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            </div>
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

            <div wire:loading.delay>
                Sending message...
            </div>

            <div class="col-12">
                <button class="btn btn-primary bg-primary rounded-pill py-3 px-5"
                    type="submit">Send Message</button>
            </div>
           
        </div>
    </form>
</div>