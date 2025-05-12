@extends('layouts.layout')

@section('title', 'Responsabilidade Social')

@section('content')
    <section class="py-5 bg_color_white">
        <div class="container">
            <h1 class="mb-4">Responsabilidade Social</h1>

            <p>Na <strong>SOS Patinhas</strong>, acreditamos que nosso papel vai além dos serviços que oferecemos. Temos um compromisso com o bem-estar da sociedade e do meio ambiente.</p>

            <h4>1. Compromisso com a Comunidade</h4>
            <p>Buscamos promover ações que contribuam para o desenvolvimento social, apoiando projetos locais, instituições de caridade e iniciativas que gerem impacto positivo na vida das pessoas.</p>

            <h4>2. Sustentabilidade Ambiental</h4>
            <p>Adotamos práticas sustentáveis em nossas operações, buscando reduzir o desperdício, promover a reciclagem e incentivar o consumo consciente de recursos naturais.</p>

            <h4>3. Ética e Transparência</h4>
            <p>Prezamos por uma conduta ética e transparente em todas as nossas relações — com clientes, colaboradores, parceiros e a sociedade em geral.</p>

            <h4>4. Valorização das Pessoas</h4>
            <p>Investimos no crescimento pessoal e profissional de nossos colaboradores, promovendo um ambiente de trabalho respeitoso, inclusivo e seguro para todos.</p>

            <h4>5. Educação e Conscientização</h4>
            <p>Acreditamos na força da informação e da educação. Por isso, apoiamos e desenvolvemos campanhas que promovem a conscientização sobre temas relevantes para a sociedade.</p>

            <p class="mt-4">Juntos, podemos construir um futuro mais justo, humano e sustentável.</p>

            <p class="mt-4"><strong>Última atualização:</strong> {{ date('d/m/Y') }}</p>
        </div>
    </section>
@endsection
