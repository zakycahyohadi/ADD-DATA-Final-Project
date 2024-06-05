{{-- edit --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir dengan Flowbite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css">
</head>
<body class="font-sans antialiased">


    <div class="container mx-auto p-8">
        <form action="{{ route('post.update' , $post->id)}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('put')
            <div>
                <label for="image" class="block text-blue-700 text-2xl font-black">Gambar</label>
                <input type="file" id="image" name="image" class="block w-full mt-1" >


            <!-- Input Judul -->
            <div>
                <label for="title" class="block text-blue-700 text-2xl font-black">Judul</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" class="block w-full mt-1" >
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="block text-blue-700 text-2xl font-black">Deskripsi</label>
                <textarea id="description" name="description"  class="block w-full mt-1">{{ $post->description }}</textarea>
            </div>


            <!-- Input Konten -->
            <div>
                <label for="content" class="block text-blue-700 text-2xl font-black">Konten</label>
                <textarea id="content" name="content"  class="block w-full mt-1">{{ $post->content }}</textarea>
            </div>


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="px-8 py-3 text-base mt-10 font-medium text-center text-blue-700 bg-white hover:text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CLICK TO SUBMIT</button>
            </div>
        </form>
    </div>


</body>
</html>
