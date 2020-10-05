<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Renault Radio Code Generator</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="orange">Renault Radio Code Generator</h1>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    @if (count($errors) > 0)
                        <div class="text-lg text-center warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <b>{{ $error }}</b>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6 text-gray-600 dark:text-gray-400 text-center">
                            Enter your last 4 character of your radio serial number.
                            <h1>
                            <form action="/generate" method="post" class="text-center" >
                                @csrf
                                <input class="form-control text-center" type="text" name="precode" id="precode" placeholder="e.g. V428" maxlength="4" onkeyup="var start = this.selectionStart;var end = this.selectionEnd;this.value = this.value.toUpperCase();this.setSelectionRange(start, end);" >
                                <button type="submit">Get Code</button>
                            </form>

                                @isset($result)
                                    <div class=" dark:text-gray-400 text-lg text-center">
                                        <h1>{{$result->code}}</h1>
                                    </div>
                                @endisset
                            </h1>
                        </div>
                        <div>
                            <img src="sample.jpg" alt="sample code" width="462">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <a href="http://twitter.com/ozankozan" target="_blank">
                                Made with <span style="color: #e25555;">&#9829;</span> in Istanbul.
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Build v{{ env('APP_VERSION') }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
