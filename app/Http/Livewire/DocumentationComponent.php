<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Symfony\Component\Yaml\Yaml;

class DocumentationComponent extends Component
{
    public function render()
    {
        $filePath = base_path(). '/public/api.yaml';
        // dd((string) $filePath);
        // $yaml = Yaml::parseFile($filePath);
        // dd($yaml);
        return view('livewire.documentation-component',[
            // 'yaml_data' => $yaml
        ])->layout('layouts.doc');
    }
}
