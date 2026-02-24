<x-layout title="Title - K12 - Kindergarten" description="Description - K12 - Kindergarten"
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen School."
    :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    @php
        $badges = [ 'Islamic Manners', 'Independence', 'Creativity'];

        $title = "Alhazen Kindergarten";

        $subtitle = "K1 & K2 Programs";

        $description = "Alhazen Kindergarten is an early childhood education institution focused on building Islamic character, foundational learning skills, and life skills through active, enjoyable, and developmentally appropriate activities.<br> <br>
        With the implementation of three core curricula (Diniyyah, Literacy, Numeracy & Life Skills), Alhazen Kindergarten prepares children aged 4–6 years to become righteous, creative, and independent individuals for the Academic Year 2026/2027.";

        $floatingCardsText = 'Academic Year 2026/2027';
    @endphp
    <x-k-12.hero :badges="$badges" :title="$title" :subtitle="$subtitle" :description="$description" :floatingCardsText="$floatingCardsText" />

    <x-k-12.kindergarten.our-curriculum />

    <x-k-12.kindergarten.subjects-offered />

    <x-k-12.kindergarten.daily-activity-structure />

    <x-k-12.kindergarten.learning-system />

    <x-k-12.kindergarten.whats-included />

    <x-k-12.school-gallery title="Kindergarten" />

    <x-k-12.parent-testimoni />

    <x-cta-trial-class />

    <x-faq />
    
    <x-footer />
</x-layout>