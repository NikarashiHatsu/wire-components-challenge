<?php

namespace App\Livewire;

use App\Enums\PostVisibility;
use Livewire\Component;

class FacebookPost extends Component
{
    public string $profilePicture;

    public string $userName;

    public string $datePosted;

    public PostVisibility $postVisibility;

    public ?array $media = null;

    public string $caption;

    public ?array $reactions = null;

    public ?int $reactionsCount = null;

    public ?int $commentsCount = null;

    public ?int $sharesCount = null;

    public ?array $htmlMedias = null;

    public function mount()
    {
        if (count($this->media) > 0) {
            $this->htmlMedias = collect($this->media)
                ->map(function (string $media) {
                    return <<<HTML
                        <img src="$media" class="w-full h-full object-cover" />
                    HTML;
                })
                ->toArray();
        }

        if (count($this->reactions) > 0) {
            $this->reactionsCount = collect($this->reactions)->sum();

            $this->reactions = collect($this->reactions)
                ->sortDesc()
                ->take(3)
                ->toArray();

                ray($this->reactions);
        }
    }

    public function render()
    {
        return view('livewire.facebook-post');
    }
}
