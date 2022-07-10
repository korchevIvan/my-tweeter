<?php

namespace App\Media;

use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class Media extends BaseMedia {
    public function type() {
        return MimeTypes::type($this->mime_type);
    }
}
