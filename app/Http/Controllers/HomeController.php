<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContentPage;
use App\Models\Page;
use App\Models\Pets;
use stdClass;

class HomeController extends Controller
{
    public function index () {
        $view = view('pages.home');
        $contents = ContentPage::with(['page', 'sectionPage', 'typeSection'])->where('page_id',1)->get();
        $blogsContent = Blog::select('id','title', 'img')->get();
        
        $blogs = $blogsContent->random(4);

        $lostData = Pets::where('date_found',null)->get();
        $lost = $lostData->random(4);

        $foundData = Pets::where('date_lost',null)->get();
        $found = $foundData->random(4);

        $depoimentsData = Pets::with('found') // carrega os dados do usuário dono
            ->whereNotNull('depoiment')
            ->get();
        $depoiments = $depoimentsData->random(5);

        $view->with('depoiments', $depoiments);

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
            
            if ($content->sequence == 0) {
                // Armazena diretamente o conteúdo
                $section->{$page}->{$sectionPage}->{$typeSectionName} = $content;

                if($sectionPage =='blog'){
                    $section->{$page}->{$sectionPage} ->blogs = $blogs;
                }
                if($sectionPage =='lost'){
                    $section->{$page}->{$sectionPage} ->lostPets = $lost;
                }
                if($sectionPage =='found'){
                    $section->{$page}->{$sectionPage} ->foundPets = $found;
                }

            } else {
                // Cria array/objeto por sequência
                if (!isset($section->{$page}->{$sectionPage}->{$typeSectionName})) {
                    $section->{$page}->{$sectionPage}->{$typeSectionName} = [];
                }

                $section->{$page}->{$sectionPage}->{$typeSectionName}[$content->sequence] = $content;
            }
        }
        $view->with('section', $section);
        $view->with('nav', Page::all());

        return $view;
    }
}
