<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Syarat extends Component
{
    public function mount()
    {
        // Dispatch an event to update the header title when the component is mounted
        $this->dispatch('updatePageTitle', 'SYARAT PINJAMAN BAGI PERALATAN MULTIMEDIA');
    }
    public function render()
    {
        return view('livewire.home.syarat');
    }
}
