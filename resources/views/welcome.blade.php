<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- <h1 class="font-bold underline">Daftar Makanan</h1>
    <ul>
        @foreach($makanans as $makanan)
        <img src={{ $makanan->gambar }}
        width="300" />
            <li>{{ $makanan->nama }} - Rp. {{
            number_format($makanan->harga)}}</li>
        @endforeach
    </ul> -->
<div class="flex mt-10">
&emsp;  
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="https://cdn0-production-images-kly.akamaized.net/OHzX2xDRWYElycf6Uxz66HZQMPM=/2107x0:4231x2831/469x625/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2825744/original/089180200_1560239608-shutterstock_1178128243.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Mie</div>
    <p class="text-gray-700 text-base">
    Rp 15.000
  </p>
  </div>
  
</div>
&emsp;
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2019/06/Resep-Nasi-Goreng-Jawa.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Nasi Goreng Jawa</div>
    <p class="text-gray-700 text-base">
    Rp 15.000
  </p>
  </div>
  
</div>

</div>
            
</body>


</html>