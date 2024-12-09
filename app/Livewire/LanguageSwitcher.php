<?php

namespace App\Livewire;

use App\Models\Language;
use Livewire\Attributes\On;
use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $languages;
    public $currentLanguage;

    public function mount() {
        $this->languages = Language::all();
        $this->currentLanguage = $this->languages->first();
    }

    #[On('language-switcher:change')]
    public function change(string $languageId)
    {
        $this->currentLanguage = $this->languages->find($languageId);
    }

    public function changeLanguage(string $languageId)
    {
        $this->currentLanguage = $this->languages->find($languageId);
        $this->dispatch('language-switcher:change', $languageId);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
