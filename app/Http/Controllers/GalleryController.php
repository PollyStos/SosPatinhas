<?php

namespace App\Http\Controllers;

use App\Models\ContentPage;
use App\Models\Page;
use App\Models\Pets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request) {
        $request->validate([
            'pet_name' => 'required|string|max:255',
            'pet_type' => 'required|in:dog,cat',
            'pet_breed' => 'nullable|string|max:255',
            'status' => 'required|in:lost,found',
            'date' => 'required|date',
            'locale' => 'nullable|string|max:255',
            'pet_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pet = new Pets();
        $pet->pet_name = $request->pet_name;
        $pet->pet_type = $request->pet_type;
        $pet->pet_breed = $request->pet_breed;

        // Salva imagem em public/img
        if ($request->hasFile('pet_img')) {
            $file = $request->file('pet_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $pet->pet_img = $filename;
        }

        // Dados de acordo com status
        $user = Auth::user();

        if ($request->status === 'lost') {
            $pet->date_lost = $request->date;
            $pet->owner_id = $user->id;
            $pet->last_view_locale = $request->locale;
        } elseif ($request->status === 'found') {
            $pet->date_found = $request->date;
            $pet->finder_id = $user->id;
            $pet->found_locale = $request->locale;
        }

        $pet->save();

        return redirect()->route('formCadrastoPet')->with('success', 'Pet cadastrado com sucesso!');
    }

    public function userGallery() {
        $user = Auth::user();

        // Busca os pets onde o user é dono ou quem encontrou
        $pets = Pets::where('owner_id', $user->id)
                ->orWhere('finder_id', $user->id)
                ->get();
        
        $users = User::all();

        $nav = Page::all();
        return view('pages.userGallery', compact('pets', 'nav','users'));
    }
    public function updateInfo(Request $request) {
        $request->validate([
            'pet_id' => 'required|exists:pets,id',
            'status' => 'required|in:perdido,achado',
            'user_id' => 'required|exists:users,id',
            'locale' => 'nullable|string',
            'date' => 'nullable|date',
            'testimony' => 'nullable|string',
        ]);
        $pet = Pets::findOrFail($request->pet_id);
        
        if ($request->status === 'perdido') {
            $pet->owner_id = $request->user_id;
            $pet->last_view_locale = $request->locale;
            $pet->date_lost = $request->date;
        } else {
            $pet->finder_id = $request->user_id;
            $pet->found_locale = $request->locale;
            $pet->date_found = $request->date;
        }

        $pet->depoiment = $request->testimony;
        $pet->save();

       return redirect()->route('home.index')->with('success', 'Informações atualizadas com sucesso!');
    }


}
