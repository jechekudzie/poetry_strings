<?php

namespace App\Http\Livewire;


use Livewire\Component;

class Order extends Component
{
    public $copy;
    public $step;

    public $name;
    public $phone;
    public $email;
    public $address;
    public $country;
    public $city;
    public $currency;




    public function mount()
    {
        //initializing step
        $this->step = 0;
        $this->name = '';
        $this->phone = '';
        $this->email = '';

    }

    public function choose_copy($copy)
    {

        $this->copy = $copy;

    }

    public function increase_step()
    {
        $this->step++;

    }

    public function decrease_step()
    {
        $this->step--;
    }


    public function render()
    {
        return view('livewire.order');
    }
}
