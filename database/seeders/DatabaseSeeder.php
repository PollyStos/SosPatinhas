<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\ContentPage;
use App\Models\Page;
use App\Models\Pets;
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
        $users = [
            ['name' => 'Donald Walker',     'email' => 'donald.walker@example.com','img' => 'default.jpg'],
            ['name' => 'Megan Mcclain',     'email' => 'megan.mcclain@example.com','img' => 'default.jpg'],
            ['name' => 'Olivia Moore',      'email' => 'olivia.moore@example.com','img' => 'default.jpg'],
            ['name' => 'Donald Lewis',      'email' => 'donald.lewis@example.com','img' => 'default.jpg'],
            ['name' => 'John Smith',        'email' => 'john.smith@example.com','img' => 'default.jpg'],
            ['name' => 'Karen Adams',       'email' => 'karen.adams@example.com','img' => 'default.jpg'],
            ['name' => 'Anna Johnson',      'email' => 'anna.johnson@example.com','img' => 'default.jpg'],
            ['name' => 'Emily Clark',       'email' => 'emily.clark@example.com','img' => 'default.jpg'],
            ['name' => 'Ryan Green',        'email' => 'ryan.green@example.com','img' => 'default.jpg'],
            ['name' => 'Daniel Brown',      'email' => 'daniel.brown@example.com','img' => 'default.jpg'],
            ['name' => 'Sophia White',      'email' => 'sophia.white@example.com','img' => 'default.jpg'],
            ['name' => 'Kevin Harris',      'email' => 'kevin.harris@example.com','img' => 'default.jpg'],
            ['name' => 'Michael Carter',    'email' => 'michael.carter@example.com','img' => 'default.jpg'],
            ['name' => 'Hannah King',       'email' => 'hannah.king@example.com','img' => 'default.jpg'],
            ['name' => 'David Wilson',      'email' => 'david.wilson@example.com','img' => 'default.jpg'],
            ['name' => 'Sarah Lee',         'email' => 'sarah.lee@example.com','img' => 'default.jpg'],
            ['name' => 'Natalie Evans',     'email' => 'natalie.evans@example.com','img' => 'default.jpg'],
            ['name' => 'Jake Taylor',       'email' => 'jake.taylor@example.com','img' => 'default.jpg'],
            ['name' => 'Jack Lewis',        'email' => 'jack.lewis@example.com','img' => 'default.jpg'],
            ['name' => 'Megan Foster',      'email' => 'megan.foster@example.com','img' => 'default.jpg'],
            ['name' => 'George Scott',      'email' => 'george.scott@example.com','img' => 'default.jpg'],
            ['name' => 'Ashley Thompson',   'email' => 'ashley.thompson@example.com','img' => 'default.jpg'],
            ['name' => 'Laura Smith',       'email' => 'laura.smith@example.com','img' => 'default.jpg'],
            ['name' => 'Benjamin Clark',    'email' => 'benjamin.clark@example.com','img' => 'default.jpg'],
            ['name' => 'Sophia Allen',      'email' => 'sophia.allen@example.com','img' => 'default.jpg'],
            ['name' => 'Ethan Moore',       'email' => 'ethan.moore@example.com','img' => 'default.jpg'],
            ['name' => 'Linda Taylor',      'email' => 'linda.taylor@example.com','img' => 'default.jpg'],
            ['name' => 'Paul Harris',       'email' => 'paul.harris@example.com','img' => 'default.jpg'],
            ['name' => 'Victoria Mitchell', 'email' => 'victoria.mitchell@example.com','img' => 'default.jpg'],
            ['name' => 'Joshua Carter',     'email' => 'joshua.carter@example.com','img' => 'default.jpg'],
            ['name' => 'Rachel Lee',        'email' => 'rachel.lee@example.com','img' => 'default.jpg'],
            ['name' => 'Ashley Davis',      'email' => 'ashley.davis@example.com','img' => 'default.jpg'],
            ['name' => 'Benjamin Jackson',  'email' => 'benjamin.jackson@example.com','img' => 'default.jpg'],
            ['name' => 'Aiden Green',       'email' => 'aiden.green@example.com','img' => 'default.jpg'],
            ['name' => 'Natalie Moore',     'email' => 'natalie.moore@example.com','img' => 'default.jpg'],
        ];

        foreach ($users as &$user) {
            $user['password'] = Hash::make('123456');
            User::create($user);
        }


        Page::create(['name' => 'home', 'url' => '/']);
        Page::create(['name' => 'sobre', 'url' => '/about']);
        Page::create(['name' => 'galeria', 'url' => '/galery']);
        Page::create(['name' => 'contato', 'url' => '/contact']);
        Page::create(['name' => 'blog', 'url' => '/blog']);

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
            ['page_id' => 1, 'section_page_id' => 7, 'type_section_id' => 2, 'value' => 'Cadastre seu email para receber novidades'],
            ['page_id' => 1, 'section_page_id' => 7, 'type_section_id' => 5, 'value' => '/contact'],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Perdeu seu pet?','sequence' => 1],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Não perca as esperanças! Cadastre seu amigo no Ache Seu Pet e aumente as chances de encontrá-lo','sequence' => 1],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'banner1.jpg','sequence' => 1],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Juntos, podemos fazer a diferença!','sequence' => 2],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'A comunidade unida para encontrar os pets perdidos. Conecte quem perdeu com quem encontrou!','sequence' => 2],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'banner2.jpg','sequence' => 2],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Encontrou um pet perdido?','sequence' => 3],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Tem pais de pets buscando por eles. Seja o agente que une os dois de novo!','sequence' => 3],
            ['page_id' => 1, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'banner3.jpg','sequence' => 3],
            
            ['page_id' => 2, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Sobre A SOS Patinhas'],
            ['page_id' => 2, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Nossa jornada'],
            ['page_id' => 2, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'bannerAbout.jpg'],
            ['page_id' => 2, 'section_page_id' => 1, 'type_section_id' => 3, 'value' => '<p>A SOS Patinhas nasceu do amor incondicional pelos animais e da profunda necessidade de dar voz àqueles que não podem pedir ajuda. Mais do que uma organização, somos um movimento impulsionado pela empatia, pelo cuidado e pela certeza de que cada vida importa. Desde a nossa fundação, nos dedicamos ao resgate, cuidado, recuperação e adoção de cães e gatos em situação de abandono, maus-tratos ou negligência.</p>

            <p>O caminho até aqui foi construído com esforço coletivo, sacrifícios e muitas histórias de superação. Animais que chegaram até nós machucados, famintos, assustados, e que hoje vivem cercados de amor em lares responsáveis. Cada resgate representa uma vitória. Cada adoção é uma nova chance. E cada animal que passa pelas nossas mãos carrega a esperança de um futuro melhor.</p>

            <p>Nosso trabalho não se limita apenas ao resgate. Atuamos também na conscientização da sociedade sobre guarda responsável, castração e combate aos maus-tratos. Acreditamos que a educação é uma das maiores ferramentas de transformação, por isso promovemos campanhas, eventos e parcerias com escolas, empresas e profissionais da área veterinária.</p>

            <p>A SOS Patinhas é composta por uma rede de voluntários apaixonados, que dedicam tempo, energia e coração a essa causa. Somos pessoas comuns com um propósito extraordinário: salvar vidas. Não temos abrigo fixo e contamos com lares temporários, doações e muita solidariedade para continuar nosso trabalho.</p>

            <p>Cada contribuição — seja financeira, material ou através do tempo dedicado — faz uma enorme diferença. Com sua ajuda, podemos alimentar, tratar, vacinar, castrar e preparar nossos resgatados para a adoção. Nosso compromisso é garantir que cada patinha resgatada encontre um caminho seguro, repleto de carinho e respeito.</p>

            <p>Se você chegou até aqui, é porque também se importa. Junte-se a nós nessa missão de transformar realidades. Porque quando unimos forças, salvamos vidas.</p>

            <p>SOS Patinhas – Amor que transforma.</p>'],
            ['page_id' => 3, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Galeria de Pets Encontrados e Perdidos'],
            ['page_id' => 3, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Veja os animais que estão à espera de um lar ou que ainda não reencontraram seus tutores. Ajude a espalhar e fazer a diferença!'],
            ['page_id' => 3, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'bannerGalery.jpg'],
            ['page_id' => 4, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Fale Conosco'],
            ['page_id' => 4, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Estamos aqui para ajudar — envie sua mensagem, dúvida ou sugestão e responderemos o quanto antes!'],
            ['page_id' => 4, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'bannerContato.jpg'],
            ['page_id' => 5, 'section_page_id' => 8, 'type_section_id' => 1, 'value' => 'Nosso Blog'],
            ['page_id' => 5, 'section_page_id' => 8, 'type_section_id' => 2, 'value' => 'Dicas, novidades e conteúdos que fazem a diferença para você.'],
            ['page_id' => 5, 'section_page_id' => 8, 'type_section_id' => 4, 'value' => 'bannerBlog.jpg'],
        ];
        
        foreach ($contentPage as $content) {
            ContentPage::create($content);
        }

        Blog::create([
            'title' =>'Adotar é um Ato de Amor', 
            'subtitle' =>'Veja Como Muda a Vida de um Animal Resgatado', 
            'img' =>'blog1.jpg', 
            'content' => '<p>Adotar um animal é mais do que um gesto de bondade – é um verdadeiro ato de amor e transformação. Para muitos cães e gatos abandonados, viver nas ruas significa enfrentar fome, frio, medo e, muitas vezes, maus-tratos. Quando um bichinho é acolhido por uma família amorosa, ele descobre o que é carinho, segurança e pertencimento. A adoção é a oportunidade de recomeçar, tanto para o animal quanto para o tutor.</p>
            <p>Histórias como a da Mel, uma cadelinha resgatada das ruas com sinais de maus-tratos, mostram o quanto a adoção muda vidas. Quando chegou ao abrigo, Mel era desconfiada e temerosa. Pouco a pouco, com cuidados veterinários e muito amor, ela se recuperou. Hoje, vive com uma família que a considera parte essencial da casa. Casos como esse são comuns no SOS Patinhas, onde cada adoção é comemorada como uma vitória.</p>
            <p>Adotar também contribui para reduzir o número de animais abandonados nas ruas e nos abrigos. Em vez de incentivar a compra e o mercado de criação descontrolada, a adoção promove responsabilidade e compaixão. Ao escolher adotar, você ajuda a frear o ciclo do abandono e oferece um final feliz para quem um dia foi invisível.</p>
            <p>Se você está pensando em adotar, procure uma instituição séria como o SOS Patinhas. Lá, cada animal é avaliado, vacinado e preparado para encontrar um lar definitivo. Dê uma chance a um animal resgatado e descubra como esse gesto pode trazer mais amor e alegria à sua vida.</p>']);
        Blog::create([
            'title' =>'Como Cuidar de um Animal Resgatado', 
            'subtitle' =>'Dicas Para o Novo Tutor', 
            'img' =>'blog2.jpg', 
            'content' => '<p>Ao adotar um animal resgatado, o novo tutor se depara com uma fase de adaptação que exige paciência, compreensão e muito carinho. Muitos desses animais passaram por situações traumáticas e podem apresentar medo ou comportamentos defensivos. O primeiro passo é criar um ambiente seguro e tranquilo, onde ele possa se sentir acolhido. Evite barulhos altos e permita que ele explore a casa no seu tempo.</p>
            <p>A rotina também é fundamental para gerar confiança. Alimentação no mesmo horário, passeios regulares e interações positivas com os membros da família ajudam o animal a entender que agora ele faz parte de um lar. Muitos cães e gatos resgatados precisam de reforço positivo para aprender comandos e comportamentos. Evite punições e invista em recompensas, como petiscos ou carinhos.</p>
            <p>Levar o pet ao veterinário logo após a adoção é essencial para garantir que ele esteja saudável. Mesmo que o abrigo já tenha feito um check-up inicial, é importante manter a carteirinha de vacina atualizada, vermifugar e, se necessário, realizar a castração. A saúde é um pilar fundamental para o bem-estar do novo membro da família.</p>
            <p>Por fim, lembre-se de que cada animal tem seu próprio tempo de adaptação. Alguns se sentem em casa rapidamente; outros precisam de semanas ou meses. Respeitar esse processo faz toda a diferença. Com amor e dedicação, o vínculo que se cria entre tutor e animal resgatado é profundo e especial.</p>']);
        Blog::create([
            'title' =>'Sinais de Maus-Tratos em Animais', 
            'subtitle' =>'Como Identificar e Denunciar?', 
            'img' =>'blog3.jpg', 
            'content' => '<p>Maus-tratos contra animais ainda são uma triste realidade no Brasil. Reconhecer os sinais de sofrimento é o primeiro passo para ajudar um animal em perigo. Fique atento a ferimentos expostos, magreza extrema, apatia, machucados mal curados, sinais de desidratação ou agressividade fora do normal. Cães e gatos que vivem presos constantemente em espaços pequenos, sem acesso à água, comida ou proteção contra o sol e chuva também estão em situação de risco.</p>
            <p>Ao identificar maus-tratos, é importante reunir provas, como fotos, vídeos ou testemunhos. Com esse material, você pode registrar um boletim de ocorrência na delegacia mais próxima ou acionar a polícia ambiental. Em muitos municípios, também é possível denunciar através de canais online da prefeitura ou do Ministério Público.</p>
            <p>Infelizmente, muitas pessoas ainda ignoram ou relativizam sinais claros de negligência. Por isso, a consciência coletiva é fundamental. Se você presenciar uma situação de maus-tratos, não hesite em agir. O silêncio também é cumplicidade. Denunciar é um ato de coragem e compaixão.</p>
            <p>O SOS Patinhas está sempre disposto a orientar e apoiar quem deseja ajudar animais em situação de risco. Contamos com uma rede de voluntários, advogados e veterinários que auxiliam nesses casos. Juntos, podemos lutar contra a crueldade e proteger aqueles que não têm voz.</p>']);
        Blog::create([
            'title' =>'Vacinas e Vermífugos', 
            'subtitle' =>'A Saúde do Seu Pet em Primeiro Lugar', 
            'img' =>'blog4.jpg', 
            'content' => '<p>Garantir a saúde de um animal resgatado é um compromisso que começa logo nos primeiros dias de adoção. Muitos desses pets chegam aos abrigos em condições precárias, com imunidade baixa e exposição a doenças. A vacinação adequada e a vermifugação são cuidados básicos que evitam problemas futuros e garantem uma vida longa e saudável ao seu novo companheiro.</p>
            <p>As principais vacinas para cães são a V8 ou V10 e a antirrábica. Já para gatos, recomenda-se a V3, V4 ou V5 e a antirrábica. Todas devem ser aplicadas por um médico veterinário e exigem reforços anuais. A vermifugação também deve ser feita periodicamente, pois parasitas internos podem causar anemias, diarreias e complicações graves.</p>
            <p>Além disso, realizar exames de sangue, testar para doenças como cinomose, parvovirose ou FIV/Felv (nos gatos) é essencial. Esses diagnósticos precoces aumentam as chances de tratamento eficaz e evitam a propagação de doenças contagiosas. Consultas regulares ao veterinário devem fazer parte da rotina do tutor.</p>
            <p>O cuidado com a saúde vai muito além da estética. Um animal saudável é mais feliz, brincalhão e tem maior qualidade de vida. Ao adotar, você assume a responsabilidade de garantir que seu pet tenha bem-estar físico e emocional. Comece com o básico: vacinas, vermífugos e muito amor.</p>']);
        Blog::create([
            'title' =>'Bazar Solidário e Ações do SOS Patinhas', 
            'subtitle' =>'Como Você Pode Ajudar',
            'img' =>'blog5.jpg', 
            'content' => '<p>O trabalho do SOS Patinhas só é possível graças ao apoio de pessoas como você. Para manter o resgate, tratamento e adoção de centenas de animais, realizamos diversos eventos beneficentes ao longo do ano. Um dos principais é o nosso Bazar Solidário, onde vendemos roupas, acessórios, utensílios domésticos e muito mais, tudo com valores acessíveis e renda 100% revertida para os animais.</p>

            <p>Esses eventos são oportunidades para quem deseja ajudar, mas não pode adotar. Doações de itens em bom estado, participação como voluntário nos dias do bazar ou divulgação nas redes sociais são formas muito valiosas de contribuir. Cada pequeno gesto soma e faz a diferença.</p>

            <p>Além do bazar, também realizamos campanhas de arrecadação de ração, medicamentos e produtos de limpeza. Periodicamente, promovemos feiras de adoção e mutirões de castração. Toda ajuda é bem-vinda, e sempre prestamos contas com transparência do uso das doações.</p>

            <p>A causa animal precisa de aliados. Seja participando de nossas ações, compartilhando nossos posts ou doando o que puder, você se torna parte ativa de uma corrente do bem. O SOS Patinhas agradece a cada pessoa que acredita e contribui para um futuro mais justo e amoroso para todos os animais.</p>']);
    
        $pets = [
            [
                'pet_name' => 'Belinha',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Beagle',
                'owner_id' => 1,
                'date_lost' => '2025-03-20',
                'last_view_locale' => 'Rua Anna, nº 379, Bairro Jardim América',
            ],
            [
                'pet_name' => 'Joshua',
                'pet_img' => 'perdido2.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Bengal',
                'owner_id' => 2,
                'date_lost' => '2025-04-13',
                'last_view_locale' => 'Rua Romana, nº 1559, Centro',
            ],
            [
                'pet_name' => 'Ginger',
                'pet_img' => 'perdido3.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Persa',
                'owner_id' => 3,
                'date_lost' => '2025-04-15',
                'last_view_locale' => 'Avenida do Parque, nº 450',
                'depoiment' => 'Ginger foi encontrada no parque perto da minha casa. Estava assustada e um pouco suja, mas com muito carinho conseguimos conquistá-la novamente. Ver o reencontro com sua dona foi emocionante e nos fez acreditar ainda mais na importância da solidariedade.',
                'finder_id' => 4,
                'date_found' => '2025-04-17',
                'found_locale' => 'Parque Municipal'
            ],
            [
                'pet_name' => 'Max',
                'pet_img' => 'perdido4.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Golden Retriever',
                'owner_id' => 5,
                'date_lost' => '2025-02-22',
                'last_view_locale' => 'Rua das Palmeiras, nº 21',
            ],
            [
                'pet_name' => 'Charlie',
                'pet_img' => 'perdido5.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Poodle',
                'owner_id' => 6,
                'date_lost' => '2025-03-10',
                'last_view_locale' => 'Rua das Araucárias, nº 232',
                'depoiment' => 'Charlie foi encontrado em uma cafeteria do bairro. Ele estava deitado próximo à porta, como se esperasse por alguém. Demos água, comida e carinho, e em pouco tempo conseguimos entrar em contato com sua família. Foi gratificante fazer parte desse reencontro.',
                'finder_id' => 7,
                'date_found' => '2025-03-12',
                'found_locale' => 'Cafeteria da Esquina'
            ],
            [
                'pet_name' => 'Bella',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Labrador',
                'owner_id' => 8,
                'date_lost' => '2025-03-11',
                'last_view_locale' => 'Rua Carvalho, nº 600',
                'depoiment' => 'Bella foi encontrada no parque para cachorros. Estava brincando com outros animais e parecia bem cuidada. Levamos ao veterinário para confirmar e logo conseguimos localizá-la. Foi uma alegria ver a felicidade da família ao reencontrá-la.',
                'finder_id' => 9,
                'date_found' => '2025-03-15',
                'found_locale' => 'Parque Pet Feliz'
            ],
            [
                'pet_name' => 'Socks',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Rajado',
                'owner_id' => 10,
                'date_lost' => '2025-02-10',
                'last_view_locale' => 'Rua das Palmeiras, nº 903',
            ],
            [
                'pet_name' => 'Rocky',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Pitbull',
                'owner_id' => 11,
                'date_lost' => '2025-01-05',
                'last_view_locale' => 'Rua Principal, nº 1025',
                'depoiment' => 'Rocky foi encontrado perto de uma padaria local. Estava muito cansado, mas ao oferecer água e alimento, logo se animou. Entramos em contato com os tutores e foi comovente presenciar a alegria de todos ao vê-lo seguro novamente.',
                'finder_id' => 12,
                'date_found' => '2025-01-10',
                'found_locale' => 'Padaria Pão Quente'
            ],
            [
                'pet_name' => 'Luna',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Siamês',
                'owner_id' => 13,
                'date_lost' => '2025-03-01',
                'last_view_locale' => 'Avenida Central, nº 155',
            ],
            [
                'pet_name' => 'Toby',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Bulldog',
                'owner_id' => 14,
                'date_lost' => '2025-03-19',
                'last_view_locale' => 'Rua dos Pinheiros, nº 211',
            ],
            [
                'pet_name' => 'Gato',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Maine Coon',
                'finder_id' => 16,
                'date_found' => '2025-03-10',
                'found_locale' => 'Beco do Café'
            ],
            [
                'pet_name' => 'Jack',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Dachshund',
                'owner_id' => 17,
                'date_lost' => '2025-03-18',
                'last_view_locale' => 'Avenida Pôr do Sol, nº 420',
                'depoiment' => 'Jack foi encontrado em uma livraria da região. Ele entrou como se estivesse procurando algo e se aninhou embaixo de uma estante. Avisamos o grupo de pets perdidos e conseguimos localizar o dono em poucos dias. Foi lindo ver a conexão entre eles.',
                'finder_id' => 18,
                'date_found' => '2025-03-20',
                'found_locale' => 'Livraria Central'
            ],
            [
                'pet_name' => 'Gato',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Scottish Fold',
                'finder_id' => 19,
                'date_found' => '2025-02-28',
                'found_locale' => 'Rua Norte, nº 232',
            ],
            [
                'pet_name' => 'Coco',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Chihuahua',
                'owner_id' => 20,
                'date_lost' => '2025-03-08',
                'last_view_locale' => 'Avenida Central, nº 9801',
                'depoiment' => 'Coco foi encontrado em um beco próximo ao mercado. Apesar de estar muito assustado, conseguimos acalmá-lo e levá-lo até uma clínica. Sua dona ficou extremamente agradecida e emocionada ao reencontrá-lo.',
                'finder_id' => 21,
                'date_found' => '2025-03-12',
                'found_locale' => 'Beco Esperança'
            ],
            [
                'pet_name' => 'Cão',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Boxer',
                'finder_id' => 23,
                'date_found' => '2025-02-28',
                'found_locale' => 'Parque Municipal'
            ],
            [
                'pet_name' => 'Gato',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Cat',
                'pet_breed' => 'Raça Indefinida',
                'finder_id' => 25,
                'date_found' => '2025-02-01',
                'found_locale' => 'Restaurante da Praça'
            ],
            [
                'pet_name' => 'Rosie',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Shih Tzu',
                'owner_id' => 26,
                'date_lost' => '2025-02-14',
                'last_view_locale' => 'Rua das Sequóias, nº 870',
            ],
            [
                'pet_name' => 'Lucky',
                'pet_img' => 'perdido1.jpeg',
                'pet_type' => 'Dog',
                'pet_breed' => 'Cocker Spaniel',
                'owner_id' => 27,
                'date_lost' => '2025-03-10',
                'last_view_locale' => 'Rua Pinewood, nº 720',
            ]
                    
        ];

        foreach ($pets as $pet) {
            Pets::create($pet);
        }
    }
}