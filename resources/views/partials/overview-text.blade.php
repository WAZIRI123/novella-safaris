{{--
    Renders a package overview written as plain text:
    - "Trip outline: Day 1: … · Days 2–9: … · Day 10: …" becomes bold lines,
      followed by an "About <route>:" heading
    - short heading lines are bold, "Label: value" lines get a bold label
    - "• " lines become a bullet list
--}}
@php
    $lines = preg_split('/\R/', trim((string) $text));
    $routeName = trim(preg_replace(['/^\d+\s*Days?\s*/i', '/\s+(Climb|with|\().*$/i'], '', (string) ($name ?? '')));
    $bullets = [];
    $blocks = [];

    $flushBullets = function () use (&$bullets, &$blocks) {
        if ($bullets) {
            $blocks[] = ['list', $bullets];
            $bullets = [];
        }
    };

    foreach ($lines as $i => $line) {
        $line = trim($line);
        if ($line === '') {
            $flushBullets();
            continue;
        }

        if (str_starts_with($line, '•')) {
            $bullets[] = trim(ltrim($line, '•'));
            continue;
        }
        $flushBullets();

        if (preg_match('/^Trip outline:\s*(.+)$/i', $line, $m)) {
            foreach (preg_split('/\s*·\s*/u', $m[1]) as $part) {
                $part = rtrim(str_replace('Days ', 'Day ', $part), '.');
                $blocks[] = ['heading', preg_replace_callback('/:\s*(\p{Ll})/u', fn ($c) => ': '.mb_strtoupper($c[1]), ucfirst($part))];
            }
            $next = collect(array_slice($lines, $i + 1))->first(fn ($l) => trim($l) !== '');
            if ($routeName !== '' && ! str_starts_with(trim((string) $next), 'About ')) {
                $blocks[] = ['heading', 'About '.$routeName.':'];
            }
            continue;
        }

        if (mb_strlen($line) <= 80 && ! preg_match('/[.!]$/', $line) && ! preg_match('/^[^:]{2,40}:\s+\S/', $line)) {
            $blocks[] = ['heading', $line];
        } elseif (preg_match('/^([^:.]{2,40}):\s+(.+)$/', $line, $m)) {
            $blocks[] = ['label', $m[1], $m[2]];
        } else {
            $blocks[] = ['text', $line];
        }
    }
    $flushBullets();
@endphp

@foreach ($blocks as $block)
    @if ($block[0] === 'heading')
        <p class="overview-heading"><strong>{{ $block[1] }}</strong></p>
    @elseif ($block[0] === 'label')
        <p><strong>{{ $block[1] }}:</strong> {{ $block[2] }}</p>
    @elseif ($block[0] === 'list')
        <ul class="overview-list">
            @foreach ($block[1] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $block[1] }}</p>
    @endif
@endforeach
