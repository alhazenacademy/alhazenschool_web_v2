<x-layout
    title="503 — Under Maintenance. | Alhazen School"
    description="The system is under maintenance."
    wa-message="Hello, I saw a maintenance message (503) in Alhazen School Web."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="503"
        title="Alhazen is under maintenance."
        subtitle="We are currently performing system maintenance. Please try again later."
        :image="asset('assets/kids/error/img-503.webp')"
        imageAlt="Maintenance"
        note="Thank you for waiting. Please try reloading the page in a few minutes."
    />
</x-layout>
