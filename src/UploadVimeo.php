<?php

namespace App;

use App\Traits\ConstructVimeo as TraitsConstructVimeo;

class UploadVimeo
{
    use TraitsConstructVimeo;

    private Variable $variable;

    public function __construct(Variable $variable)
    {
        $this->variable = $variable;
    }

    public function upload(string $path, ?string $name = null)
    {
        $filename = $name ?? uniqid();

        $lib = $this->vimeo($this->variable);

        $response = $lib->upload($path, [
            "name" => $filename,
            "privacy" => [
                "view" => "anybody"
            ]
        ]);

        echo $response . PHP_EOL;
    }
}
