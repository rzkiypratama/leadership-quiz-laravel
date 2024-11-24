<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ $title ?? 'Default Title' }}</title>

	<!-- Inline CSS slot -->
	{{ $inlineCSS ?? '' }}
</head>
