<?php

namespace App\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $languages = ['ua', 'ru'];
    public $currentLanguage;

    public function mount() {
        $this->currentLanguage = $this->languages[0];
    }

    public function changeLanguage(string $language)
    {
        $this->currentLanguage = $language;
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
