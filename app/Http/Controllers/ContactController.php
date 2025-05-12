<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\ContentPage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class ContactController extends Controller
{
    public function index () {
        $view = view('pages.contact');
        $contents = ContentPage::with(['page', 'sectionPage', 'typeSection'])->where('page_id',4)->get();
        
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

    public function send(Request $request) {
         // Simples (home)
    if ($request->has('email') && !$request->has('message')) {
        $request->validate(['email' => 'required|email']);

        Mail::to('polly.stos22@gmail.com')->send(new ContactMessage([
            'email' => $request->email
        ]));

        return back()->with('success', 'Email cadastrado com sucesso!');
    }

    // Completo (página de contato)
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'subject' => 'required|string|max:150',
        'message' => 'required|string',
    ]);

    Mail::to('polly.stos22@gmail.com')->send(new ContactMessage($request->only(['name', 'email', 'subject', 'message'])));

    return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
