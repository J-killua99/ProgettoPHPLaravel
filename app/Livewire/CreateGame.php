<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;

class CreateGame extends Component
{
    public $title;
    public $body;
    public $price;

    protected $rules = [
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
    ];

    protected $messages = [
        'required'=>'Il campo del titolo è richiesto',
        'min'=>'La descrizione è troppo corta',
        'numeric'=>'Il prezzo dev\'essere un numero',
    ];
    
    public function store(){
        Game::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->price = '';
    }
    
    public function render()
    {
        return view('livewire.create-game');
    }
}
