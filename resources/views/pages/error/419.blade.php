<x-layout
    title="419 — Session Ended | Alhazen School"
    description="The page session has expired."
    wa-message="Hello, I'm getting error 419 in Alhazen School Web."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="419"
        title="Your session has ended."
        subtitle="Please reload the page and try again."
        buttonText="Reload Page"
        :buttonHref="url()->previous() ?? route('home', absolute: false)"
        :image="asset('assets/kids/error/img-419.webp')"
        imageAlt="Session expired"
        note="For security, the session ends if the page is open for too long."
    />
</x-layout>
