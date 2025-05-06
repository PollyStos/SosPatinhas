<?php

namespace Database\Seeders;

use App\Models\ContentPage;
use App\Models\Page;
use App\Models\SectionPage;
use App\Models\TypeSection;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
           'name' => 'Estudante Exemplo',
            'email' => 'student@example.com',
            'password' => Hash::make('123456'),
        ]);

        Page::create(['name' => 'home', 'url' => '/']);
        Page::create(['name' => 'sobre', 'url' => '/about']);
        Page::create(['name' => 'galeria', 'url' => '/galery']);
        Page::create(['name' => 'contato', 'url' => '/contact']);

        $sectionsPage = [
            ['name' => 'about'],
            ['name' => 'lost'],
            ['name' => 'found'],
            ['name' => 'donate'],
            ['name' => 'testemonial'],
            ['name' => 'blog'],
            ['name' => 'contact'],
            ['name' => 'banner'],
        ];
        
        foreach ($sectionsPage as $section) {
            SectionPage::create($section);
        }

        $typeSections = [
            ['name' => 'title'],
            ['name' => 'subtitle'],
            ['name' => 'paragraph'],
            ['name' => 'image'],
            ['name' => 'button'],
        ];
        
        foreach ($typeSections as $type) {
            TypeSection::create($type);
        }

        $contentPage = [
            ['page_id' => 1, 'section_page_id' => 1, 'type_section_id' => 1, 'value' => 'Sobre a SOS Patinhas'],
            ['page_id' => 1, 'section_page_id' => 1, 'type_section_id' => 3, 'value' => 'A SOS Patinhas é uma organização dedicada à proteção e ao bem-estar animal, atuando com amor e responsabilidade no resgate de cães e gatos em situação de abandono ou maus-tratos. Com o apoio de voluntários e doações da comunidade, a SOS Patinhas oferece cuidados veterinários, abrigo temporário e busca por lares responsáveis para os animais resgatados. Além disso, promove campanhas de adoção, conscientização e castração, contribuindo ativamente para a redução do abandono e para uma convivência mais harmoniosa entre humanos e animais.'],
            ['page_id' => 1, 'section_page_id' => 2, 'type_section_id' => 1, 'value' => 'Patinhas Perdidas'],
            ['page_id' => 1, 'section_page_id' => 2, 'type_section_id' => 2, 'value' => 'Nos ajude a encontrá-los'],
            ['page_id' => 1, 'section_page_id' => 3, 'type_section_id' => 1, 'value' => 'Patinhas Encontradas'],
            ['page_id' => 1, 'section_page_id' => 3, 'type_section_id' => 2, 'value' => 'Procura-se o dono'],
            ['page_id' => 1, 'section_page_id' => 4, 'type_section_id' => 3, 'value' => 'Com seu apoio, a SOS Patinhas pode continuar resgatando, cuidando e encontrando lares cheios de amor para animais abandonados. Seja um voluntário, faça uma doação ou compartilhe essa causa. Juntos, podemos salvar mais patinhas!'],
            ['page_id' => 1, 'section_page_id' => 6, 'type_section_id' => 1, 'value' => 'Assuntos em Alta'],
            ['page_id' => 1, 'section_page_id' => 7, 'type_section_id' => 2, 'value' => 'Nos envie uma mensagem'],
            ['page_id' => 1, 'section_page_id' => 7, 'type_section_id' => 5, 'value' => '/contact'],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Perdeu seu pet?','sequence' => 1],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Não perca as esperanças! Cadastre seu amigo no Ache Seu Pet e aumente as chances de encontrá-lo','sequence' => 1],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'banner1.jpg','sequence' => 1],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Juntos, podemos fazer a diferença!','sequence' => 2],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'A comunidade unida para encontrar os pets perdidos. Conecte quem perdeu com quem encontrou!','sequence' => 2],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'banner2.jpg','sequence' => 2],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Encontrou um pet perdido?','sequence' => 3],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Tem pais de pets buscando por eles. Seja o agente que une os dois de novo!','sequence' => 3],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'banner2.jpg','sequence' => 3],
        ];
        
        foreach ($contentPage as $content) {
            ContentPage::create($content);
        }


    }
}
