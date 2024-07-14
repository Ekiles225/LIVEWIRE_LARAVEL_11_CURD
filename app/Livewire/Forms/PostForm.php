<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $postModel;
    
    public $nombre = '';
    public $apellido = '';
    public $edad = '';
    public $cedula = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'edad' => 'required',
			'cedula' => 'required|string',
        ];
    }

    public function setPostModel(Post $postModel): void
    {
        $this->postModel = $postModel;
        
        $this->nombre = $this->postModel->nombre;
        $this->apellido = $this->postModel->apellido;
        $this->edad = $this->postModel->edad;
        $this->cedula = $this->postModel->cedula;
    }

    public function store(): void
    {
        $this->postModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->postModel->update($this->validate());

        $this->reset();
    }
}
