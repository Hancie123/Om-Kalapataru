<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\ContactModel;
use App\Events\SendContactEmailEvent;
use App\Jobs\SendContactEmailJob;
use Livewire\WithEvents;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{

    #[Rule('required')]
    public $name="";

    #[Rule('required|email')]
    public $email="";

    #[Rule('required')]
    public $subject="";

    #[Rule('required')]
    public $message="";


    public $recipients = [
        'hanciewanemphago@gmail.com'
       
    ];

    

    public function save(){

        $validate=$this->validate();

        $save=ContactModel::create($validate);


        $recipients = [
            'omkalpataru.brj@gmail.com',
            // Add more email recipients if needed
        ];

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'contactmessage' => $this->message, 
        ];

        foreach ($recipients as $recipient) {
            Mail::send('emails.email', $data, function ($message) use ($recipient, $data) {
                $message->to($recipient);
                $message->subject($data['subject']);
            });
        }


        if($save){
            return back()->with('success','You have send the message successfully!');
        }
        else {
            return back()->with('fail','Error Occurred!');
        }
        
        

    }

   
    
    public function render()
    {
        return view('livewire.contact');
    }
}
