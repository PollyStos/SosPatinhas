<?php

namespace App\Http\Controllers;

use App\Models\ContentPage;
use App\Models\Page;
use App\Models\Pets;
use Illuminate\Http\Request;
use stdClass;

class GalleryController extends Controller
{
    public function index () {
        $view = view('pages.galery');
        $contents = ContentPage::with(['page', 'sectionPage', 'typeSection'])->where('page_id',3)->get();
        
        $view->with('pets', Pets::where(function ($query) {
            $query->whereNull('date_found')
                ->orWhereNull('date_lost');
        })->get());


        $section = new stdClass;
        foreach ($contents as $content) {
            $page = $content->page->name;
            $sectionPage = $content->sectionPage->name;
            $typeSectionName = $content->typeSection->name;

            if (!isset($section->{$page})) {
                $section->{$page} = new stdClass;
            }

            if (!isset($section->{$page}->{$sectionPage})) {
                $section->{$page}->{$sectionPage} = new stdClass;
            }
            // Armazena diretamente o conteúdo
            $section->{$page}->{$sectionPage}->{$typeSectionName} = $content;

            $section->{$page}->{$sectionPage}->{$typeSectionName}[$content->sequence] = $content;
        }
        $view->with('section', $section);
        $view->with('nav', Page::all());

        return $view;
    }
}
