<x-layout
    title="429 — Too Many Request | Alhazen School"
    description="Too many requests in a short time."
    wa-message="Hello, I'm getting error 429 in Alhazen School Web."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="429"
        title="Too Many Request"
        subtitle="Please wait a moment before trying again."
        buttonText="Back to Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-429.webp')"
        imageAlt="429 Too Many Requests"
        note="These restrictions help protect your account from abuse."
    />
</x-layout>
