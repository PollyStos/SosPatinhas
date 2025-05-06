<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentPage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'page_id',
        'section_page_id',
        'type_section_id',
        'value',
        'sequence',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function sectionPage()
    {
        return $this->belongsTo(SectionPage::class);
    }

    public function typeSection()
    {
        return $this->belongsTo(TypeSection::class);
    }
}
