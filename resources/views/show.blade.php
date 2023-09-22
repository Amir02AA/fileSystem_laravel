<?php ?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="table w-full p-2">
    <table class="w-full border">
        <thead>
        <tr class="bg-gray-50 border-b">
            <th class="border-r p-2">
                <input type="checkbox">
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    ID
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                    </svg>
                </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    Name
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                    </svg>
                </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    File Size
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                    </svg>
                </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    Action
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                    </svg>
                </div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="bg-gray-50 text-center">
            <td class="p-2 border-r">

            </td>
            <td class="p-2 border-r">
                <input type="text" class="border p-1">
            </td>
            <td class="p-2 border-r">
                <input type="text" class="border p-1">
            </td>
            <td class="p-2 border-r">
                <input type="text" class="border p-1">
            </td>
            <td class="p-2 border-r">
                <input type="text" class="border p-1">
            </td>


        </tr>
        @foreach($files as $key => $file)
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">
                    <input type="checkbox">
                </td>
                <td class="p-2 border-r">{{$key+1}}</td>
                <td class="p-2 border-r">
                    <div class="flex flex-row justify-center gap-3">
                        {!! $svgs[$file['extension']] !!}
                        <label class="text-center">
                            {{$file['name']}}
                        </label>
                    </div>
                </td>
                <td class="p-2 border-r">{{$file['size']}}</td>
                <td>
                    <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                    <a href="#" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

