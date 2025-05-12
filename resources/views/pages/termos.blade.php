@extends('layouts.layout')

@section('title', 'Termos de Uso')

@section('content')
    <section class="py-5 bg_color_white">
        <div class="container">
            <h1 class="mb-4">Termos de Uso</h1>

            <p>Bem-vindo ao nosso site! Ao acessar e utilizar nossos serviços, você concorda com os seguintes termos e condições. Leia atentamente antes de continuar.</p>

            <h4>1. Aceitação dos Termos</h4>
            <p>Ao acessar o site, você concorda em cumprir estes Termos de Uso e todas as leis e regulamentos aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site.</p>

            <h4>2. Uso do Site</h4>
            <p>Você se compromete a utilizar este site de forma lícita, respeitosa e de acordo com estes termos. Não é permitido utilizar o conteúdo do site para fins ilegais ou que violem os direitos de terceiros.</p>

            <h4>3. Propriedade Intelectual</h4>
            <p>Todo o conteúdo presente neste site, incluindo textos, imagens, logotipos, vídeos e gráficos, é de propriedade exclusiva da empresa ou seus licenciadores e está protegido pelas leis de direitos autorais e propriedade intelectual.</p>

            <h4>4. Responsabilidades</h4>
            <p>Não nos responsabilizamos por quaisquer danos decorrentes do uso incorreto do site ou de informações nele contidas. O uso dos nossos serviços é de responsabilidade exclusiva do usuário.</p>

            <h4>5. Modificações nos Termos</h4>
            <p>Podemos atualizar estes Termos de Uso a qualquer momento, sem aviso prévio. Recomendamos que você os revise periodicamente para estar ciente de eventuais alterações.</p>

            <h4>6. Contato</h4>
            <p>Em caso de dúvidas sobre os Termos de Uso, entre em contato conosco pelo e-mail: contato@seudominio.com.</p>

            <p class="mt-4"><strong>Última atualização:</strong> {{ date('d/m/Y') }}</p>
        </div>
    </section>
@endsection
