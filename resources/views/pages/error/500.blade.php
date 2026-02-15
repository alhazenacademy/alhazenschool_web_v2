<x-layout
    title="500 — There is an error | Alhazen School"
    description="An error occurred on the Alhazen School server."
    wa-message="Hi, it seems like there is a 500 error in Alhazen School Web."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="500"
        title="Oops! An error occurred on the server."
        subtitle="We're trying to fix it. Please try again in a moment."
        buttonText="Back to Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-500.webp')"
        imageAlt="500 Server Error"
        note="If the problem persists, contact the Alhazen team."
    />
</x-layout>
