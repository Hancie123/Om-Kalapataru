<div>
    <form wire:submit.prevent="save">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" wire:model="name" name="name" id="name"
                        placeholder="Your Name">
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" wire:model="email" name="email" id="email"
                        placeholder="Your Email">
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" wire:model="subject" name="subject" id="subject"
                        placeholder="Subject">
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" wire:model="message" placeholder="Leave a message here"
                        name="message" id="message" style="height: 200px"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary bg-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div>