<?php

namespace App\Http\Livewire;


use App\Models\Book;
use App\Models\BookType;
use Livewire\Component;

class Order extends Component
{
    public $bookType;
    public $step;

    public $name = '';
    public $phone;
    public $email;

    public $price;
    public $currency = 'ZWL';
    public $quantity = 1;
    public $totalPrice;


    public $showModal = false;

    public function showModal()
    {
        $this->showModal = true;
    }

    public function hideModal()
    {
        $this->showModal = false;
    }

    public function updateModal()
    {
        $this->dispatchBrowserEvent('update-modal');
    }


    public function calculateTotalPrice()
    {
        $this->totalPrice = $this->price * $this->quantity;
        //dd($this->totalPrice);
    }


    public function setPrice($bookType)
    {
        $this->price = BookType::where('name',$this->bookType)->first()->price;

    }

    public function choose_copy($bookType)
    {
        $this->bookType = $bookType;
        $this->setPrice($bookType);

    }

    public function mount()
    {
        //initializing step
        $this->step = 0;
        $this->name = '';
        $this->phone = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.order', [
            'book' => Book::with('bookTypes')->first()
        ]);
    }
}
