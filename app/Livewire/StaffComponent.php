<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\StaffDetailModel;
use Livewire\WithFileUploads;

class StaffComponent extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name="";

    #[Rule('required|unique:staff_details,email')]
    public $email="";

    #[Rule('required|unique:staff_details,mobile')]
    public $mobile="";

    #[Rule('required')]
    public $address="";

    #[Rule('image|max:2048')]
    public $profile_pic;

    #[Rule('required')]
    public $bio;

    public function save(){
        $validatedData = $this->validate();

        $path = $this->profile_pic->store('img', 'public');

        $save= StaffDetailModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'address' => $this->address,
            'profile_picture' => $path,
            'bio' => $this->bio,
        ]);

        
        if(!empty($save)){
            return back()->with('success','You have successfully saved the staff details!');
        }
        else {
            return back()->with('fail','Error Occurred!');
        }
        

       
        
        
    }
    public function render()
    {
        return view('livewire.staff-component');
    }
}