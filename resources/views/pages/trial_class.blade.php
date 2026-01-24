<x-layout wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />
    <x-trial-class.form :programs="$programs" :times="$times" :sources="$sources" :sales-phone="$salesPhone" :holidays="$holidays" />
</x-layout>
