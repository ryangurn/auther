<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg class="h-16 w-auto text-gray-700 sm:h-20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="153.86px" height="52.42px" viewBox="0 0 153.86 52.42" style="overflow:visible;enable-background:new 0 0 153.86 52.42;"
                         xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#FFFFFF;}
                        </style>
                        <defs>
                        </defs>
                        <g>
                            <path class="st0" d="M0,41.19c0-3.96,8.93-6.62,15.34-6.98c0.07-6.12,0.14-10.01,0.14-10.01c-3.17-2.88-7.56-4.18-13.39-4.54
		c0-2.16,0.43-3.24,2.16-3.24c6.7,0,15.34,3.02,15.34,8.28c0,13.46-0.29,22.97-0.29,22.97c0.65,0.43,2.81,1.3,3.82,1.51
		c-0.36,2.23-1.15,2.81-1.58,2.81c-2.02,0-4.39-1.08-5.54-2.38c-1.01,1.22-3.02,2.38-6.12,2.38C3.89,51.99,0,47.52,0,41.19z
		 M15.34,37.08c-4.39,0.5-9.36,1.8-11.38,3.38c0.65,5.47,2.66,8.14,6.91,8.14c2.09,0,3.38-0.58,4.46-1.15V37.08z"/>
                            <path class="st0" d="M55.23,51.99c-2.02,0-4.32-1.08-5.47-2.38c-1.66,1.15-4.68,2.38-8.21,2.38c-6.7,0-11.59-3.38-11.59-9.65
		c0-13.61,0.14-21.17,0.14-21.17c-0.65-0.5-2.88-1.37-3.89-1.58c0.43-2.16,1.22-2.81,1.66-2.81c2.74,0,6.34,2.09,6.34,4.1
		c0,13.46-0.29,22.18-0.29,22.18c1.08,3.02,3.96,5.54,9,5.54c2.59,0,4.32-0.43,6.12-1.01c0-13.46,0.14-26.64,0.14-26.64
		c-0.5-0.5-2.3-1.3-3.17-1.51c0.36-2.23,1.22-2.66,1.58-2.66c2.81,0,5.69,2.09,5.69,4.1c0,13.46-0.29,26.79-0.29,26.79
		c0.58,0.43,2.81,1.3,3.82,1.51C56.45,51.41,55.59,51.99,55.23,51.99z"/>
                            <path class="st0" d="M63.43,44.36c0-9,0-16.99,0.07-23.26h-4.03c-0.29-0.43-0.43-0.79-0.43-1.37c0-1.22,1.51-2.02,4.54-2.16
		c0-3.53,0.14-6.19,0.29-7.78c0.14-1.8,1.37-2.45,2.74-2.45c0.58,0,1.01,0.14,1.15,0.29c0,0-0.14,3.96-0.14,9.94
		c3.82,0,6.48-0.14,7.7-0.36c0.29,0.22,0.36,0.58,0.36,1.15c0,1.73-2.09,2.74-8.14,2.74c-0.07,5.69-0.14,12.67-0.14,19.95v4.18
		c1.22,2.09,3.53,3.17,7.63,3.46c0,2.16-0.36,3.31-2.16,3.31C67.61,51.99,63.43,48.75,63.43,44.36z"/>
                            <path class="st0" d="M101.02,47.88c0-13.54,0.07-22.83,0.07-22.83c-1.08-2.59-4.03-4.82-9.15-4.82c-2.23,0-3.96,0.43-5.76,1.08
		c-0.14,12.96-0.29,26.5-0.29,26.5c0.5,0.5,2.3,1.29,3.17,1.58c-0.36,2.23-1.15,2.59-1.58,2.59c-2.74,0-5.54-2.09-5.54-4.1
		c0-13.54,0.22-43.56,0.22-43.56c-0.58-0.43-2.81-1.3-3.82-1.51C78.77,0.58,79.56,0,79.92,0c2.81,0,6.34,2.09,6.34,4.1
		c0,3.96-0.07,9.29-0.07,14.98c1.51-1.15,4.18-2.3,7.13-2.3c6.7,0,11.88,3.46,11.88,9.72c0,13.39-0.14,21.17-0.14,21.17
		c0.58,0.43,2.81,1.3,3.82,1.51c-0.43,2.23-1.22,2.81-1.66,2.81C104.47,51.99,101.02,49.9,101.02,47.88z"/>
                            <path class="st0" d="M113.26,44.07c0-8.79,0-11.23,0.36-15.55c0.86-8.93,6.34-11.74,8.64-11.74c4.32,0,10.94,5.18,10.94,11.52
		c0,4.46-9.07,6.19-15.91,6.34v0.86l-0.07,9.14c3.17,2.88,7.56,4.1,13.39,4.46c0,2.16-0.43,3.31-2.16,3.31
		C121.68,52.42,113.26,49.32,113.26,44.07z M120.31,19.8c-1.22,1.58-2.59,4.68-2.95,11.95c4.39-0.36,9.79-1.15,11.88-2.74
		c-0.22-5.33-5.33-9.22-8.5-9.22H120.31z"/>
                            <path class="st0" d="M147.02,20.23c-0.94,0-1.87,0.22-2.67,0.5v0.14c0,13.46-0.29,26.79-0.29,26.79c0.58,0.43,2.81,1.3,3.82,1.51
		c-0.43,2.23-1.22,2.81-1.58,2.81c-2.81,0-6.19-2.09-6.19-4.1c0-13.54,0.14-26.71,0.14-26.71c-0.65-0.5-2.88-1.37-3.89-1.58
		c0.43-2.16,1.22-2.81,1.66-2.81c1.87,0,4.18,1.01,5.4,2.3c1.22-1.22,3.6-2.3,5.69-2.3c3.1,0,4.75,1.44,4.75,3.31
		c0,0.94-0.36,1.51-1.3,2.16C150.55,20.67,149.33,20.23,147.02,20.23z"/>
                        </g>
                    </svg>

                </div>
            </div>
        </div>
    </body>
</html>
