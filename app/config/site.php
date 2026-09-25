<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Configurações Gerais do Site
 * 
 * Centraliza informações factuais apuradas em fontes públicas
 * (Instagram, Facebook, Google Maps e DentMap em 25/09/2026),
 * canais de atendimento e parâmetros de conformidade ética (CFO 196/2019).
 */

$site = [
    // Identificação Profissional
    'name' => 'Dra. Débora Almeida',
    'title_signature' => 'Dra. Débora Almeida',
    'subtitle_signature' => 'Odontologia Estética',
    'profession' => 'Cirurgiã-Dentista',
    'cro' => 'CRO-PE 20.636',
    'cro_status' => 'Conferir documento antes da publicação final',
    'concept' => 'Sorrisos com naturalidade',
    'base_url' => '', // Configurar domínio final quando contratado
    
    // Localização & Dados Gerais
    'city' => 'Petrolina',
    'state' => 'PE',
    'location_short' => 'Petrolina, PE',
    'tagline' => 'Seu sorriso merece cuidado em cada detalhe.',
    'meta_description' => 'Cirurgiã-dentista Dra. Débora Almeida em Petrolina, PE. Cuidado odontológico individualizado com foco na estética natural e na saúde bucal plena.',

    // Contato e Atendimento
    'phone' => '(87) 99112-3727',
    'phone_link' => 'tel:+5587991123727',
    'whatsapp_number' => '5587991123727',
    'whatsapp_message' => 'Olá, gostaria de agendar uma avaliação com a Dra. Débora.',

    // Endereço Completo
    'address' => [
        'building' => 'Empresarial Trade Center',
        'street' => 'Rua Joaquim Nabuco',
        'room' => 'Sala 1406, 14º andar',
        'district' => 'Centro',
        'city' => 'Petrolina',
        'state' => 'PE',
        'cep' => '56304-040',
        'formatted' => 'Empresarial Trade Center, Rua Joaquim Nabuco, sala 1406, 14º andar, Centro, Petrolina-PE, CEP 56304-040',
        'display_short' => 'Empresarial Trade Center, Sala 1406 • Centro, Petrolina-PE',
    ],

    // Horários exatos dependem de confirmação com a profissional.
    'hours' => [
        'status' => 'Com hora marcada',
        'note' => 'Confirme os dias e horários disponíveis pelo WhatsApp.',
        'weekdays' => 'Atendimento mediante agendamento.',
        'saturday' => 'Consulte a disponibilidade pelo WhatsApp.',
        'sunday' => '',
    ],

    // Redes Sociais
    'social' => [
        'instagram' => 'https://www.instagram.com/dradeboraalmeiida/',
        'instagram_handle' => '@dradeboraalmeiida',
        'facebook' => 'https://www.facebook.com/p/Dra-D%C3%A9bora-Almeida-Odontologia-61567815174145/',
    ],

    // Google Maps e Prova Social Factual
    'google_maps_url' => 'https://maps.app.goo.gl/87Xp2yetDZ53HHKJ6',
    'google_search_url' => 'https://share.google/yFAvBhXpfqWiR25JH',
    'google_reviews_url' => 'https://maps.app.goo.gl/87Xp2yetDZ53HHKJ6',
    'rating' => [
        'score' => '5,0',
        'score_number' => 5.0,
        'label' => 'Nota 5.0 no Google Reviews',
        'reviews_count' => '14',
        'note' => 'Ficha consultada no Google Maps em 25/09/2026. Tratar como dado mutável e passível de atualização.',
    ],

    // Navegação Principal Estável
    'nav_links' => [
        ['label' => 'Sobre', 'url' => 'sobre.php'],
        ['label' => 'Lentes em Resina', 'url' => 'lentes-em-resina.php'],
        ['label' => 'Clareamento', 'url' => 'clareamento-dental.php'],
        ['label' => 'Saúde Bucal', 'url' => 'saude-bucal.php'],
        ['label' => 'Contato', 'url' => 'contato.php'],
    ],

    // Cuidados Divulgados / Áreas de Atuação
    'treatments' => [
        [
            'id' => 'lentes-resina',
            'title' => 'Lentes em Resina',
            'badge' => 'Estética do Sorriso',
            'url' => 'lentes-em-resina.php',
            'description' => 'Possibilidade de harmonizar formato, textura e proporção dos dentes com planejamento estético personalizado, respeitando a biologia bucal de cada paciente.',
            'icon' => 'sparkles',
        ],
        [
            'id' => 'clareamento',
            'title' => 'Clareamento Dental',
            'badge' => 'Luminosidade',
            'url' => 'clareamento-dental.php',
            'description' => 'Técnicas de clareamento supervisionadas para valorizar a luminosidade natural do sorriso com conforto, após exame prévio da sensibilidade e da saúde do esmalte.',
            'icon' => 'sun',
        ],
        [
            'id' => 'profilaxia',
            'title' => 'Limpeza / Profilaxia',
            'badge' => 'Saúde Bucal',
            'url' => 'saude-bucal.php',
            'description' => 'Manutenção essencial da saúde gengival e dental, removendo placa bacteriana e tártaro para prevenir inflamações e garantir bem-estar contínuo.',
            'icon' => 'shield-check',
        ],
        [
            'id' => 'cirurgia-oral',
            'title' => 'Cirurgia Oral',
            'badge' => 'Cuidado Clínico',
            'url' => 'saude-bucal.php#cirurgia',
            'description' => 'Avaliação cuidadosa e acompanhamento humanizado para extrações e pequenas intervenções necessárias para o restabelecimento da saúde oral.',
            'icon' => 'activity',
        ],
        [
            'id' => 'ortodontia',
            'title' => 'Ortodontia',
            'badge' => 'Alinhamento',
            'url' => 'saude-bucal.php#ortodontia',
            'description' => 'Exame e acompanhamento das necessidades de alinhamento dentário e equilíbrio funcional da oclusão, indicando o direcionamento adequado para cada caso.',
            'icon' => 'git-commit',
        ],
    ],

    // Perguntas Frequentes Educativas da Home
    'faqs' => [
        [
            'question' => 'Como funciona a primeira avaliação com a Dra. Débora?',
            'answer' => 'A consulta inicial é dedicada a ouvir suas queixas, avaliar detalhadamente a saúde bucal e gengival e conversar sobre seus objetivos estéticos. A partir desse exame, é elaborado um planejamento individualizado e transparente, sem pressa.',
        ],
        [
            'question' => 'Quem tem indicação para lentes em resina?',
            'answer' => 'As lentes em resina são uma alternativa para harmonizar discretamente formato, cor ou espaçamentos entre os dentes. A indicação depende sempre da integridade dos dentes e da saúde gengival, definida após avaliação clínica individual.',
        ],
        [
            'question' => 'O clareamento dental causa sensibilidade?',
            'answer' => 'A sensibilidade varia conforme as características individuais de cada paciente. Durante a avaliação, a Dra. Débora analisa o seu perfil e orienta o método mais adequado, adotando cuidados prévios para garantir o máximo de conforto.',
        ],
        [
            'question' => 'Onde fica o consultório e como solicitar agendamento?',
            'answer' => 'O consultório está localizado no 14º andar do Empresarial Trade Center (sala 1406), na Rua Joaquim Nabuco, Centro de Petrolina-PE. Os atendimentos acontecem com hora marcada, e o agendamento pode ser solicitado diretamente pelo WhatsApp.',
        ],
        [
            'question' => 'Como saber qual o tratamento mais indicado para mim?',
            'answer' => 'Cada sorriso possui anatomia, histórico e necessidades próprias. Por isso, nenhuma conduta clínica ou estética é padronizada: o tratamento correto é sempre definido após exame presencial criterioso.',
        ],
    ],

    // Destaques da Experiência no Consultório
    'experience_features' => [
        [
            'title' => 'Localização Central e Estruturada',
            'desc' => 'Instalado no Empresarial Trade Center, com fácil acesso no Centro de Petrolina e estrutura executiva.',
        ],
        [
            'title' => 'Privacidade e Conforto no 14º Andar',
            'desc' => 'Ambiente calmo e acolhedor na sala 1406, planejado para que você se sinta à vontade durante todo o atendimento.',
        ],
        [
            'title' => 'Atendimento com Hora Marcada',
            'desc' => 'Consultas organizadas com tempo dedicado para escuta, exame clínico detalhado e conversa franca.',
        ],
    ],
];

/**
 * Escapa strings para saída segura em HTML (XSS prevention)
 */
if (!function_exists('e')) {
    function e(?string $value): string {
        return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

/**
 * Constrói link oficial do WhatsApp com mensagem pré-preenchida
 */
if (!function_exists('getWhatsAppUrl')) {
    function getWhatsAppUrl(array $siteConfig, ?string $customMessage = null): string {
        $phone = preg_replace('/\D+/', '', (string) ($siteConfig['whatsapp_number'] ?? '5587991123727'));
        $message = $customMessage ?? ($siteConfig['whatsapp_message'] ?? 'Olá');
        return 'https://wa.me/' . $phone . '?text=' . rawurlencode($message);
    }
}

return $site;
