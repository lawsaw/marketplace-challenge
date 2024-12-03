<?php

namespace App\Livewire;

use App\Models\Language;
use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $languages;
    public $currentLanguage;

    public function mount() {
        $this->languages = Language::all();
        $this->currentLanguage = $this->languages->first();
    }

    public function changeLanguage(string $languageId)
    {
        $this->currentLanguage = $this->languages->find($languageId);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
