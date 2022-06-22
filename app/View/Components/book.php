<?php

namespace App\View\Components;

use Illuminate\View\Component;

class book extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $image;
    public $message;
    public $author;
    public function __construct($image, $message, $author)
    {
        $this->image = $image;
        $this->message = $message;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book');
    }
}